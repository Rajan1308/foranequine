jQuery.noConflict();



(function ($) {
    'use strict';
    var a = 0;

    $(window).scroll(function(){

        var sticky = $('header'),
            scroll = $(window).scrollTop();
      
        if (scroll >= 250) sticky.addClass('sticky-nav');
        else sticky.removeClass('sticky-nav');


    //counter animation

    if($('.customer-success-section').length === 1){
        var oTop = $(".counter-box").offset().top - window.innerHeight;
        if (a == 0 && $(window).scrollTop() > oTop) {
            $(".counter").each(function () {
                var $this = $(this),
                    countTo = $this.attr("data-number");
                $({
                    countNum: $this.text()
                }).animate(
                    {
                        countNum: countTo
                    },
    
                    {
                        duration: 850,
                        easing: "swing",
                        step: function () {
                            $this.text(
                                Math.ceil(this.countNum).toLocaleString("en")
                            );
                        },
                        complete: function () {
                            $this.text(
                                Math.ceil(this.countNum).toLocaleString("en")
                            );
    
                            $this.addClass('zoom-text')
                        }
                    }
                );
            });
    
            
            // $(".counter2").each(function () {
            //     var $this = $(this),
            //         countTo = $this.attr("data-number");
            //     $({
            //         countNum: $this.text()
            //     }).animate(
            //         {
            //             countNum: countTo
            //         },
    
            //         {
            //             duration: 850,
            //             easing: "swing",
            //             step: function () {
            //                 $this.text(
            //                     Math.ceil(this.countNum).toLocaleString("en") + "k"
            //                 );
            //             },
            //             complete: function () {
            //                 $this.text(
            //                     Math.ceil(this.countNum).toLocaleString("en") + "k"
            //                 );
            //                 $this.addClass('zoom-text')
            //             }
            //         }
            //     );
            // });
    
    
            a = 1;
        }
    }
   



    });


    jQuery(document).ready(function ($) {

        AOS.init({
            once: true,
        });

    //home page slider counter  
        
    var totalItems = $('.carousel-item').length;
    var currentIndex = $('.carousel-item.active').index();
    $('.num').html(''+'<span>' + ("0"+currentIndex).slice(-2) + '</span>' + '<span> / </span>' + ("0"+totalItems).slice(-2) + '');
    
    
    
    $('.bs-slider-next').click(function(){
        currentIndex = $('.carousel-item.active').index()+1;
        console.log(currentIndex)
  
          if(currentIndex === totalItems+1){
              $('.num').html('' + '<span>' + ("0"+1).slice(-2) + '</span>' + '<span>/</span>' + ("0"+totalItems).slice(-2) + ''); 
          }
          else{
              $('.num').html('' + '<span>' + ("0" + currentIndex).slice(-2) + '</span>' + '<span>/</span>' + ("0"+totalItems).slice(-2) + ''); 
          }
    })

    $('.bs-slider-prev').click(function(){
        currentIndex = $('.carousel-item.active').index() -1;
        console.log(currentIndex, totalItems)
  
          if(currentIndex === 0){
              $('.num').html('' + '<span>' + ("0" + totalItems).slice(-2) + '</span>' + '<span>/</span>' + ("0"+totalItems).slice(-2) + ''); 
          }
          else{
              $('.num').html('' + '<span>' + ("0" + currentIndex).slice(-2) + '</span>' + '<span>/</span>' + ("0"+totalItems).slice(-2) + ''); 
          }
    })

    //
    $('.horse-racing .owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        lazyLoad:true,
        lazyContent:true,
        responsive:{
            0:{
                items:1
            }
        }
    });
    
    // 
    $('.sport-horse .owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        lazyLoad:true,
        lazyContent:true,
        responsive:{
            0:{
                items:1
            }
        }
    })
    // 
    $('.breeding .owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        lazyLoad:true,
        lazyContent:true,
        responsive:{
            0:{
                items:1
            }
        }
    })
    
    //ambassadors
    
    $('.ambassadors .owl-carousel').owlCarousel({
        loop: true,
        autoplay: false,
        autoplayTimeout:4000,
        autoplaySpeed: 1500,
        smartSpeed: 1500,
        margin:30,
        lazyLoad: true,
        items: 1,
        responsiveClass: true,
        nav: true,
        dots: false,
        responsive: {
            0: {
                items:1,
            },
            768: {
                items: 2
            },
            1024: {
                items: 3
            },
            1200: {
                items: 3
            }
        }
        });


        //cs-carousel

    $('.cs-carousel .owl-carousel').owlCarousel({
        loop: true,
        autoplay: false,
        autoplayTimeout:4000,
        autoplaySpeed: 1500,
        smartSpeed: 1500,
        margin:30,
        lazyLoad: true,
        items: 1,
        responsiveClass: true,
        nav: true,
        dots: false,
        responsive: {
            0: {
                items:1,
            },
            768: {
                items: 2
            },
            1024: {
                items: 3
            },
            1200: {
                items: 3
            }
        }
        });

        //siter brand carousel


        $('.siter-brand-carousel .owl-carousel').owlCarousel({
            loop:true,
            autoplay:false,
            margin:15,
            nav:true,
            dots:false,
            center:true,
            autoWidth:true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:2
                },
                1000:{
                    items:3
                },
                1200:{
                  items:3
                }
            }
          })


        // winning-highlight-carousel
        $('.winning-highlight-carousel .owl-carousel').owlCarousel({
            loop: true,
            autoplay: false,
            margin:15,
            items: 1,
            nav: true,
            dots: false,
            center:true,
            responsive: {
                0: {
                    items: 1,
                },
                768: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            }
        });

        //career-highlight-carousel
        $('.career-highlight-carousel .owl-carousel').owlCarousel({
            loop: true,
            autoplay: false,
            margin:15,
            items: 1,
            nav: true,
            dots: false,
            center:true,
            responsive: {
                0: {
                    items: 1,
                },
                768: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            }
        });

        //latest-news-carousel

        $('.latest-news .owl-carousel').owlCarousel({
            loop:true,
            margin:30,
            nav:false,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3
                },
                1000:{
                    items:3
                }
            }
        })

        //blogs-carousel

        $('.blogs .owl-carousel').owlCarousel({
            loop:true,
            margin:30,
            nav:false,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3
                },
                1000:{
                    items:3
                }
            }
        })

        //our-galley-carusel-carousel

        $('.our-galley-carusel .owl-carousel').owlCarousel({
            loop:true,
            margin:30,
            nav:false,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3
                },
                1000:{
                    items:3
                }
            }
        })

        //our-videos-carusel
        

        $('.our-videos-carusel .owl-carousel').owlCarousel({
            loop:true,
            margin:30,
            nav:false,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3
                },
                1000:{
                    items:3
                }
            }
        })

        //global-carousel

        
        $('.global-carousel .owl-carousel').owlCarousel({
            loop:true,
            margin:30,
            nav:true,
            dots:false,
            responsive:{
                0:{
                    items:1
                }
            }
        })
      

        //Expert Nutritional Team
        $('.expert-nutrition-team .owl-carousel').owlCarousel({
            loop:true,
            margin:30,
            nav:true,
            dots:false,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:2
                },
                1000:{
                    items:3
                }
            }
        })

        //Explore Latest Nutritional Articles
        $('.elna-carousel .owl-carousel').owlCarousel({
            loop:true,
            margin:0,
            nav:false,
            dots:true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:2
                },
                1000:{
                    items:3
                }
            }
        })
        //


        //Frequently Recommended Together
        $('.frequently-recommended-carousel .owl-carousel').owlCarousel({
            loop:true,
            margin:0,
            nav:false,
            dots:true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:2
                },
                1000:{
                    items:4
                }
            }
        })

        //Best seller
        $('.best-sellers-carousel .owl-carousel').owlCarousel({
            loop:true,
            margin:0,
            nav:true,
            dots:false,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:1
                },
                1000:{
                    items:2
                }
            }
        })


        //

          $(window).resize(function(){
            if($(window).width() <= 991){
                $( ".header-right" ).appendTo( ".navbar-collapse" );
            }else{
                $( ".header-right" ).prependTo( ".header-right-wrap" );
                
            }
         })

         //
        $("#phone").intlTelInput({});
        $("#phone2").intlTelInput({});
        $("#phone3").intlTelInput({});
        $("#phone4").intlTelInput({});
        $("#phone5").intlTelInput({});
        $("#phone6").intlTelInput({});
        $("#phone7").intlTelInput({});
        $("#phone8").intlTelInput({});


        $("#phone, #phone2, #phone3, #phone4,#phone5,#phone6,#phone7,#phone8").val('')

        //

        $('.content-panel').hide();
        $('.content-panel').eq(0).show();
        $('.raa_tab').eq(0).addClass('active');

        $('.raa_tab').click(function(){
            $(this).parent('.filter-category').siblings('.filter-category').children('.content-panel').slideUp();
           $(this).siblings('.raa_tab').next().slideUp();
           $(this).parent('.filter-category').siblings('.filter-category').children('.raa_tab').removeClass('active');
           $(this).toggleClass('active');
           $(this).next('.content-panel').slideToggle();
        });


        //
        $(".mega-menu").parent('.dropdown').css({'position':'static'}) 
        $(window).resize(function(){
            if ($(window).width() >= 980){	 

            // when you hover a toggle show its dropdown menu
            $(".navbar .dropdown-toggle").hover(function () {
                $(this).parent().toggleClass("show");
                $(this).parent().find(".mega-menu").toggleClass("show"); 
            });

                // hide the menu when the mouse leaves the dropdown
            $( ".navbar .mega-menu" ).mouseleave(function() {
                $(this).removeClass("show");  
            });

            $('header .navbar .mega-menu').show()
        
                // do something here
            }	
            else{
                $('header .navbar .mega-menu').hide()
            }
        }); 
        
        //

        $('.checked-item-close').on('click', function(){
            $(this).parent('.checked-name').remove()
        })

    //products details images carousel

        var bigimage = $("#productBigImage");
        var thumbs = $("#thumbs");
        var syncedSecondary = true;

        bigimage
        .owlCarousel({
            items: 1,
            slideSpeed: 2000,
            nav: true,
            autoplay: true,
            dots: false,
            loop: true,
            responsiveRefreshRate: 200,
            navText: [
                '<i class="fa fa-arrow-left" aria-hidden="true"></i>',
                '<i class="fa fa-arrow-right" aria-hidden="true"></i>'
            ]
        })
        .on("changed.owl.carousel", syncPosition);

        thumbs
        .on("initialized.owl.carousel", function() {
        thumbs
        .find(".owl-item")
        .eq(0)
        .addClass("current");
        })
        .owlCarousel({
            items:3,
            dots: false,
            nav: false,
            margin:10,
            navText: [
                '<i class="fa fa-arrow-left" aria-hidden="true"></i>',
                '<i class="fa fa-arrow-right" aria-hidden="true"></i>'
            ],
            smartSpeed: 200,
            slideSpeed: 500,
            slideBy: 3,
            responsiveRefreshRate: 100
        })
        .on("changed.owl.carousel", syncPosition2);

        function syncPosition(el) {
        var count = el.item.count - 1;
        var current = Math.round(el.item.index - el.item.count / 2 - 0.5);

        if (current < 0) {
        current = count;
        }
        if (current > count) {
        current = 0;
        }
        thumbs
        .find(".owl-item")
        .removeClass("current")
        .eq(current)
        .addClass("current");
        var onscreen = thumbs.find(".owl-item.active").length - 1;
        var start = thumbs
        .find(".owl-item.active")
        .first()
        .index();
        var end = thumbs
        .find(".owl-item.active")
        .last()
        .index();

        if (current > end) {
        thumbs.data("owl.carousel").to(current, 100, true);
        }
        if (current < start) {
        thumbs.data("owl.carousel").to(current - onscreen, 100, true);
        }
        }

        function syncPosition2(el) {
        if (syncedSecondary) {
        var number = el.item.index;
        bigimage.data("owl.carousel").to(number, 100, true);
        }
        }

        thumbs.on("click", ".owl-item", function(e) {
        e.preventDefault();
        var number = $(this).index();
        bigimage.data("owl.carousel").to(number, 300, true);
        });

        //   End products details images carousel 
        
        
   

    });//end document ready

jQuery('li.our-supplement a').on('click', function(){
    var addressValue = $(this).attr("href");
    
    window.location = addressValue
});
   

    
    if($(window).width() <= 991){
        $( ".header-right" ).appendTo( ".navbar-collapse" );
        $('.mobile-toggle').click(function(){
            $('.mega-menu').slideToggle()
           })
    }

// news
    $('.news_cat_item').on('click', function() {
        $('.news_cat_item').removeClass('active');
        $(this).addClass('active');
        var post_type = $(this).attr('post_type');
        $.ajax({
        type: 'POST',
        url: mx_app.ajax_url,
        dataType: 'html',
        data: {
            action: 'filter_news',
            category: $(this).data('slug'),
            post_type : post_type,
        },
        success: function(res) {
            $('.news-list').html(res);
        }
        })
    });
//  blogs
    $('.blogs_cat_item').on('click', function() {
			$('.blogs_cat_item').removeClass('active');
			$(this).addClass('active');
			var post_type = $(this).attr('post_type');
			// console.log(post_type);
			$.ajax({
			type: 'POST',
			url: mx_app.ajax_url,
			dataType: 'html',
			data: {
				action: 'filter_blogs',
				blog_category: $(this).data('slug'),
				post_type : post_type,
			},
			success: function(response) {
					$('.blogs-list').html(response);
			}
			})
    });
    

    // where to buy 
    (function($) {

        /*
        *  new_map
        *
        *  This function will render a Google Map onto the selected jQuery element
        *
        *  @type	function
        *  @date	8/11/2013
        *  @since	4.3.0
        *
        *  @param	$el (jQuery element)
        *  @return	n/a
        */
        function new_map( $el ) {
        
            // variables
            var $markers = $el.find('.marker');
            var args = {
                zoom		: 16,
                center	: new google.maps.LatLng(0, 0),
                mapTypeId	: google.maps.MapTypeId.ROADMAP
            };
        
            // create map
            var map = new google.maps.Map( $el[0], args);
        
            // add a markers reference
            map.markers = [];
        
            // add markers
            $markers.each(function(){
                    add_marker( $(this), map );
            });
        
            // center map
            center_map( map );
        
            // return
            return map;
        }
        
        /*
        *  add_marker
        *
        *  This function will add a marker to the selected Google Map
        *
        *  @type	function
        *  @date	8/11/2013
        *  @since	4.3.0
        *
        *  @param	$marker (jQuery element)
        *  @param	map (Google Map object)
        *  @return	n/a
        */
        var infoWindows = [];
        function add_marker( $marker, map ) {
        
            // var
            var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );
        
            // create marker
            var marker = new google.maps.Marker({
                position	: latlng,
                map			: map
            });
        
            // add to array
            map.markers.push( marker );
        
            // if marker contains HTML, add it to an infoWindow
            if( $marker.html() ){
    
            // Create info window.
            var infoWindow = new google.maps.InfoWindow({
                content: $marker.html()
            });
    
            infoWindows.push(infoWindow);
    
            // Show info window when marker is clicked.
            google.maps.event.addListener(marker, 'click', function() {
    
                //close all
                for (var i = 0; i < infoWindows.length; i++) {
                    infoWindows[i].close();
                }
                infoWindow.open( map, marker );
    
            });
    
            google.maps.event.addListener(map, 'click', function() {
                infoWindow.close();
            });
        }
        }
        
        /*
        *  center_map
        *
        *  This function will center the map, showing all markers attached to this map
        *
        *  @type	function
        *  @date	8/11/2013
        *  @since	4.3.0
        *
        *  @param	map (Google Map object)
        *  @return	n/a
        */
        function center_map( map ) {
        
            // vars
            var bounds = new google.maps.LatLngBounds();
        
            // loop through all markers and create bounds
            $.each( map.markers, function( i, marker ){
                var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );
                bounds.extend( latlng );
            });
        
            // only 1 marker?
            if( map.markers.length == 1 ) {
                // set center of map
                map.setCenter( bounds.getCenter() );
                map.setZoom( 16 );
            } else {
                // fit to bounds
                map.fitBounds( bounds );
            }
        }
        
        /*
        *  document ready
        *
        *  This function will render each map when the document is ready (page has loaded)
        *
        *  @type	function
        *  @date	8/11/2013
        *  @since	5.0.0
        *
        *  @param	n/a
        *  @return	n/a
        */
        // global var
        var map = null;
        $(document).ready(function(){
        
            $('#map.acf-map').each(function(){
                // create map
                map = new_map( $(this) );
            });
    
        });
        
        })(jQuery);

       

}(jQuery));

