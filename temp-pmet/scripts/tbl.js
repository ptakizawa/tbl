$('document').ready(function() {
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
	
	$('.tbq-toggle').click(function(e) {
		e.preventDefault();
		$(this).next().toggleClass('hidden');
		if ($(this).next().hasClass('hidden')) {
			$(this).find('.open-state').html('Open');
		} else {
			$(this).find('.open-state').html('Close');
		}
	});
		
});