$(function () {
  $('.burger-btn').on('click', function () {
    $(this).toggleClass('cross');
    $('.sidebar').fadeToggle(300);
    $('body').toggleClass('noscroll');
  });

  $(document).on('click', '.sidebar a', function () {
    if (window.matchMedia('(max-width: 768px)').matches) {
      $('.burger-btn').removeClass('cross');
      $('.sidebar').fadeOut(300);
      $('body').removeClass('noscroll');
    }
  });

  $(window).on('resize', function () {
    if (window.matchMedia('(min-width: 769px)').matches) {
      $('.sidebar').show().removeAttr('style');
      $('.burger-btn').removeClass('cross');
      $('body').removeClass('noscroll');
    }
  });
});
