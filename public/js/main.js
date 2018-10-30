(function ($) {
 "use strict";
    
/*------------------------
    WOW active 
------------------------- */
	new WOW().init(); 
	
/*---------------------------- 
   Sidebar Search Active
-----------------------------*/
    function sidebarSearch() {
        var searchTrigger = $('.sidebar-trigger-search'),
            endTriggersearch = $('button.search-close'),
            container = $('.main-search-active');
        
        searchTrigger.on('click', function() {
            container.addClass('inside');
        });
        
        endTriggersearch.on('click', function() {
            container.removeClass('inside');
        });
        
    };
    sidebarSearch();
    
/*------------------------
    jQuery MeanMenu
------------------------- */
$('#mobile-menu-active').meanmenu({
    meanScreenWidth: "991",
    meanMenuContainer: ".mobile-menu-area .mobile-menu",
});  
/*-----------------------
    Nice Select
------------------------- */	
$('.nice-select').niceSelect(); 
   	
/*------------------------
 owl active
--------------------------- */    
$('.slider-active').owlCarousel({
    loop:true,
    items:1,
    autoplay: false,
    dots:true,
    nav:true,
    navText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
    responsive:{
        0:{items:1},
        600:{items:1},
        1000:{items:1},
        1200:{items:1}
    }
}); 
/*----------------------------
    owl active
------------------------------ */    
$('.product-module-2-active')
        .on('changed.owl.carousel initialized.owl.carousel', function (event) {
            $(event.target)
                .find('.owl-item').removeClass('last')
                .eq(event.item.index + event.page.size - 1).addClass('last');
        }).owlCarousel({
    loop:true,
    items:2,
    dots:false,
    nav:true,
    navText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
    responsive:{
      0:{items:1},
      480:{items:1},
      768:{items:1},
      992:{items:2},
      1200:{items:2}
    }
}); 
    
/*------------------------
    owl active
--------------------------- */    
$('.product-active').owlCarousel({
    loop:true,
    items:1,
    autoplay: false,
    dots:false,
    nav:true,
    navText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
    responsive:{
      0:{items:1},
      480:{items:2},
      768:{items:3},
      992:{items:4},
      1200:{items:4}
    }
});
/*------------------------
    owl active
--------------------------- */    
$('.testimonial-active').owlCarousel({
    loop:true,
    items:1,
    autoplay: false,
    dots:true,
    nav:false,
    responsive:{
        0:{items:1},
        600:{items:1},
        1000:{items:1},
        1200:{items:1}
    }
});  
/*------------------------
    owl active
--------------------------- */    
$('.latest-blog-active').owlCarousel({
    loop:true,
    items:1,
    autoplay: false,
    dots:false,
    nav:false,
    responsive:{
      0:{items:1},
      480:{items:1},
      768:{items:2},
      992:{items:3},
      1200:{items:3}
    }
}); 
/*---------------------------
    owl active
--------------------------- */    
$('.our-brand-active').owlCarousel({
    loop:true,
    items:1,
    autoplay: false,
    dots:false,
    nav:false,
    responsive:{
      0:{items:2},
      480:{items:3},
      768:{items:4},
      992:{items:5},
      1200:{items:5}
    }
});    
/*-------------------------
    owl active
--------------------------- */    
$('.single-product-active').owlCarousel({
    loop:true,
    items:1,
    autoplay: false,
    dots:false,
    nav:false,
    margin: 10,
    responsive:{
        0:{items:3},
        600:{items:3},
        1000:{items:4},
        1200:{items:4}
    }
});   
    
/*---------------------------
    owl active
------------------------------ */
$('.post-slider').owlCarousel({
    loop:true,
    items:1,
    dots:true,
    nav:true,
    navText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
    responsive:{
        0:{items:1},
        600:{items:1},
        1000:{items:1},
        1200:{items:1}
    }
}); 
/*----------------------------
    owl active
------------------------------- */  
$('.testimonials-active').owlCarousel({
    loop:true,
    items:1,
    dots:false,
    nav:false,
    navText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
    responsive:{
        0:{items:1},
        600:{items:1},
        1000:{items:1},
        1200:{items:1}
    }
});
    
/*---------------------------
    elevateZoom
------------------------------*/	
    $("#zoom1").elevateZoom({
        gallery:'gallery_01', 
        responsive : true,
        zoomType : 'inner',
        cursor: 'crosshair'
    });  
    
/*-------------------------------
    price-slider active
-------------------------------*/  
$( "#price-slider" ).slider({
   range: true,
   min: 0,
   max: 120,
   values: [ 20, 115 ],
   slide: function( event, ui ) {
        $( "#min-price" ).val('$' + ui.values[ 0 ] );
        $( "#max-price" ).val('$' + ui.values[ 1 ] );
     }
  });
  $( "#min-price" ).val('$' + $( "#price-slider" ).slider( "values", 0 ));   
  $( "#max-price" ).val('$' + $( "#price-slider" ).slider( "values", 1 )); 
    
    
    
/*------------------------------
    select last tab 
-------------------------*/
    
$('.tabs-categorys-list a[href="#new-arrivals"],.shop-item-filter-list a[href="#grid"],.discription-tab-menu a[href="#description"]').tab('show')
 
    
/*------------------------
    Accordion
-------------------------*/
$(".faequently-accordion").collapse({
    accordion:true,
  open: function() {
    this.slideDown(300);
  },
  close: function() {
    this.slideUp(300);
  }		
});	 
    
/*---------------------------
    showlogin toggle function
----------------------------*/
$( '#showlogin' ).on('click', function() {
    $( '#checkout-login' ).slideToggle(500);
}); 
    
/*-----------------------------
  showcoupon toggle function
-----------------------------*/
$( '#showcoupon' ).on('click', function() {
    $( '#checkout-coupon' ).slideToggle(500);
});
    
/*--- Checkout ---*/
$("#chekout-box").on("change",function(){
    $(".account-create").slideToggle("100");
});
    
/*-- Checkout -----*/
$("#chekout-box-2").on("change",function(){
    $(".ship-box-info").slideToggle("100");
});   
   

/*------------------------------
    ScrollUp Active
-----------------------------------*/
$.scrollUp({
    scrollText: '<i class="fa fa-angle-double-up"></i>',
    easingType: 'linear',
    scrollSpeed: 900,
    animation: 'fade'
}); 
/*------------------------------
   fixed stickymenu  
--------------------------------*/
    var stickymenu = document.getElementById("stickymenu")
    var stickymenuoffset = stickymenu.offsetTop
    var scrolltimer

    window.addEventListener("scroll", function(e){
        requestAnimationFrame(function(){
            if (window.pageYOffset > stickymenuoffset){
                stickymenu.classList.add('sticky')
            }
            else{
                stickymenu.classList.remove('sticky')
            }
        })
    });
/*----------------------------------------
    Instafeed
-----------------------------------------*/   
    if($('#instagram-feed').length) {
    var feed = new Instafeed({
        get: 'user',
        userId: 6665768655,
        accessToken: '6665768655.1677ed0.313e6c96807c45d8900b4f680650dee5',
        target: 'instagram-feed',
        resolution: 'thumbnail',
        limit: 6,
        template: '<li><a href="{{link}}" target="_new"><img src="{{image}}" /></a></li>',
    });
    feed.run();
}  
    
    
    
    
    
 
})(jQuery); 