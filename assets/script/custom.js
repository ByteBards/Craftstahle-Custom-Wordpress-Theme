jQuery(document).ready(function($) {
  // Refresh carousel on window resize
 var resizeTimer;
  $(window).on('resize', function() {
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(function() {
      owl.trigger('refresh.owl.carousel');
    }, 250); // Adjust delay as needed
  });
});


jQuery(document).ready(function($) {
  // Initialize the Owl Carousel
  var owl = $('.news-owl-carousel').owlCarousel({
    loop: true,
    margin: 20,
    dots: false,
    nav: false, // Disable default nav since we use custom nav
    responsiveClass: true,
    responsive: {
      0: {
        items: 1,
        margin: 0,
        stagePadding: 0,
      },
      600: {
        items: 2,
        margin: 20,
        stagePadding: 50,
      },
      1000: {
        items: 3
      }
    }
  });

  // Custom nav button functionality
  $('.ns-top-row .owl-prev').click(function() {
    owl.trigger('prev.owl.carousel');
  });

  $('.ns-top-row .owl-next').click(function() {
    owl.trigger('next.owl.carousel');
  });
});

jQuery(document).ready(function($) {
  // Initialize the Owl Carousel
  var owl = $('.testimonials-owl-carousel').owlCarousel({
    loop: true,
    margin: 30,
    dots: false,
    nav: false, // Disable default nav since we use custom nav
    responsiveClass: true,
    responsive: {
      0: {
        items: 1,
        margin: 0,
        stagePadding: 0,
      },
      600: {
        items: 2,
        margin: 20,
        stagePadding: 50,
      },
      1000: {
        items: 2.8
      }
    }
  });

  // Custom nav button functionality
  $('.ts-top-row .owl-prev').click(function() {
    owl.trigger('prev.owl.carousel');
  });

  $('.ts-top-row .owl-next').click(function() {
    owl.trigger('next.owl.carousel');
  });
});


jQuery(document).ready(function($){
  // Initialize #history-slider with full options
  var historySlider = $("#history-slider");
  historySlider.owlCarousel({
    loop: false,
    margin: 0,
    dots: false,
    nav: false,
    responsiveClass: true,
    responsive: {
      0: {
        items: 1,
        margin: 0,
        stagePadding: 0,
      },
      600: {
        items: 1,
        margin: 0,
        stagePadding: 0,
      },
      1000: {
        items: 1
      }
    }
  });

  // Custom nav buttons for historySlider
  $('.ohs-toprow .owl-prev').click(function() {
    historySlider.trigger('prev.owl.carousel');
  });

  $('.ohs-toprow .owl-next').click(function() {
    historySlider.trigger('next.owl.carousel');
  });

  // Initialize year-nav carousel
  var yearNav = $("#year-nav");
  yearNav.owlCarousel({
    items: 4,
    loop: false,
    margin: 10,
    nav: false,
    dots: false,
    responsive: {
      0: { items: 2 },
      600: { items: 3 },
      1000: { items: 4 }
    }
  });

  // Year-item click to change historySlider
  $(".year-item").click(function(){
    $(".year-item").removeClass("active");
    $(this).addClass("active");
    var index = $(this).data("slide");
    historySlider.trigger('to.owl.carousel', [index, 300]);
  });

  // Sync year-nav when historySlider changes
  historySlider.on('changed.owl.carousel', function(event) {
    var index = event.item.index;
    $(".year-item").removeClass("active");
    $(".year-item[data-slide='" + index + "']").addClass("active");
    yearNav.trigger('to.owl.carousel', [index, 300]);
  });
});

jQuery(document).ready(function($) {
  // Store actual slide count
  var slideCount = $('#main-slider .item').length;

  // Initialize main slider
  var main = $('#main-slider').owlCarousel({
    items: 1,
    loop: true,
    nav: false,
    dots: false,
    smartSpeed: 500
  });

  // Initialize thumbnail slider
  var thumb = $('#thumb-slider').owlCarousel({
    items: 4,
    loop: false, // No need to loop thumbs
    margin: 10,
    nav: false,
    dots: false,
    responsive: {
      0: { items: 3 },
      600: { items: 4 },
      1000: { items: 4 }
    }
  });

  // Custom arrows
  $('.main-prev').click(function() {
    main.trigger('prev.owl.carousel');
  });

  $('.main-next').click(function() {
    main.trigger('next.owl.carousel');
  });

  // When clicking a thumbnail
  $('.thumb-item').click(function() {
    var index = $(this).data('index');
    main.trigger('to.owl.carousel', [index + slideCount, 300]); // go to real slide (after clones)
  });

  // When main slider changes
  main.on('changed.owl.carousel', function(event) {
    var index = event.item.index - event.relatedTarget._clones.length / 2;
    var realIndex = ((index % slideCount) + slideCount) % slideCount;

    $('.thumb-item').removeClass('active');
    $('.thumb-item[data-index="' + realIndex + '"]').addClass('active');

    // Scroll thumbnail slider if needed
    thumb.trigger('to.owl.carousel', [realIndex, 300]);
  });

  // Set initial active thumb
  $('.thumb-item[data-index="0"]').addClass('active');
});

jQuery(document).ready(function($){
  $('.pts-gride .pts-item a').on('click', function(e) {
    // e.preventDefault();
    $('.pts-gride .pts-item').removeClass('active');
    $(this).closest('.pts-item').addClass('active');
  })
});

jQuery(document).ready(function($){
  var btn = $('.back-to-top');

  $(window).scroll(function() {
    if ($(window).scrollTop() > 300) {
      btn.addClass('show');
    } else {
      btn.removeClass('show');
    }
  });

  btn.on('click', function(e) {
    e.preventDefault();
    $('html, body').animate({scrollTop:0}, '300');
  });
});




document.addEventListener('DOMContentLoaded', function () {
  const target = document.querySelector('.pts-main');
  let isSticky = false;

  window.addEventListener('scroll', function () {
    const rect = target.getBoundingClientRect();

    // When the top of the element touches the top of the viewport
    if (rect.top <= 0 && !isSticky) {
      target.classList.add('make-me-sticky');
      isSticky = true;
    }

    // When scrolling up, and element comes back into view
    if (rect.top > 0 && isSticky) {
      target.classList.remove('make-me-sticky');
      isSticky = false;
    }
  });
});
