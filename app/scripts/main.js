$(document).ready(function() {
	$('.carousel').carousel({
		interval: 5000
	})

	$('.wp1').waypoint(function() {
		$('.wp1').addClass('animated fadeInUp');
	}, {
		offset: '100%'
	});
	$('.wp2').waypoint(function() {
		$('.wp2').addClass('animated fadeInUp');
	}, {
		offset: '100%'
	});
	$('.wp3').waypoint(function() {
		$('.wp3').addClass('animated fadeInDown');
	}, {
		offset: '100%'
	});


	$('#submit').click(function(){
		$.post("http://seven-ply.bplaced.net/scripts/mail.php", $("#contactForm").serialize(),  function(response) {   
			console.log("message sent response: "+response);
			$('#mailSentSuccess').show();
		});
		return false; 
	});
});

