 jQuery(document).ready(function($) {

	//=================================== Theme Options ====================================//

		$('.wide').click(function() {
		$('.boxed').removeClass('active');
		$('.boxed-margin').removeClass('active');
		$(this).addClass('active');
		$('.patterns').css('display' , 'none');
		$('#layout').removeClass('layout-boxed').removeClass('layout-boxed-margin').addClass('layout-wide');
	});
	$('.boxed').click(function() {
		$('.wide').removeClass('active');
		$('.boxed-margin').removeClass('active');
		$(this).addClass('active');
		$('.patterns').css('display' , 'block');
		$('#layout').removeClass('layout-boxed-margin').removeClass('layout-wide').addClass('layout-boxed');
	});
	$('.boxed-margin').click(function() {
		$('.boxed').removeClass('active');
		$('.wide').removeClass('active');
		$(this).addClass('active');
		$('.patterns').css('display' , 'block');
		$('#layout').removeClass('layout-wide').removeClass('layout-boxed').addClass('layout-boxed-margin');
	});
	$('.light').click(function() {
		$('.dark').removeClass('active');
		$(this).addClass('active');
	});
	$('.dark').click(function() {
		$('.light').removeClass('active');
		$(this).addClass('active');
	});

	//=================================== Skins Changer ====================================//


   // Color changer
   $(".red").click(function(){
    	$("#skins-css").attr("href", "http://wp.iwthemes.com/megahost/wp-content/themes/megahost/css/skins/red/red.css");
        return false;
   });
   $(".blue").click(function(){
        $("#skins-css").attr("href", "http://wp.iwthemes.com/megahost/wp-content/themes/megahost/css/skins/blue/blue.css");
        return false;
	 });
	 $(".yellow").click(function(){
         $("#skins-css").attr("href", "http://wp.iwthemes.com/megahost/wp-content/themes/megahost/css/skins/yellow/yellow.css");
         return false;
   });
	 $(".green").click(function(){
        $("#skins-css").attr("href", "http://wp.iwthemes.com/megahost/wp-content/themes/megahost/css/skins/green/green.css");
        return false;
  });
  $(".orange").click(function(){
        $("#skins-css").attr("href", "http://wp.iwthemes.com/megahost/wp-content/themes/megahost/css/skins/orange/orange.css");
        return false;
  });
  $(".purple").click(function(){
       $("#skins-css").attr("href", "http://wp.iwthemes.com/megahost/wp-content/themes/megahost/css/skins/purple/purple.css");
       return false;
  });
 	$(".pink").click(function(){
       $("#skins-css").attr("href", "http://wp.iwthemes.com/megahost/wp-content/themes/megahost/css/skins/pink/pink.css");
        return false;
 	});
	$(".cocoa").click(function(){
        $("#skins-css").attr("href", "http://wp.iwthemes.com/megahost/wp-content/themes/megahost/css/skins/cocoa/cocoa.css");
        return false;
  });
  
  $(".light").click(function(){
        $("#style-css").attr("href", "http://wp.iwthemes.com/megahost/wp-content/themes/megahost/css/style.css");
        return false;
  });

 	$(".dark").click(function(){
        $("#style-css").attr("href", "http://wp.iwthemes.com/megahost/wp-content/themes/megahost/css/style-dark.css");
        return false;
  });


	//=================================== Background Options ====================================//
	
	$('#theme-options ul.backgrounds li').click(function(){
	var 	$bgSrc = $(this).css('background-image');
		if ($(this).attr('class') == 'bgnone')
			$bgSrc = "none";

		$('body').css('background-image',$bgSrc);
		$.cookie('background', $bgSrc);
		$.cookie('backgroundclass', $(this).attr('class').replace(' active',''));
		$(this).addClass('active').siblings().removeClass('active');
	});

	//=================================== Panel Options ====================================//

	$('.openclose').click(function(){
		if ($('#theme-options').css('left') == "-220px")
		{
			$left = "0px";
			$.cookie('displayoptions', "0");
		} else {
			$left = "-220px";
			$.cookie('displayoptions', "1");
		}
		$('#theme-options').animate({
			left: $left
		},{
			duration: 500			
		});

	});

	$(function(){
		$('#theme-options').fadeIn();
		$bgSrc = $.cookie('background');
		$('body').css('background-image',$bgSrc);

		if ($.cookie('displayoptions') == "1")
		{
			$('#theme-options').css('left','-220px');
		} else if ($.cookie('displayoptions') == "0") {
			$('#theme-options').css('left','0');
		} else {
			$('#theme-options').delay(800).animate({
				left: "-220px"
			},{
				duration: 500				
			});
			$.cookie('displayoptions', "1");
		}
		$('#theme-options ul.backgrounds').find('li.' + $.cookie('backgroundclass')).addClass('active');

	});

});