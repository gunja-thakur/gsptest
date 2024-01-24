/*=========== Custom Function JS Made by Deepak Dubey ==============*/
jQuery(document).ready(function($) {
	 $("#currentYear").text( (new Date).getFullYear() );
	 $(".home_slide").owlCarousel({
                    items: 1, margin:20,
					loop: true,dots:false,autoplay:true,nav:true,
					smartSpeed:1200,autoplayTimeout: 5000,
					autoplayHoverPause: true,responsiveClass:true,
					// animateOut: 'animate__fadeOut',
					// animateIn: 'animate__fadeIn',
					 navText: [ '<span class="bi bi-chevron-compact-left"></span>', '<span class="bi bi-chevron-compact-right"></span>' ],
					responsive:{
        0:{
            items:1,
        },
		481:{
            items:1,
        },
        768:{
            items:1,
        },
		1000:{
            items:1,
        }
    }
	 }); 
	 $(".campus_drive").owlCarousel({
                    items: 1, margin:20,
					loop: true,dots:false,autoplay:false,nav:true,
					smartSpeed:1200,autoplayTimeout: 5000,
					autoplayHoverPause: true,responsiveClass:true,
					// animateOut: 'animate__fadeOut',
					// animateIn: 'animate__fadeIn',
					 navText: [ '<span class="fa-solid fa-chevron-left"></span>', '<span class="fa-solid fa-chevron-right"></span>' ],
					responsive:{
        0:{
            items:1,
        },
		481:{
            items:1,
        },
        768:{
            items:1,
        },
		1000:{
            items:1,
        }
    }
	 });
     $(".outerlinks_slider").owlCarousel({
        items: 1, margin:30,
        loop: true,dots:false,autoplay:false,nav:true,
        smartSpeed:1200,autoplayTimeout: 5000,
        autoplayHoverPause: true,responsiveClass:true,
        // animateOut: 'animate__fadeOut',
        // animateIn: 'animate__fadeIn',
         navText: [ '<span class="bi bi-chevron-left"></span>', '<span class="bi bi-chevron-right"></span>' ],
        responsive:{
0:{
items:1,autoplay:true,
},
481:{
items:2,autoplay:true,
},
768:{
items:3,autoplay:true,
},
1000:{
items:5,
}
}
});


/* Font Sizer
$("p, a, h3, h5, h6, li, span, td, th").jfontsize({
 btnMinusClasseId: "#jfontsize-m",
 btnDefaultClasseId: "#jfontsize-d",
 btnPlusClasseId: "#jfontsize-p",
}); */

/* Tooltip Script */
var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
})

/*---stickey menu---*/
$(window).on('scroll',function() {
  var scroll = $(window).scrollTop();
 if (scroll < 100) {
 $(".sticky-header").removeClass("sticky");
 }else{
 $(".sticky-header").addClass("sticky");
  }
});
/*===== Go Top ========*/
 $('#gotop').gotop({
  customHtml: '<i class="bi bi-arrow-up"></i>',
  bottom: '4em',
  right: '1em'
});

Fancybox.bind("[data-fancybox]", {
  // Your custom options
});

// Nav submenu show hide on mobile //
			jQuery(".sub-menu, .mega-menu").parent('li').addClass('has-child');
			jQuery("<div class='fa fa-solid fa-angle-down submenu-toogle'></div>").insertAfter(".has-child > a");
			jQuery('.has-child a+.submenu-toogle').on('click',function(ev) {
				jQuery(this).parent().siblings(".has-child ").children(".sub-menu, .mega-menu").slideUp(500, function(){
					jQuery(this).parent().removeClass('nav-active');
				});
				jQuery(this).next(jQuery('.sub-menu, .mega-menu ')).slideToggle(500, function(){
					jQuery(this).parent().toggleClass('nav-active');
				});
				ev.stopPropagation();
			});
	// Mobile side drawer function //
			jQuery('#mobile-side-drawer').on('click', function () {
				jQuery('.mobile-sider-drawer-menu').toggleClass('active');
			});


// You can also pass an optional settings object
// below listed default settings
AOS.init({
  // Global settings:

  disable: "mobile", // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
  startEvent: "DOMContentLoaded", // name of the event dispatched on the document, that AOS should initialize on
  initClassName: "aos-init", // class applied after initialization
  animatedClassName: "aos-animate", // class applied on animation
  useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
  disableMutationObserver: false, // disables automatic mutations' detections (advanced)
  debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
  throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)

  // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
  offset: 120, // offset (in px) from the original trigger point
  delay: 0, // values from 0 to 3000, with step 50ms
  duration: 400, // values from 0 to 3000, with step 50ms
  easing: "ease", // default easing for AOS animations
  once: false, // whether animation should happen only once - while scrolling down
  mirror: false, // whether elements should animate out while scrolling past them
  anchorPlacement: "top-bottom", // defines which position of the element regarding to window should trigger the animation
});
/* ==================================================            # Story Timeline         ===============================================*/        timeline(document.querySelectorAll('.timeline_new'), {            forceVerticalMode: 991,            mode: 'horizontal',            verticalStartPosition: 'left',            visibleItems: 4,        });	

});

