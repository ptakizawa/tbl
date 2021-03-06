var questions_ = [];
var tbq_questions_  = [];
var current_slide_;
var current_time_;
var display_explanations_ = 0;

function paragraph (text, order) {
	this.text = text;
	this.order = order;
}

function list_item(text, order) {
	this.text = text;
	this.order = order;
}

function list(items, order) {
	var list = [];
	items.forEach(function(text, index) {
		var item = new list_item(text, index + 1);
		list.push(item);
	});
	this.items = list;
	this.order = order;
}

function question (stem, options, explanation, number, img) {
	this.stem = stem;
	this.options = options;
	this.explanation = explanation;
	this.number = number;
	this.img = img;
}


$('document').ready(function() {
	var path = window.location.pathname;
	var current_time_ = Date.now();
	if (path.search(/raq/) != -1) {
		$.ajax({
			type: 'GET',
			url: 'raq.json',
			dataType: 'JSON',
			success: function(data) {				
				$.each(data["questions"], function(index, value) {
					var stem = parseStem(value["question"]["stem"]);
					var raq = new question(stem, value["question"]["options"], value["question"]["explanation"], value["question"]["number"], value["question"]["img"]);
					questions_.push(raq);
			  	});
			  	questions_.sort(function(a,b) {
				  	return (a.number > b.number ? 1 : -1);
			  	});
			  	var open_question_date = Date.parse(data["release_questions"]);
			  	var current = Date.now();
			  	var lab_date = Date.parse(data["date"]);
			  	if (path.search(/_faculty/) != -1) {
				  	displayQuestions(display_explanations_=1);
			  	} else if(current > open_question_date) {
				  	displayQuestions(display_explanations_=0);
				} else {
				  	$('.raq').append('<h4>Will be available the day of the in-class session</h4>');
				}
			}			
		});
	}
		
	if (path.search(/tbq/) != -1) {
		$.ajax({
			type: 'GET',
			url: 'tbq.json',
			dataType: 'JSON',
			success: function(data) {		
				$.each(data["questions"], function(index, value) {
					var stem = parseStem(value["question"]["stem"]);
					var raq = new question(stem, value["question"]["options"], value["question"]["explanation"], value["question"]["number"], value["question"]["img"]);
					tbq_questions_.push(raq);
			  	});
			  	tbq_questions_.sort(function(a,b) {
				  	return (a.number > b.number ? 1 : -1);
			  	});
			  	var open_question_date = Date.parse(data["release_questions"]);
			  	var current = Date.now();
			  	var lab_date = Date.parse(data["date"]);
			  	
			  	if (path.search(/_faculty/) != -1) {
				  	displayTbqQuestions(display_explanations_=1);
			  	} else if(current > open_question_date) {
				  	displayTbqQuestions(display_explanations_=0);
				} else {
				  	$('.tbq').append('<h4>Will be available the day of the in-class session</h4>');
				}
			}			
		});
	}

	$('#video-faster').click(function(e) {
		e.preventDefault();
		var speed = $('video').get(0).playbackRate;
		if (speed <= 2) {
			$('video').get(0).playbackRate = speed + 0.1;
			var new_speed = $('video').get(0).playbackRate;
			$('span.video-speed').html("Speed = "+new_speed.toFixed(1)+"x");
		}
	});
	
	$('#video-slower').click(function(e) {
		e.preventDefault();
		var speed = $('video').get(0).playbackRate;
		if (speed >= 0.1) {
			$('video').get(0).playbackRate = speed - 0.1;
			var new_speed = $('video').get(0).playbackRate;
			$('span.video-speed').html("Speed = "+new_speed.toFixed(1)+"x");
		}
	});
	
	
		
});

function parseStem(stem_data) {
	var parsed_stem = [];
	counter = 1;
	$.each(stem_data, function(key, value) {
		if (key.search(/paragraph_/) != -1) {
			var p = new paragraph(value, counter);
			parsed_stem.push(p);
			counter++;
		} else if (key.search(/list_/) != -1) {
			var l = new list(value, counter);
			parsed_stem.push(l);
			counter++;
		}
	});
	return parsed_stem;
}

function generateStemHTML(stem_data) {
	var stem_html = "";
  	stem_data.forEach(function(element) {
	  	if (element instanceof paragraph) {
		  	stem_html = stem_html.concat("<p>");
		  	stem_html = stem_html.concat(element.text);
		  	stem_html = stem_html.concat("</p>");
	  	} else if (element instanceof list) {
		  	element.items.sort(function(a,b) {
			  	return (a.order > b.order ? 1 : -1);
		  	});
		  	stem_html = stem_html.concat("<ul>")
		  	element.items.forEach(function(item) {
			  	stem_html = stem_html.concat("<li>"+item.text+"</li>");
		  	});
		  	stem_html = stem_html.concat("</ul>");
	  	}
  	});
  	return stem_html;

}

function displayQuestions(explanations) {
	questions_.forEach(function(question) {
		question.stem.sort(function(a,b) {
		  	return (a.order > b.order ? 1 : -1);
	  	});
	  	var stem_html = generateStemHTML(question.stem);
	  	$('ol.questions').append('<li class="question">'+stem_html+'</li>');
		if (question.img.length > 0) {
			$('li.question:last').append('<img class="img-responsive" src="'+question.img+'">');
		} 
		$('li.question:last').append('<ol type="A" class="question-options"></ol>');
		for(var i=0; i < question.options.length;  i++) {
			$('ol.question-options:last').append('<li>'+question.options[i]+'</li>');
		}
		
		/*if (explanations) {
			$('li.question:last').append('<br /><button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#explanation_'+question.number+'">Show Explanation</button><div class="modal fade" id="explanation_'+question.number+'" role="dialog"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal">&times;</button><h4 class="modal-title">Explanation</h4></div><div class="modal-body"><p>'+question.explanation+'</p></div><div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal">Close</button></div></div></div></div>');
		}*/
	});
}

function displayTbqQuestions(explanations) {
	tbq_questions_.forEach(function(question) {
		question.stem.sort(function(a,b) {
		  	return (a.order > b.order ? 1 : -1);
	  	});
	  	var stem_html = generateStemHTML(question.stem);
	  	/*question.stem.forEach(function(element) {
		  	if (element instanceof paragraph) {
			  	stem_html = stem_html.concat("<p>");
			  	stem_html = stem_html.concat(element.text);
			  	stem_html = stem_html.concat("</p>");
		  	} else if (element instanceof list) {
			  	element.items.sort(function(a,b) {
				  	return (a.order > b.order ? 1 : -1);
			  	});
			  	stem_html = stem_html.concat("<ul>")
			  	element.items.forEach(function(item) {
				  	stem_html = stem_html.concat("<li>"+item.text+"</li>");
			  	});
			  	stem_html = stem_html.concat("</ul>");
		  	}
	  	});*/
		$('ol.questions').append('<div class = "tbq-toggle"><h4>Open question</h4></div><div class = "tbq hidden"><li class="question">'+stem_html+'</li>');
		
		$('li.question:last').append('<ol type="A" class="question-options"></ol>');
		//$('li.question:last').append('<img class="img-responsive" src="'+question.img+'">');
		for(var i=0; i < question.options.length;  i++) {
			$('ol.question-options:last').append('<li>'+question.options[i]+'</li>');
		}
		if (question.img.length > 0) {
			$('li.question:last').append('<img class="img-responsive" src="'+question.img+'">');
		}
		$('ol.questions').append('</div/>');
		
	});
		//$('li.question:last').append('<span class="marker-info"><a href="#" number="'+question.number+'">Show Marker</a></span>');
		/*(if (explanations) {
			$('li.question:last').append('<br /><button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#explanation_'+question.number+'">Show Explanation</button><div class="modal fade" id="explanation_'+question.number+'" role="dialog"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal">&times;</button><h4 class="modal-title">Explanation</h4></div><div class="modal-body"><p>'+question.explanation+'</p></div><div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal">Close</button></div></div></div></div>');
		}*/
	$('.tbq-toggle').click(function(e) {
		e.preventDefault();
		$(this).next().toggleClass('hidden');
		if ($(this).next().hasClass('hidden')) {
			$(this).find('.open-state').html('Open');
		} else {
			$(this).find('.open-state').html('Close');
		}
	});
}