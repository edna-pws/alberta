var util = {
    Global:{
        init: function() {
            var e = this;
            // e.servicesAnimation();
            // e.utilities();
            

            // e.ajaxSubmit();
            // e.productSlider();
            e.brandsSlider();
            e.logoSlider();
            e.singlePageNav();
            //e.menu();
            // e.pagePreloader();
            e.navFixTop();
            // e.scrollTop();
        }, 

        scrollTop: function(){
            $('.go__top').click(function(e){
                e.preventDefault();
                $('body').animate({
                    scrollTop: '0px'
                },1500);
            }); 
        },

        navFixTop: function() {

                var docElem = document.documentElement,
                    header = document.querySelector('.hero-menu-primary'),
                    didScroll = false,
                    changeHeaderOn = 70,
                    changeHeaderOnBody = $('.banner').height() - 200;

                function init() {
                    window.addEventListener('scroll', function() {
                        if (!didScroll) {
                            didScroll = true;
                            setTimeout(scrollPage, 100);
                        }
                    }, false);
                }

                function scrollPage() {

                    var sy = scrollY();
                    if (sy >= changeHeaderOnBody) {
                        classie.add(header, 'fixed');
                    } else {
                       classie.remove(header, 'fixed');
                    }

                    didScroll = false;
                }

                function scrollY() {
                    return window.pageYOffset || docElem.scrollTop;
                }
                
                init();
        },
        
        utilities: function() {
            $('.show-more').click(function(e) {
                e.preventDefault();
                $("#about").toggleClass("is-show");
            });

            // contact form
            $('a.submit-button.close-btn-msg').click(function(){
                $('#contact-form').show();
                $('#get-quote-message').hide();
            });
        },

        servicesAnimation:function() {
            // Supports Introduction of Product Animation
            new cbpScroller( document.getElementById( 'cbp-so-scroller' ) );
        },

        // menu: function() {
        //     linkify('.navbar-nav > li > a');
        //     $('body').removeClass('loading');
        // },

        logoSlider:function(){
            $('.owl-carousel').owlCarousel({
                items:7,
                loop:true,
                margin:10,
                autoplay:true,
                autoplayTimeout:1000,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:3
                    },
                    1000:{
                        items:5
                    }
                }
            });
        },
        
        singlePageNav:function() {
            // Prevent console.log from generating errors in IE for the purposes of the demo
            if ( ! window.console ) console = { log: function(){} };

            // The actual plugin
            $('.single-page-nav').singlePageNav({
                offset: $('.single-page-nav').outerHeight(),
                filter: ':not(.external)',
                updateHash: true,
                beforeStart: function() {
                    console.log('begin scrolling');
                },
                onComplete: function() {
                    console.log('done scrolling');
                }
            });

        },
        productSlider: function() {
            $(document).ready(function() {

                $("#owl-demo").owlCarousel({

                    autoPlay: 3000, //Set AutoPlay to 3 seconds

                    items : 3,
                    itemsDesktop : [1199,3],
                    itemsDesktopSmall : [979,3],
                    navigation: true

                });
             
            });
        },

         brandsSlider: function() {
            $(document).ready(function() {

                $("#brands-slider").owlCarousel({

                    autoPlay: 3000, //Set AutoPlay to 3 seconds

                    items : 7,
                    loop: true,
                    itemsDesktop : [1199,3],
                    itemsDesktopSmall : [979,3],
                    itemsTablet: [768,2],
                    itemsTabletSmall: false,
                    itemsMobile : [479,2],
                    navigation: false,
                    slideSpeed: 3000,
                    pagination: false

                });
             
            });
        },

        pagePreloader: function() {
            $(window).load(function() { // makes sure the whole site is loaded
                
                $('#status').fadeOut(); // will first fade out the loading animation
                $('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website.
                $('body').delay(350).css({'overflow':'visible'});
                
            })
        },


        ajaxSubmit: function() {

            $('#contact-form').submit(function(e){

                e.preventDefault();
                var passed  = $(this).validationEngine('validate');

                if (!passed) {
                  return;
                }


                var thisForm = $(this);

                $.ajax({
                    url : 'includes/contact-form.php',
                    type : 'post',
                    data : $(this).serialize() ,
                    dataType: 'json',
                    asynce: false,
                    beforeSend:function() {
                        $('div.form-contact').before('<span class="loading"></span>');
                    },
                    success:function(data){
                        if ( data.result == "ok" ){
                            setTimeout(function(){
                                $('#contact-form').get(0).reset();
                            },1500);
                            
                            $('#contact-form').hide();
                            $('span.loading').remove();
                            $('#contact-message').addClass('is-success');
                            $('#contact-message').html('<p>Thank you! We received your mail and we will get back to you as soon as possible</p> <a href="javascript: void(0)" class="button button-primary button-lg close-btn-msg">back to form</a>').show();

                            $('#contact-message .close-btn-msg').click(function(){
                                $('#contact-form').show();
                                $('#contact-message').hide();
                                $('#contact-form').removeClass('is-success');
                            });

                            return;

                            return;

                        }

                    }, error: function(jqXHR, textStatus, errorThrown){
                      // log the error to the console
                      //console.log("The following error occured: "+ textStatus, errorThrown)
                    }

                });
                return false;
            });
        }


    }
}



$(window).ready(function () {
  util.Global.init();
});
