$(document).ready(function(){

	//ANIMATED ANCHOR
	$.fn.extend({
	animateAnchor: function() {	
		if($(this).attr("href").length > 1) {
 			$('html,body').animate({scrollTop: ($($(this).attr("href")).offset().top - 10)},'slow');
		}
		return false;
	}
	});
	

	//HEADER - Memebers log in
	$("#MembersNav button").click(function(){
		
		var logInForm = $("#MembersNavLogIn form");

		if(logInForm.is(":visible")) {
			logInForm.slideUp();
		} else {
			logInForm.slideDown();
		}

		return false;
	
	});

	//HEADER - Memebers log in form submit
	$("#MembersNavLogIn form").submit(function(){
		$(this).slideUp();
	});

	//FOOTER - Open members log in
	$("#FooterOnlineBooking").click(function(){
		
		$('html,body').animate({scrollTop: ($($(this).attr("href")).offset().top - 10)},'slow', function(){
			$("#MembersNavLogIn form").slideDown();
		});
		
		return false;
	
	});

	//HOME PAGE FEATURE IMAGES
	$('#HomeMainFeatureImages').crossSlide({
	  sleep: 3,
	  fade: 1.1
	}, [
	  { src: '../images/home/feature_1.jpg' },
	  { src: '../images/home/feature_2.jpg' },
	  { src: '../images/home/feature_3.jpg' },
	  { src: '../images/home/feature_4.jpg' },
	  { src: '../images/home/feature_5.jpg' }
	]);

});