// $(function(){
//     var mySwiper = new Swiper ('.swiper-container', {
//         loop: true,
//         pagination: '.swiper-pagination',
//         paginationClickable: true,
//         nextButton: '.swiper-button-next',
//         prevButton: '.swiper-button-prev',
//         width: 280,
//         updateOnWindowResize: true
//         // height: 90
//     });
// });

$( document ).ready(function(){
    var idUrl = document.location.pathname;
        if(idUrl == '/contacts/'){
            $('footer').css({
                top: '9rem'
        });
    }




    $('.owl-carousel').owlCarousel({

        loop:true,
        margin:30,
        nav:true,
        merge: true,

        navText:["<img src='/wp-content/themes/andata/assets/img/prev.svg'>","<img src='/wp-content/themes/andata/assets/img/next.svg'>"],
        pagination: true,
        dots:true,
        dotsData: false,
        dotsEach:true,
        // dotsSpeed:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:4
            }
        },

    });



    $(".next-review").click(function() {
        owl_review.trigger('owl.next');
    });

    $(".prev-review").click(function() {
        owl_review.trigger('owl.prev');
    });


});








// $('.multi-carousel .carousel-item').each(function() {
//     var next = $(this).next();
//     if (!next.length) next = $(this).siblings(':first');
//     next.children(':first-child').clone().appendTo($(this));
// });
// $('.multi-carousel .carousel-item').each(function() {
//     var prev = $(this).prev();
//     if (!prev.length) prev = $(this).siblings(':last');
//     prev.children(':nth-last-child(2)').clone().prependTo($(this));
// });

// $('#multiCarousel').carousel({
//     interval: 10000
// })
// $('.carousel .carousel-item').each(function(){
//     var next = $(this).next();
//     if (!next.length) {
//         next = $(this).siblings(':first');
//     }
//     next.children(':first-child').clone().appendTo($(this));
//
//     for (var i=0;i<2;i++) {
//         next=next.next();
//         if (!next.length) {
//             next = $(this).siblings(':first');
//         }
//
//         next.children(':first-child').clone().appendTo($(this));
//     }
// });



// (function($) {
//     "use strict";
//
//     $('.carousel .carousel-item').each(function(){
//         var next = $(this).next();
//         if (!next.length) {
//             next = $(this).siblings(':first');
//         }
//         next.children(':first-child').clone().appendTo($(this));
//
//         if (next.next().length>0) {
//             next.next().children(':first-child').clone().appendTo($(this));
//         }
//         else {
//             $(this).siblings(':first').children(':first-child').clone().appendTo($(this));
//         }
//     });
//
// })(jQuery);