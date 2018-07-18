$( document ).ready(function() { 

    // declaration of values for
    // page size, current page, pages length, nav and total pages 
    pageSize = 10;
    pagesCount = $(".card").length;
    var currentPage = 1;

    var nav = '';
    var totalPages = Math.ceil(pagesCount / pageSize);
    
    for (var s=0; s<totalPages; s++){
        nav += '<li class="page-item" id="itemNav"><a class="page-link" href="#">'+(s+1)+'</a></li>';
    }
    $("#pag_prev").after(nav);
    $("#itemNav").first().addClass("active");

    showPage = function() {
        $(".card").hide().each(function(n) {
            if (n >= pageSize * (currentPage - 1) && n < pageSize * currentPage)
                $(this).show();
        });
    }
    showPage();

    // remove and add 'active' class for list
    $(".pagination li#itemNav").click(function() {
        $(".pagination li").removeClass("active");
        $(this).addClass("active");
        currentPage = parseInt($(this).text());
        showPage();
    });

    // activate prev buttom if page != page 1
    // deactivate next button if page == page final
    $(".pagination li#itemNav").click(function() {
        $("#pag_prev").removeClass("disabled");
        if (currentPage == 1)
            $("#pag_prev").addClass("disabled");
        if (currentPage == totalPages)
            $("#pag_next").addClass("disabled");
        else
            $("#pag_next").removeClass("disabled");
    });
 
    $(".pagination li#pag_next").click(function() {
        $("#pag_prev").removeClass("disabled");
        if (currentPage == totalPages - 1)
            $("#pag_next").addClass("disabled");
    });    

    $(".pagination li#pag_prev").click(function() {
        if($(this).next().is('.active')) return;
        $('#itemNav.active').removeClass('active').prev().addClass('active');
        currentPage = currentPage > 1 ? (currentPage-1) : 1;
        showPage();
        if (currentPage == 1)
            $("#pag_prev").addClass("disabled");

        // activate next buttom if page != page final
        if (currentPage != totalPages)
            $("#pag_next").removeClass("disabled");
    });

    $(".pagination li#pag_next").click(function() {
        if($(this).prev().is('.active')) return;
        $('#itemNav.active').removeClass('active').next().addClass('active');
        currentPage = currentPage < totalPages ? (currentPage+1) : totalPages;
        showPage();
    });
});


// jQuery(document).ready(function( $ ) {

//   // Back to top button
//   $(window).scroll(function() {
//     if ($(this).scrollTop() > 100) {
//       $('.back-to-top').fadeIn('slow');
//     } else {
//       $('.back-to-top').fadeOut('slow');
//     }
//   });
//   $('.back-to-top').click(function(){
//     $('html, body').animate({scrollTop : 0},1500, 'easeInOutExpo');
//     return false;
//   });

//   // Initiate the wowjs animation library
//   new WOW().init();

//   // Initiate superfish on nav menu
//   $('.nav-menu').superfish({
//     animation: {
//       opacity: 'show'
//     },
//     speed: 400
//   });

//   // Mobile Navigation
//   if ($('#nav-menu-container').length) {
//     var $mobile_nav = $('#nav-menu-container').clone().prop({
//       id: 'mobile-nav'
//     });
//     $mobile_nav.find('> ul').attr({
//       'class': '',
//       'id': ''
//     });
//     $('body').append($mobile_nav);
//     $('body').prepend('<button type="button" id="mobile-nav-toggle"><i class="fa fa-bars"></i></button>');
//     $('body').append('<div id="mobile-body-overly"></div>');
//     $('#mobile-nav').find('.menu-has-children').prepend('<i class="fa fa-chevron-down"></i>');

//     $(document).on('click', '.menu-has-children i', function(e) {
//       $(this).next().toggleClass('menu-item-active');
//       $(this).nextAll('ul').eq(0).slideToggle();
//       $(this).toggleClass("fa-chevron-up fa-chevron-down");
//     });

//     $(document).on('click', '#mobile-nav-toggle', function(e) {
//       $('body').toggleClass('mobile-nav-active');
//       $('#mobile-nav-toggle i').toggleClass('fa-times fa-bars');
//       $('#mobile-body-overly').toggle();
//     });

//     $(document).click(function(e) {
//       var container = $("#mobile-nav, #mobile-nav-toggle");
//       if (!container.is(e.target) && container.has(e.target).length === 0) {
//         if ($('body').hasClass('mobile-nav-active')) {
//           $('body').removeClass('mobile-nav-active');
//           $('#mobile-nav-toggle i').toggleClass('fa-times fa-bars');
//           $('#mobile-body-overly').fadeOut();
//         }
//       }
//     });
//   } else if ($("#mobile-nav, #mobile-nav-toggle").length) {
//     $("#mobile-nav, #mobile-nav-toggle").hide();
//   }

//   // Smooth scroll for the menu and links with .scrollto classes
//   $('.nav-menu a, #mobile-nav a, .scrollto').on('click', function() {
//     if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
//       var target = $(this.hash);
//       if (target.length) {
//         var top_space = 0;

//         if ($('#header').length) {
//           top_space = $('#header').outerHeight();

//           if( ! $('#header').hasClass('header-fixed') ) {
//             top_space = top_space - 20;
//           }
//         }

//         $('html, body').animate({
//           scrollTop: target.offset().top - top_space
//         }, 1500, 'easeInOutExpo');

//         if ($(this).parents('.nav-menu').length) {
//           $('.nav-menu .menu-active').removeClass('menu-active');
//           $(this).closest('li').addClass('menu-active');
//         }

//         if ($('body').hasClass('mobile-nav-active')) {
//           $('body').removeClass('mobile-nav-active');
//           $('#mobile-nav-toggle i').toggleClass('fa-times fa-bars');
//           $('#mobile-body-overly').fadeOut();
//         }
//         return false;
//       }
//     }
//   });

//   // Header scroll class
//   $(window).scroll(function() {
//     if ($(this).scrollTop() > 100) {
//       $('#header').addClass('header-scrolled');
//     } else {
//       $('#header').removeClass('header-scrolled');
//     }
//   });

//   // Intro carousel
//   var introCarousel = $(".carousel");
//   var introCarouselIndicators = $(".carousel-indicators");
//   introCarousel.find(".carousel-inner").children(".carousel-item").each(function(index) {
//     (index === 0) ?
//     introCarouselIndicators.append("<li data-target='#introCarousel' data-slide-to='" + index + "' class='active'></li>") :
//     introCarouselIndicators.append("<li data-target='#introCarousel' data-slide-to='" + index + "'></li>");

//     $(this).css("background-image", "url('" + $(this).children('.carousel-background').children('img').attr('src') +"')");
//     $(this).children('.carousel-background').remove();
//   });

//   $(".carousel").swipe({
//     swipe: function(event, direction, distance, duration, fingerCount, fingerData) {
//       if (direction == 'left') $(this).carousel('next');
//       if (direction == 'right') $(this).carousel('prev');
//     },
//     allowPageScroll:"vertical"
//   });

//   // Skills section
//   $('#skills').waypoint(function() {
//     $('.progress .progress-bar').each(function() {
//       $(this).css("width", $(this).attr("aria-valuenow") + '%');
//     });
//   }, { offset: '80%'} );

//   // jQuery counterUp (used in Facts section)
//   $('[data-toggle="counter-up"]').counterUp({
//     delay: 10,
//     time: 1000
//   });

//   // Porfolio isotope and filter
//   var portfolioIsotope = $('.portfolio-container').isotope({
//     itemSelector: '.portfolio-item',
//     layoutMode: 'fitRows'
//   });

//   $('#portfolio-flters li').on( 'click', function() {
//     $("#portfolio-flters li").removeClass('filter-active');
//     $(this).addClass('filter-active');

//     portfolioIsotope.isotope({ filter: $(this).data('filter') });
//   });

//   // Clients carousel (uses the Owl Carousel library)
//   $(".clients-carousel").owlCarousel({
//     autoplay: true,
//     dots: true,
//     loop: true,
//     responsive: { 0: { items: 2 }, 768: { items: 4 }, 900: { items: 6 }
//     }
//   });

//   // Testimonials carousel (uses the Owl Carousel library)
//   $(".testimonials-carousel").owlCarousel({
//     autoplay: true,
//     dots: true,
//     loop: true,
//     items: 1
//   });

// });
