$(document).ready(function(){

	//MOBILE LINKS
	if(navigator.userAgent.match(/iPhone/i) || navigator.userAgent.match(/iPod/i) || navigator.userAgent.match(/iPad/i)) {
		    $("a").click(function (event) {
		    event.preventDefault();
		    window.location = $(this).attr("href");
		});
	}

	//ANIMATED ANCHOR
	$.fn.extend({
	animateAnchor: function() {	
		if($(this).attr("href").length > 1) {
 			$('html,body').animate({scrollTop: ($($(this).attr("href")).offset().top - 10)},'slow');
		}
		return false;
	}
	});

	//VALIDATE EMPTY FIELD
	$.fn.extend({
	validateEmpty: function() {	
		if($(this).val() == "" || $(this).val() == undefined) {
 			$(this).prev(".errorMessage").show(); 
		} else {
			$(this).prev(".errorMessage").hide(); 
		}
	}
	});

	//CLOSE IE6 MESSAGE
	$("#IEMessage button").click(function(){
		$("#IEMessage").hide();
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

	//HEADER - Responsive Menu
	$("#ShowMenuButton").click(function(){
			
			if($("#MainNav ul").is(":visible"))
			{
				$("#MainNav ul").slideUp(function(){
					$("#MainNav ul").removeAttr("style");
				});
				$(this).html('Show main menu <span class="icon plus"><!-- --></span>');
				
			}
			else {
				$("#MainNav ul").slideDown();
				$(this).html('Hide main menu <span class="icon minus"><!-- --></span>');
			}
	
	});

	//FOOTER - Open members log in
	$("#FooterOnlineBooking").click(function(){
		
		$('html,body').animate({scrollTop: ($($(this).attr("href")).offset().top - 10)},'slow', function(){
			$("#MembersNavLogIn form").slideDown();
		});
		
		return false;
	
	});

	//HOME PAGE FEATURE IMAGES
	try {
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
	} catch(e) {}

	//TRIAL FLIGHTS - Change Price
	$("#TrialLessonForm .price").html("&pound;"+$(this).find(":selected").text().split('£')[1]);
	
	$("#TrialLessonForm_NumberOfLessons").change(function(){
		$("#TrialLessonForm .price").html("&pound;"+$(this).find(":selected").text().split('£')[1]);
	});

	//TRIAL FLIGHTS - Validate Form
	$("#TrialLessonForm").submit(function(){
		
		$("#TrialLessonForm_StudentName").validateEmpty();
		
		if($(".errorMessage").is(":visible")) {
			//SCROLL TO ERROR
			$('html,body').animate({scrollTop: ($(".errorMessage:visible").offset().top - 50)},'slow');
			return false;
		} else {
			return true;
		}
		return false;
		
	});

	//AIRCRAFT - PHOTO GALLERY
	try {
		$(".aircraftGallery a[rel^='photoGallery']").prettyPhoto({animation_speed:'normal',slideshow:5000, autoplay_slideshow: true, hideflash: true});
	} catch(e) {}

	//VIDEO DIARY - PLAY VIDEO
	try{
		$("a[rel^='videoDiary']").prettyPhoto();
	} catch(e) {}

	//ACCOUNTS - SEND SHOPPING CART
	$("#AccountsForm").submit(function(){

		
		$("#AccountsForm_MembershipNumber").validateEmpty();
		
		if($(".errorMessage").is(":visible")) {
			//SCROLL TO ERROR
			$('html,body').animate({scrollTop: ($(".errorMessage:visible").offset().top - 50)},'slow');
			return false;
		} else {
			
			var numberOfItems = $("#AccountsTable tr").size();
			var getMembershipNumber = $("#AccountsForm_MembershipNumber").val();
			var itemsHTML = "";
			var itemNumber = 0;

			for(i=1;i<numberOfItems; i++) {
				
				var getItemName = $("#AccountsTable tr").eq(i).find("td").eq(0).text();
				var getItemAmount = $("#AccountsTable tr").eq(i).find("td").eq(1).text().replace("£","");
				var getQuantity = $("#AccountsTable tr").eq(i).find("input").val();

				if(getQuantity == "0" || getQuantity == "") { } else {
					
					itemNumber++;
					itemsHTML += '<input type="hidden" name="on0_'+itemNumber+'" value="Membership no" />\n';
					itemsHTML += '<input type="hidden" name="os0_'+itemNumber+'" value="'+getMembershipNumber+'" />\n';
					itemsHTML += '<input type="hidden" name="item_name_'+itemNumber+'" value="'+getItemName+'" />\n';
		        	itemsHTML += '<input type="hidden" name="amount_'+itemNumber+'" value="'+getItemAmount+'">\n';
		        	itemsHTML += '<input type="hidden" name="quantity_'+itemNumber+'" value="'+getQuantity+'">\n\n';
				
				}
			}

			$("#ShoppingCartItems").html(itemsHTML);

			return true;
		}
		return false;

	});

	//ACCOUNTS - CALCULATE TOTAL

	function CalculateTotal() {

		var overall = 0;

	    $("#AccountsTable tbody tr").each(function()
	    {

	        var qnt = $(this).find("td").eq(2).find("input").val();

	        if(qnt == "") {
	        	qnt = 0;
	        }

	        var price = $(this).find("td").eq(1).text().replace("£","");

	        var sum = parseFloat(price) * parseFloat(qnt);
	        
	        overall+= sum;

	    });


		$("#AccountsForm .price").text("£"+overall.toFixed(2));


		//Show or hide the total price module
		if(parseFloat($("#AccountsForm .price").text().replace("£","")) >= 1 ) {
			$("#AccountsTotalContent").slideDown();
		} else {
			$("#AccountsTotalContent").slideUp();
		}
	}


	try{
		CalculateTotal();
	} catch(e) {}

	$("#AccountsTable input").keyup(function(){

		CalculateTotal();
	
	});

});