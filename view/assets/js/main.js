"use strict";

/*---------------------------------------------
Template name :  covidland
Version       :  1.0
Author        :  ThemeLooks
Author url    :  http://themelooks.com

NOTE:
------
Please DO NOT EDIT THIS JS, you may need to use "custom.js" file for writing your custom js.
We may release future updates so it will overwrite this file. it's better and safer to use "custom.js".

[Table of Content]
  01: Header Sticky
  02: Background Color
  03: Changing SVG Color
  04: Onpage Menu
  05: Menu Maker
  06: Top 50
  07: Magnific Popup
  08: World Update
  09: Country Update
  10: Top Country Update
  11: Corona Data Table
  12: Contact Form
  13: Preloader
----------------------------------------------*/
(function ($) {
  "use strict";
  /*========================
  01: Header Sticky
  ==========================*/

  $(window).on("scroll", function () {
    var scroll = $(window).scrollTop();

    if (scroll < 100) {
      $(".header-fixed").removeClass("sticky");
    } else {
      $(".header-fixed").addClass("sticky");
    }
  });
  /*========================
  02: Background Image
  ==========================*/

  var $bgImg = $('[data-bg-img]');
  $bgImg.css('background-image', function () {
    return 'url("' + $(this).data('bg-img') + '")';
  }).removeAttr('data-bg-img').addClass('bg-img');
  /*==================================
  03: Changing svg color
  ====================================*/

  $('img.svg').each(function () {
    var $img = jQuery(this);
    var imgID = $img.attr('id');
    var imgClass = $img.attr('class');
    var imgURL = $img.attr('src');
    jQuery.get(imgURL, function (data) {
      // Get the SVG tag, ignore the rest
      var $svg = jQuery(data).find('svg'); // Add replaced image's ID to the new SVG

      if (typeof imgID !== 'undefined') {
        $svg = $svg.attr('id', imgID);
      } // Add replaced image's classes to the new SVG


      if (typeof imgClass !== 'undefined') {
        $svg = $svg.attr('class', imgClass + ' replaced-svg');
      } // Remove any invalid XML tags as per http://validator.w3.org


      $svg = $svg.removeAttr('xmlns:a'); // Check if the viewport is set, else we gonna set it if we can.

      if (!$svg.attr('viewBox') && $svg.attr('height') && $svg.attr('width')) {
        $svg.attr('viewBox', '0 0 ' + $svg.attr('height') + ' ' + $svg.attr('width'));
      } // Replace image with new SVG


      $img.replaceWith($svg);
    }, 'xml');
  });
  /*==================================
  04: Onpage Menu
  ====================================*/

  $(".onPageNav a").mPageScroll2id({
    highlightSelector: ".onPageNav a",
    liveSelector: ".onPageNav a",
    offset: 85
  });
  /*==================================
  05: Menumaker
  ====================================*/

  $(".main-menu").menumaker({
    title: "<span></span>",
    format: "multitoggle"
  });
  /*==================================
  06: Top 50
  ====================================*/

  function top50() {
    var a = $('.top-50'),
        b = a.innerHeight(),
        c = b / 2;
    a.css({
      'margin-top': -c,
      'position': 'relative',
      'z-index': 99
    });
  }

  if ($(window).width() > 991) {
    top50();
  }
  /*==================================
  07: Magnific Popup
  ====================================*/


  $(".video_popup").magnificPopup({
    type: 'video'
  });
  /*==================================
  08: World Update
  ====================================*/

  /*==================================
  09: Country Update
  ====================================*/

  /*==================================
  10: Top Country Update
  ====================================*/


  /*==================================
  11: Corona Data Table
  ====================================*/

  $("#tableData").DataTable({
    responsive: true
  });

  $("#tablePolicy").DataTable({
    responsive: true
  });

  $("#tableSearch").DataTable({
    responsive: true
  });
  /*==================================
  12: Contact Form
  ====================================*/


  $('.contact-form-wrapper').on('submit', 'form', function (e) {
    e.preventDefault();
    var $el = $(this);
    $.post($el.attr('action'), $el.serialize(), function (res) {
      res = $.parseJSON(res);
      $el.parent('.contact-form-wrapper').find('.form-response').html('<span>' + res[1] + '</span>');
    });
  });
  /*==================================
  13: Preloader
  ====================================*/

  $(window).on('load', function () {
    $('.preloader').fadeOut(1000);
  });
})(jQuery);