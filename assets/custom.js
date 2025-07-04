jQuery(document).ready(function($){
	$('.custom-logo-link').addClass('navbar-brand');
});
//menu mobile

  document.addEventListener('DOMContentLoaded', function () {
    const menuButton = document.getElementById('primary-mobile-menu');
    const menuWrap = document.querySelector('.main-menu-wrap');

    if (menuButton && menuWrap) {
      menuButton.addEventListener('click', function (e) {
        e.preventDefault();

       const isOpen = menuWrap.classList.toggle('menu-visible');

        this.setAttribute('aria-expanded', isOpen);
        this.classList.toggle('menu-is-open', isOpen);
      });
    }
  });

/*jQuery(document).ready(function($) {
    $('.sub-menu-toggle').on('click', function(e) {
        e.preventDefault();

        $(this).siblings('.sub-menu').toggle();
        $(this).toggleClass('active');
    });
});*/
jQuery(document).ready(function($) {
    $('.menu-item-has-children').on('click', function(e) {
       if ($(e.target).is('a') || $(e.target).closest('a').length) {
            return; 
        }

        var $menuItem = $(this);

       
        $menuItem.find('> .sub-menu').slideToggle(200);

       $menuItem.toggleClass('submenu-open');
    });
});

//team slider
jQuery(document).ready(function() {
   const featurednextIcon = '<img src="/wp-content/uploads/2025/03/next-icon.svg" alt="right">';
    const featuredprevIcon = '<img src="/wp-content/uploads/2025/03/prev-icon.svg" alt:"left">';

    jQuery('#featured-pro-slider').owlCarousel({
        autoplay: true,
        infinite: true,
        autoplaySpeed: 3000,
        loop:true,
        speed: 100,
        animateIn: 'fadeIn',
        margin: 40,
        nav: true,
        responsiveClass: true,
        dots: false,
        navText: [
            featuredprevIcon,
            featurednextIcon
        ],

        responsive: {
             0: {
                items: 1.3,
                margin: 20
            },
             768: {
                items: 1.9,
                margin: 20
            },
            1100: {
                items: 2.9
            }
        }


    });
});

//single page featured properties
jQuery(document).ready(function() {
   const singlefeaturednextIcon = '<img src="/wp-content/uploads/2025/03/next-icon.svg" alt="right">';
    const singlefeaturedprevIcon = '<img src="/wp-content/uploads/2025/03/prev-icon.svg" alt:"left">';

    jQuery('#singlefeatured-slider').owlCarousel({
        autoplay: false,
        infinite: true,
        autoplaySpeed: 3000,
        loop:true,
        speed: 100,
        animateIn: 'fadeIn',
        margin: 32,
        nav: true,
        responsiveClass: true,
        dots: false,
        navText: [
            singlefeaturedprevIcon,
            singlefeaturednextIcon
        ],

        responsive: {
            0: {
                items: 1
            },
			768: {
                items: 2
            },
            1024: {
                items: 3
            }
        }


    });
});
//services slider
jQuery(document).ready(function() {
   const sernextIcon = '<img src="/wp-content/uploads/2025/03/next-icon.svg" alt="right">';
    const serprevIcon = '<img src="/wp-content/uploads/2025/03/prev-icon.svg" alt:"left">';

    jQuery('#services-slider').owlCarousel({
        autoplay: false,
        infinite: true,
        autoplaySpeed: 3000,
        loop:true,
        speed: 100,
        animateIn: 'fadeIn',
        margin: 32,
        nav: true,
        responsiveClass: true,
        dots: false,
        navText: [
            serprevIcon,
            sernextIcon
        ],

        responsive: {
			0: {
                items: 1.5,
                 margin: 20
            },
            991: {
                items: 2.5
            },
            1024: {
                items: 2.7
            },
            1300: {
                items: 3.9
            }
        }


    });
});
//gallery slider
jQuery(document).ready(function() {
   
	jQuery('#gallery-slider').owlCarousel({
        autoplay: true,
        infinite: true,
        autoplaySpeed: 3000,
        loop:true,
        speed: 100,
        animateIn: 'fadeIn',
        margin: 48,
        nav: false,
        responsiveClass: true,
        dots: false,
        responsive: {
			767: {
                items: 2
            },
            991: {
                items: 3
            },
            1024: {
                items: 4
            }
        }


    });
});
//gallery listing slider
jQuery(document).ready(function() {
     const gallistnextIcon = '<img src="/wp-content/uploads/2025/04/gallery-next.svg" alt="right">';
    const gallistprevIcon = '<img src="/wp-content/uploads/2025/04/gallery-prev.svg" alt:"left">';
    jQuery('.pro-list-box .owl-carousel').owlCarousel({
        autoplay: false,
        infinite: true,
        autoplaySpeed: 3000,
        loop:true,
        speed: 100,
        animateIn: 'fadeIn',
        nav: true,
        responsiveClass: true,
        dots: false,
        margin:0,
        navText: [
            gallistprevIcon,
            gallistnextIcon
        ],
        responsive: {
            0: {
                items: 1
            }
        }


    });
});
//agent slider
jQuery(document).ready(function() {
   //const agentnextIcon = '<img src="/wp-content/uploads/2025/03/next-icon.svg" alt="right">';
   // const agentprevIcon = '<img src="/wp-content/uploads/2025/03/prev-icon.svg" alt:"left">';

    jQuery('#agent-slider').owlCarousel({
        autoplay: true,
        infinite: true,
        autoplaySpeed: 3000,
        loop:true,
        speed: 100,
        animateIn: 'fadeIn',
        margin: 48,
        nav: false,
        responsiveClass: true,
        dots: false,
       // navText: [
        //    agentprevIcon,
        //    agentnextIcon
        //],

        responsive: {
			767: {
                items: 2
            },
            991: {
                items: 3
            },
            1024: {
                items: 4
            }
        }


    });
});
//team agent slider
jQuery(document).ready(function() {
   const teamagentnextIcon = '<img src="/wp-content/uploads/2025/03/next-icon.svg" alt="right">';
    const teamagentprevIcon = '<img src="/wp-content/uploads/2025/03/prev-icon.svg" alt:"left">';

    jQuery('#team-agent-slider').owlCarousel({
        autoplay: true,
        infinite: true,
        autoplaySpeed: 3000,
        loop:true,
        speed: 100,
        animateIn: 'fadeIn',
        margin: 48,
        nav: true,
        responsiveClass: true,
        dots: false,
        navText: [
            teamagentprevIcon,
            teamagentnextIcon
        ],

        responsive: {
			0: {
                items: 1.2,
                 margin: 20
            },
            768: {
                items: 2.4,
                 margin: 30
            },
            1024: {
                items: 3.4
            }
        }


    });
});
//partners slider
jQuery(document).ready(function() {
   const partnernextIcon = '<img src="/wp-content/uploads/2025/03/next-icon.svg" alt="right">';
    const partnerprevIcon = '<img src="/wp-content/uploads/2025/03/prev-icon.svg" alt:"left">';

    jQuery('#partner-slider').owlCarousel({
        autoplay: true,
        infinite: true,
        autoplaySpeed: 3000,
        loop:true,
        speed: 100,
        animateIn: 'fadeIn',
        margin: 50,
        nav: true,
        responsiveClass: true,
        dots: false,
        navText: [
            partnerprevIcon,
            partnernextIcon
        ],

        responsive: {
			0: {
                items: 1.4,
                margin: 20
            },
			768: {
                items: 2.4,
                margin: 30
            },
            991: {
                items: 3.4
            },
            1024: {
                items: 4.7
            }
        }


    });
});
//offplan slider
jQuery(document).ready(function() {
   const offplannextIcon = '<img src="/wp-content/uploads/2025/03/next-icon.svg" alt="right">';
    const offplanprevIcon = '<img src="/wp-content/uploads/2025/03/prev-icon.svg" alt:"left">';

    jQuery('#offplan-slider').owlCarousel({
        autoplay: false,
        infinite: true,
        autoplaySpeed: 3000,
        loop:true,
        speed: 100,
        animateIn: 'fadeIn',
        margin: 64,
        nav: true,
        responsiveClass: true,
        dots: false,
		animateOut: 'fadeOut',
       animateIn: 'fadeIn',
        navText: [
            offplanprevIcon,
            offplannextIcon
        ],

        responsive: {
            0: {
                items: 1.2,
                 margin: 20
            },
			1024: {
                items: 1.9
            }
        }


    });
});
//testimonial
jQuery(document).ready(function() {
   const offplannextIcon = '<img src="/wp-content/uploads/2025/03/next-icon.svg" alt="right">';
    const offplanprevIcon = '<img src="/wp-content/uploads/2025/03/prev-icon.svg" alt:"left">';

    jQuery('#testimonial-slider').owlCarousel({
        autoplay: false,
        infinite: true,
        autoplaySpeed: 3000,
        loop:true,
        speed: 100,
        animateIn: 'fadeIn',
        nav: true,
        responsiveClass: true,
        dots: false,
        navText: [
            offplanprevIcon,
            offplannextIcon
        ],

        responsive: {
			0: {
                items: 1
            }
        }


    });
});

//whychoose slider
jQuery(document).ready(function() {
   const whychosenextIcon = '<img src="/wp-content/uploads/2025/03/next-icon.svg" alt="right">';
    const whychoseprevIcon = '<img src="/wp-content/uploads/2025/03/prev-icon.svg" alt:"left">';

    jQuery('#whychoose-slider').owlCarousel({
        autoplay: true,
        infinite: true,
        autoplaySpeed: 3000,
        loop:true,
        speed: 100,
        animateIn: 'fadeIn',
        nav: false,
        responsiveClass: true,
        dots: false,
		margin: 32,
        navText: [
            whychoseprevIcon,
            whychosenextIcon
        ],

       responsive: {
			0: {
                items: 1.1
            },
            1280: {
                items: 2.2
            }
        }


    });
});
//latest blogs slider
jQuery(document).ready(function() {
   const latestnextIcon = '<img src="/wp-content/uploads/2025/03/next-icon.svg" alt="right">';
    const latestprevIcon = '<img src="/wp-content/uploads/2025/03/prev-icon.svg" alt:"left">';

    jQuery('#lastest-blogs').owlCarousel({
        autoplay: true,
        infinite: true,
        autoplaySpeed: 3000,
        loop:true,
        speed: 100,
        animateIn: 'fadeIn',
        nav: true,
        responsiveClass: true,
        dots: false,
		margin: 32,
        navText: [
            latestprevIcon,
            latestnextIcon
        ],

       responsive: {
			0: {
                items: 1
            }
        }


    });
});
//add right margin in featured slider
  jQuery(document).ready(function(){
        var $head_container = jQuery('.jump-pro-header .container');
                var head_margin = $head_container.css('margin-right'); 
                jQuery(".featured-listing").css({"margin-left": head_margin});
	            jQuery(".service-listing").css({"margin-left": head_margin});
	            jQuery(".offplan-listing").css({"margin-left": head_margin});
	            jQuery(".single-banner-slider .container").css({"margin-left": head_margin});
	            jQuery(".pro-banner-sec .container").css({"margin-left": head_margin});
	            jQuery(".why-choose-sec .container").css({"padding-left": head_margin});
	            jQuery(".team-agent-listing").css({"margin-left": head_margin});
	             jQuery(".partner-listing").css({"margin-left": head_margin});
	             jQuery("#partner-slider .owl-nav").css({"margin-right": head_margin});
                 jQuery(".single-banner-slider").css({"margin-left": head_margin});
                 jQuery("#single-pro-slider .owl-nav").css({"margin-right": head_margin});
                  jQuery(".pro-banner-sec").css({"margin-left": head_margin});
                  jQuery(".instagram-listing").css({"margin-left": head_margin});
	  
            });
// Sticky menu
jQuery(window).scroll(function() {
if (jQuery(this).scrollTop() > 1){  
    jQuery('header').addClass("sticky");
  }
  else{
    jQuery('header').removeClass("sticky");
  }
});
//gallery modal js

document.addEventListener('DOMContentLoaded', () => {
    const galleryGrid = document.querySelector(".gallery-grid");
    if (!galleryGrid) return; // Exit if gallery grid is not found

    const items = galleryGrid.querySelectorAll(".gallery-item");
    if (items.length === 0) return; // Exit if no gallery items found

    const lightboxModal = document.getElementById("gallery-modal");
    if (!lightboxModal) return;

    const modalBody = lightboxModal.querySelector(".gal-lightbox-txt");
    if (!modalBody) return;

    const bsModal = new bootstrap.Modal(lightboxModal);
    let currentIndex = 0;

    function createMediaElement(src) {
        if (!src) return '<p>Error: No media source found.</p>'; // Handle missing media
        const isVideo = src.match(/\.(mp4|webm|ogg)$/i);
        return isVideo
            ? `<video class="d-block w-100" controls autoplay>
           <source src="${src}" type="video/mp4">
           Your browser does not support the video tag.
         </video>`
            : `<img class="d-block img-fluid w-100" src="${src}" alt="Lightbox Image">`;
    }

    function openLightbox(index) {
        currentIndex = index;
        const item = items[index];
        const mediaSrc = item.getAttribute("data-src");

        if (mediaSrc) {
            modalBody.innerHTML = createMediaElement(mediaSrc);
            bsModal.show();
        } else {
            console.error("Missing data-src attribute for gallery item:", item);
        }
    }

    items.forEach((item, index) => {
        item.addEventListener("click", (e) => {
            e.preventDefault();
            openLightbox(index);
        });
    });

    // Navigation Handlers
    function showNext() {
        currentIndex = (currentIndex + 1) % items.length;
        openLightbox(currentIndex);
    }

    function showPrev() {
        currentIndex = (currentIndex - 1 + items.length) % items.length;
        openLightbox(currentIndex);
    }

    const nextBtn = document.querySelector(".carousel-control-next");
    const prevBtn = document.querySelector(".carousel-control-prev");

    if (nextBtn) nextBtn.addEventListener("click", showNext);
    if (prevBtn) prevBtn.addEventListener("click", showPrev);
});

document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll(".gallery-item").forEach(function (item) {
        let src = item.getAttribute("data-src");

        // Check if the source is an MP4 file
        if (src && src.endsWith(".mp4")) {
            item.closest(".gall_img_wrap").classList.add("video-item");
        }
    });
});

//end gallery modal
//single property slider
jQuery(document).ready(function() {
   const singlenextIcon = '<img src="/wp-content/uploads/2025/03/next-icon.svg" alt="right">';
    const singleprevIcon = '<img src="/wp-content/uploads/2025/03/prev-icon.svg" alt:"left">';

    jQuery('#single-pro-slider').owlCarousel({
        autoplay: false,
        infinite: true,
        autoplaySpeed: 3000,
        loop:true,
        speed: 100,
        animateIn: 'fadeIn',
		dots: true,
        nav: true,
		margin:32,
        responsiveClass: true,
        navText: [
            singleprevIcon,
            singlenextIcon
        ],

        responsive: {
			0: {
                items: 1.2
            },
            1400: {
                items: 1.1
            }
        }


    });
});
//end single property slider

//about us counter sec 
jQuery(document).ready(function() { 
	jQuery('.count').each(function () {
    jQuery(this).prop('Counter',0).animate({
        Counter: jQuery(this).text()
    }, {
        duration: 4000,
        easing: 'swing',
        step: function (now) {
            jQuery(this).text(Math.ceil(now));
        }
    });
});
	});

//instagram slider
document.addEventListener('DOMContentLoaded', function () {
    const sbi_images = document.getElementById('sbi_images');
    if (sbi_images) {
        sbi_images.classList.add('owl-carousel', 'owl-theme');
    }
});

$(window).on('load', function () {
    if ($('#sbi_images .sbi_item').length > 0) {
        $('#sbi_images').owlCarousel({
            items: 6.3,
            margin: 32,
            autoplay: true,
            infinite: true,
        autoplaySpeed: 3000,
        loop:true,
        speed: 100,
        animateIn: 'fadeIn',
            nav: false,
            dots: false,
            responsive: {
                0: {
                    items: 1.4,
                    margin: 20
                },
                768: {
                    items: 3.3,
                    margin: 20
                },
                991: {
                    items: 3.3
                },
                1024: {
                    items: 6.3
                }
            }
        });
    }
});
//testimonial 
jQuery(document).ready(function($) {
  $(".testi-block-content").each(function() {
    var $content = $(this);

    if (this.scrollHeight > $content.outerHeight()) {
      $content.after('<a href="javascript:void(0);" class="read-more">Read More</a>');
    }
  });

  $(document).on("click", ".read-more", function() {
    var $link = $(this);
    var $content = $link.prev(".testi-block-content");

    $content.toggleClass("expanded");
    $link.text($content.hasClass("expanded") ? "Read Less" : "Read More");
  });
});

//service detail why choose slider
jQuery(document).ready(function($) {
  $(".why-choose-item .why-item-txt").each(function() {
    var $content = $(this);

    if (this.scrollHeight > $content.outerHeight()) {
      $content.after('<a href="javascript:void(0);" class="read-more">Read More</a>');
    }
  });

  $(document).on("click", ".read-more", function() {
    var $link = $(this);
    var $content = $link.prev(".why-choose-item .why-item-txt");

    $content.toggleClass("expanded");
    $link.text($content.hasClass("expanded") ? "Read Less" : "Read More");
  });
});

