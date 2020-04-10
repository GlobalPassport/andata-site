$( document ).ready(function(){
    var idUrl = document.location.pathname;

    // console.log(idUrl);

    if(idUrl == '/') {

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

    }

    if(idUrl == '/contacts/') {

        var width = $(window).width();
        console.log()
        if (width <= 768) {
            $('footer').css({
                top: '9rem'
            })
        }
    }




    if(idUrl == '/about/') {
        includeHead(document.location.origin + "/wp-content/themes/andata/assets/css/about.css");

        function loadGallery(setIDs, setClickAttr){
            var current_image,
                selector,
                counter = 0;

            $('#show-next-image, #show-previous-image').click(function(){
                if($(this).attr('id') == 'show-previous-image'){
                    current_image--;
                } else {
                    current_image++;
                }

                selector = $('[data-image-id="' + current_image + '"]');
                updateGallery(selector);
            });

            function updateGallery(selector) {
                var $sel = selector;
                current_image = $sel.data('image-id');
                $('#image-gallery-caption').text($sel.data('caption'));
                $('#image-gallery-title').text($sel.data('title'));
                $('#image-gallery-image').attr('src', $sel.data('image'));
                disableButtons(counter, $sel.data('image-id'));
            }

            if(setIDs == true){
                $('[data-image-id]').each(function(){
                    counter++;
                    $(this).attr('data-image-id',counter);
                });
            }
            $(setClickAttr).on('click',function(){
                updateGallery($(this));
            });
        }

        function disableButtons(counter_max, counter_current) {
            $('#show-previous-image, #show-next-image').show();
            if (counter_max == counter_current) {
                $('#show-next-image').hide();
            } else if (counter_current == 1) {
                $('#show-previous-image').hide();
            }
        }

        loadGallery(true, 'a.thumbnail');

        $('.owl-carousel').owlCarousel({

            loop:true,
            margin:30,
            nav:false,
            merge: true,
            // autoplay : true,
            autoplayTimeout : 7000,
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
                    items:3
                }
            },

        });

        $(".next-review").click(function() {
            owl_review.trigger('owl.next');
        });

        $(".prev-review").click(function() {
            owl_review.trigger('owl.prev');
        });

    }


});



function includeHead(url) {
    $('head').append("<link rel='stylesheet' id='style-grid-css'  href='"+url+"' type='text/css' media='all' />");
}

