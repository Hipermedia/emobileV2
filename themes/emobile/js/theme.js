jQuery(document).ready(function($) {

		$('.toggle-nav').click(function(e) {
	        $(this).toggleClass('activo');
	        $('#header ul').toggleClass('activo'); 
	        e.preventDefault();
	    });

	// función para desplazamiento lento en enlaces dentro del mismo documento
	$(function(){
		$('a[href*=#]').click(function() {
	     	if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
	     		var $target = $(this.hash);
	     		$target = $target.length && $target || $('[name=' + this.hash.slice(1) +']');
	     		if ($target.length) {
	     			var targetOffset = $target.offset().top;
	     			$('html,body').animate({scrollTop: targetOffset}, 1000);
	     			return false;
	     		}
	     	}
	 	});
	 }); //fin

	// animaciones
	$('.landing .primero .wrapper').waypoint(function(direction) {
	  $('.landing .primero .wrapper').addClass( 'fadeIn animated' );
	},{
	  offset: '98%'
	});

	$('.landing .primero .wrapper .texto, .landing .primero .wrapper .imagen').waypoint(function(direction) {
	  $('.landing .primero .wrapper .texto, .landing .primero .wrapper .imagen').addClass( 'bounceIn animated' );
	},{
	  offset: '98%'
	});

	$('.landing .segundo .wrapper').waypoint(function(direction) {
	  $('.landing .segundo .wrapper').addClass( 'fadeInUp animated' );
	},{
	  offset: '98%'
	});

	$('#saute1').waypoint(function(direction) {
	  $('#saute1').addClass( 'fadeInLeft animated' );
	},{
	  offset: '98%'
	});

	$('#saute2').waypoint(function(direction) {
	  $('#saute2').addClass( 'fadeInRight animated' );
	},{
	  offset: '98%'
	});

	$('#saute3').waypoint(function(direction) {
	  $('#saute3').addClass( 'fadeInRight animated' );
	},{
	  offset: '98%'
	});

	$('#saute4').waypoint(function(direction) {
	  $('#saute4').addClass( 'fadeInLeft animated' );
	},{
	  offset: '98%'
	});

	$('#saute5').waypoint(function(direction) {
	  $('#saute5').addClass( 'fadeInLeft animated' );
	},{
	  offset: '98%'
	});

	$('#saute6').waypoint(function(direction) {
	  $('#saute6').addClass( 'fadeInRight animated' );
	},{
	  offset: '98%'
	});

	$('.landing .final .wrapper').waypoint(function(direction) {
	  $('.landing .final .wrapper').addClass( 'fadeInUp animated' );
	},{
	  offset: '98%'
	});

	//fin

	if ($('#mjs-registrado').length) {
	    $('#formulario-registro').hide();
	}


});