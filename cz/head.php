
<title>iFarm.cz - Portál pro zemědělce v Česku</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="WT.cg_n" content="Traktorenkampagne" />
<meta name="WT.cg_s" content="CZ_INT: Home" />
<meta property="og:image" content="../images/facebook-story4.jpg" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width">
<!-- start SkyForm -->
<link rel="stylesheet" href="css/demo.css">
		<link rel="stylesheet" href="css/font-awesome.css">
		<link rel="stylesheet" href="css/sky-forms.css">
		<link rel="stylesheet" href="css/sky-forms-blue.css">
       <!--[if lt IE 9]>
			<link rel="stylesheet" href="css/sky-forms-ie8.css">
		<![endif]-->
		
		<script src="js/jquery.min.js"></script>
		<!--[if lt IE 10]>
			<script src="js/jquery.placeholder.min.js"></script>
		<![endif]-->		
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<script src="js/sky-forms-ie8.js"></script>
		<![endif]-->
<!-- end SkyForm -->
<link rel="icon" href="../images/favicon.gif" type="image/gif" />
<link href="bootstrap.min.css" rel="stylesheet" />
<link href="../css/main4a.css" rel="stylesheet" type="text/css" />
<link href="../css/main-responsive4.css" rel="stylesheet" type="text/css" />
<link href="../css/responsive-layout4.css" rel="stylesheet" type="text/css" />
<link href="../css/story4.css" rel="stylesheet" type="text/css" />
<link href="../css/colorbox.css" rel="stylesheet" type="text/css" />
<link href="../css/perfect-scrollbar-0.4.10.min.css" rel="stylesheet" type="text/css" />
<link href="../css/magnific-popup.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="../scripts/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="../scripts/jquery.cycle2.js"></script>
<script type="text/javascript" src="../scripts/jquery.cycle2.swipe.min.js"></script>
<script type="text/javascript" src="../scripts/skrollr.min.js"></script>
<script type="text/javascript" src="../scripts/perfect-scrollbar-0.4.10.min.js"></script>
<script type="text/javascript" src="../scripts/perfect-scrollbar-0.4.10.with-mousewheel.min.js"></script>
<script type="text/javascript" src="../scripts/jquery.magnific-popup.min.js"></script>





 
<script type="text/javascript">
$(document).ready(function() {
		
	    $('.image-link').magnificPopup({type:'image'});
        $('.iframe-link').magnificPopup({
          disableOn: 1040,
          type: 'iframe',
          mainClass: 'mfp-fade',
          fixedContentPos: true
        });
		$('.gallery-item').magnificPopup({
		  type: 'image',
		  gallery:{
			enabled:true
		  }
		});
		$('.gallery-item2').magnificPopup({
		  type: 'image',
		  gallery:{
			enabled:true
		  }
		});
        $('.wallpaper-link').magnificPopup({
          disableOn: 700,
          type: 'iframe',
          mainClass: 'ratio169',
          removalDelay: 160,
          preloader: false,

          fixedContentPos: false
        });

	  
//=================================== SMOOTH SCROLLING EXTERNAL ANCHOR //	
(function($){
  $(document).on("ready", function () {
      var urlHash = window.location.href.split("#")[1];
      $('html,body').animate({
          scrollTop: $('.' + urlHash + ', #' + urlHash +',[name='+urlHash+']').first().offset().top -66
      }, 1);
  });

})(jQuery);


// =================================== SMOOTH SCROLLING LOCAL ANCHOR //	
(function($) {
 	$('a[href*=#]:not([href=#])').click(function() {
	    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
	      var target = $(this.hash);
	      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	      if (target.length) {
	        $('html,body').animate({
	          scrollTop: target.offset().top -66
	        }, 1500);
	        return false;
	      }
	    }
  	});
})(jQuery);
	  
	  

	
	$(".world-link").click(function(event){	
		$('#weltkarte').toggle();
	});
	$("#weltkarte").mouseleave(function(event){	
		$("#weltkarte").hide();
	});
	

	
	$("#sprachauswahl-link").click(function(event){	
		$('#sprachauswahl-sub').toggle();
	});
	$("#sprachauswahl-sub").mouseleave(function(event){	
		$("#sprachauswahl-sub").hide();
	});
	
	
	$("#menu").click(function(event){	
		$('#navi').toggle();
	});
	
	
	resizeContent();
	$(window).resize(function() {
		resizeContent();
	});
	function resizeContent() {
		var breite = $(window).width();
		var hoehe = $(window).height();

		if(breite<1280){
			$("#navi a").click(function(event){	
				$('#navi').css("display","none");
			});
			$('#navi').css("display","none");
		} else {
			$('#navi').css("display","block");
			$("#navi a").click(function(event){	
				$('#navi').css("display","block");
			});
			$( "#submenu-link" )
			.mouseover(function() {
				$('#submenu').css("display","block");
			})
			.mouseout(function() {
				$('#submenu').css("display","none");
			});
			$( "#submenu-link2" )
			.mouseover(function() {
				$('#submenu2').css("display","block");
			})
			.mouseout(function() {
				$('#submenu2').css("display","none");
			});
		}
	}	
	
	$('.weltkarte-scrollarea').perfectScrollbar({wheelSpeed:5});
	
});
</script>


<!-- Custom Scrollbar -->
<link href="../css/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../scripts/jquery.mCustomScrollbar.js"></script>
<script>
(function($){
	$(window).load(function(){
		$(".tablecontent").mCustomScrollbar({
			axis:"x",
			theme:"dark-3",
			scrollButtons:{enable:true}
		});
	});
})(jQuery);
</script>
 <style>
body > div.radek.hlavicka > nav > ul > li:nth-child(2) a {color:white;}
body > div.radek.hlavicka > nav > ul > li:nth-child(2) {
  background-color: #e5ef00;
  opacity: 0.8;
  -ms-transition: opacity 0.2s;
  -moz-transition: opacity 0.2s;
  -webkit-transition: opacity 0.2s;
  color: white !important;
}
body > div.radek.hlavicka > nav > ul > li:nth-child(1) {background-color: #b77100;
  opacity: 0.8;
  -ms-transition: opacity 0.2s;
  -moz-transition: opacity 0.2s;
  -webkit-transition: opacity 0.2s;color:white !important;}
body > div.radek.hlavicka > nav > ul > li:nth-child(1):hover {opacity: 1 !important;}
body > div.radek.hlavicka > nav > ul > li:nth-child(9) {background-color:#00b800;  opacity: 0.8;
  -ms-transition: opacity 0.2s;
  -moz-transition: opacity 0.2s;
  -webkit-transition: opacity 0.2s;color:white !important;}
body > div.radek.hlavicka > nav > ul > li:nth-child(9):hover {opacity:1;}
body > div.radek.hlavicka > nav > ul > li:nth-child(9) > a {color:white !important;}


</style>