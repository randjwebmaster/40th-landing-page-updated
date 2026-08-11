(function ($) {

  /* ============================================================
     Mobile menu toggle
     ============================================================ */
  var $nav = $('.lp-nav .inner');
  var $menu = $('.lp-nav .menu');

  if ($menu.length) {
    var $toggle = $(
      '<button class="nav-toggle" aria-expanded="false" aria-label="Toggle navigation">' +
        '<span></span><span></span><span></span>' +
      '</button>'
    );

    $nav.append($toggle);

    $toggle.on('click', function () {
      var isOpen = $menu.hasClass('is-open');
      $menu.toggleClass('is-open', !isOpen);
      $toggle.toggleClass('is-open', !isOpen);
      $toggle.attr('aria-expanded', String(!isOpen));
    });

    // Close menu when a link inside it is clicked
    $menu.on('click', 'a', function () {
      $menu.removeClass('is-open');
      $toggle.removeClass('is-open');
      $toggle.attr('aria-expanded', 'false');
    });

    // Close menu on outside click
    $(document).on('click', function (e) {
      if (!$(e.target).closest('.lp-nav').length) {
        $menu.removeClass('is-open');
        $toggle.removeClass('is-open');
        $toggle.attr('aria-expanded', 'false');
      }
    });
  }


  /* ============================================================
     Smooth scroll for anchor links
     ============================================================ */
  $(document).on('click', 'a[href^="#"]', function (e) {
    var target = $(this).attr('href');
    if (target === '#') return;

    var $target = $(target);
    if (!$target.length) return;

    e.preventDefault();

    var navHeight = $('.lp-nav').outerHeight() || 0;
    var offset = $target.offset().top - navHeight - 16;

    $('html, body').animate({ scrollTop: offset }, 480, 'swing');
  });


  /* ============================================================
     Post navigation — prevent empty link clicks
     ============================================================ */
  $('.post-navigation a[href=""]').remove();


  /* ============================================================
     Search form — clear placeholder on focus
     ============================================================ */
  var $searchField = $('.search-field');

  if ($searchField.length) {
    $searchField.on('focus', function () {
      $(this).attr('placeholder', '');
    });
  }

})(jQuery);
