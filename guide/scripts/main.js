var filenames = ['_reading.php', '_videos.php', '_raq.php', '_tbq.php'];
var image_types =['.jpg', '.png', '.jpeg'];

$('document').ready(function() {
	$('.tbq-toggle').click(function(e) {
		e.preventDefault();
		$(this).next().toggleClass('hidden');
	});
	$('.distractor').click(function(e) {
		alert("That is not correct, please try again.");
		$(this).css('text-decoration', 'line-through');
	});
	
	$('.answer').click(function(e) {
		alert("That is correct");
		$(this).css('font-weight', 'bold');
	});
	$('.reveal-additional-content').click(function(e) {
		e.preventDefault();
		if ($(this).next().hasClass('hidden')) {
			$(this).html('Read less.');
		} else {
			$(this).html('Read more.');
		}
		$(this).next().toggleClass('hidden');
	});
	//alert();
	
	// Below gets the name of the folder for images and JSON
	/*var pathname = window.location.pathname;
	var lab = pathname.split('/').pop();
	$.each(filenames, function (index, value) {
		lab = lab.replace(value, '');
	});
	
	var json_file = lab + "/image_data.json";
	
	$.getJSON(json_file, function(data) {
		$('img').each(function() {
			var image_data;
			var image = this.src.split('/').pop();
			$.each(image_types, function (index, value) {
				image = image.replace(value, '');
			});
				//console.log(data.erythrocytes);
			$.each(data, function(key, value) {
				//console.log(key);
				if (image == key) {
					image_data = value;
				}
			});
			if (image_data) {
				console.log(image_data);
				$(this).parent().append('<div class="image-title">'+image_data.title+'</div>');
			}	
		});
	});*/
});