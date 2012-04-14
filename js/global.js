!function($) {
  // header
  !function() {
    var $name = $('#global_header h1');
    var $top = $('#top');
    var visible = false;
    var bottom = $top.offset().top + $top.height();

    $(window).scroll(function(event) {
      var scrollTop = document.body.scrollTop;
      if (!visible && scrollTop > bottom) {
        $name.fadeIn();
        visible = true;
      }
      else if (visible && scrollTop < bottom) {
        $name.fadeOut();
        visible = false;
      }
    });
  }();

  // search form
  !function() {
    var $input = $('#searchform input[name=s]');
    var $item = $input.closest('.item');
    $input
      .focus(function(event) {
        $item.addClass('active');
      })
      .blur(function(event) {
        $item.removeClass('active');
      });
  }();
}(jQuery);
