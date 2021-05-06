(function ($) {

  	"use strict";

    /*==== Loader ====*/   
    //$('.preloader').fadeOut(1000); // set duration in brackets  
	$('[data-toggle="offcanvas"]').on('click', function () {
    	$('.navbar-collapse').toggleClass('show');
    });
	
	/*==== Date Picker ====*/
	$('.form_datetime').datetimepicker({
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		forceParse: 0,
        showMeridian: 1
    });	
	
    /*==== Nav ====*/
    $('.navbar-collapse a').on('click',function(){
    	$(".navbar-collapse").collapse('hide');
    });

    
	/*==== Sticky ====*/
	$("#header").sticky({topSpacing:0});
	

    /*==== Counter ====*/
    $('.counter-item').appear(function() {
    	$('.counter-number').countTo();
    });
	
	//Text Typer
	var TxtType = function(el, toRotate, period) {
        this.toRotate = toRotate;
        this.el = el;
        this.loopNum = 0;
        this.period = parseInt(period, 10) || 2000;
        this.txt = '';
        this.tick();
        this.isDeleting = false;
    };

    TxtType.prototype.tick = function() {
        var i = this.loopNum % this.toRotate.length;
        var fullTxt = this.toRotate[i];

        if (this.isDeleting) {
        this.txt = fullTxt.substring(0, this.txt.length - 1);
        } else {
        this.txt = fullTxt.substring(0, this.txt.length + 1);
        }

        this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

        var that = this;
        var delta = 200 - Math.random() * 100;

        if (this.isDeleting) { delta /= 2; }

        if (!this.isDeleting && this.txt === fullTxt) {
        delta = this.period;
        this.isDeleting = true;
        } else if (this.isDeleting && this.txt === '') {
        this.isDeleting = false;
        this.loopNum++;
        delta = 500;
        }

        setTimeout(function() {
        that.tick();
        }, delta);
    };

    window.onload = function() {
        var elements = document.getElementsByClassName('typewrite');
        for (var i=0; i<elements.length; i++) {
            var toRotate = elements[i].getAttribute('data-type');
            var period = elements[i].getAttribute('data-period');
            if (toRotate) {
              new TxtType(elements[i], JSON.parse(toRotate), period);
            }
        }
        // INJECT CSS
        var css = document.createElement("style");
        css.type = "text/css";
        css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
        document.body.appendChild(css);
    };
	
   	
	/*==== Cars ====*/
	$(document).ready(function() { 
	$(".carsmodals").owlCarousel({ 		  
	   loop:true,
		margin:30,
		nav:true,
		responsiveClass:true,
		responsive:{
			0:{
				items:1,
				nav:true,
				loop:true
			},
			700:{
				items:1,
				nav:true,
				loop:true
			},
			1170:{
				items:1,
				nav:true,
				loop:true
			}
		}
	  
	  
	}); 
	});
	
	/*==== Cars ====*/
	$(document).ready(function() { 
	$(".carimages").owlCarousel({ 		  
	   loop:false,
		margin:10,
		nav:true,
		responsiveClass:true,
		responsive:{
			0:{
				items:1,
				nav:true,
				loop:false
			},
			700:{
				items:1,
				nav:true,
				loop:false
			},
			1170:{
				items:1,
				nav:true,
				loop:false
			}
		}
	  
	  
	}); 
	});
	
	
	/*==== Testimonials ====*/
	$(document).ready(function() { 
	$(".testimonialsList").owlCarousel({ 		  
	   loop:true,
		margin:0,
		nav:false,
		responsiveClass:true,
		responsive:{
			0:{
				items:1,
				nav:false,
				loop:true
			},
			700:{
				items:1,
				nav:false,
				loop:true
			},
			1170:{
				items:1,
				nav:true,
				loop:true
			}
		}
	  
	  
	}); 
	});
	
	
	/*==== Blog ====*/
	$(document).ready(function() { 
	$(".blogGrid").owlCarousel({ 		  
	   loop:true,
		margin:30,
		nav:false,
		responsiveClass:true,
		responsive:{
			0:{
				items:1,
				nav:false,
				loop:true
			},
			700:{
				items:2,
				nav:false,
				loop:true
			},
			1170:{
				items:3,
				nav:true,
				loop:true
			}
		}
	  
	  
	}); 
	});
		
		
	/*==== Clients Logo ====*/
	$(document).ready(function() { 
	$(".owl-clients").owlCarousel({ 		  
	    loop:true,
		margin:30,
		nav:false,
		responsiveClass:true,
		responsive:{
			0:{
				items:2,
				nav:false,
				loop:true
			},
			700:{
				items:4,
				nav:false,
				loop:true
			},
			1170:{
				items:5,
				nav:true,
				loop:true
			}
		}	  
	}); 
	});
	

    /*==== Smoothscroll ====*/    
    $('#home a, .custom-navbar a').on('click', function(event) {
        var $anchor = $(this);
          $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top - 120
        }, 1000);
          event.preventDefault();
    });
	
	/* ==== Revolution Slider ==== */
	if($('.tp-banner').length > 0){
		$('.tp-banner').show().revolution({
			delay:6000,
			startheight:750,
			startwidth: 1170,
			hideThumbs: 1000,
			navigationType: 'none',
			touchenabled: 'on',
			onHoverStop: 'on',
			navOffsetHorizontal: 0,
			navOffsetVertical: 0,
			dottedOverlay: 'none',
			fullWidth: 'on'
		});
	}
	
	
})(jQuery);