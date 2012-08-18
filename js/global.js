!function($) {
  // header
  !function() {
    var $title = $('#site-title');
    var $name = $('#global_header h1');

    var orgTransform = $title.css('transform');
    $title.css({
      transform: 'none'
    });

    var visible = true;
    var offset = $title.offset();
    var orgTop = offset.top;
    var orgLeft = offset.left;
    var orgDeg = -5;

    var $top = $('#top');
    var bottom = $top.offset().top + $top.height();

    $title.css({
      left: orgLeft,
      top: orgTop,
      transform: orgTransform
    });

    $(function() {
      // $title.addClass('animate');
    });

    var nBody = document.body;

    $(window).scroll(function(event) {
      var scrollTop = nBody.scrollTop;
      if (!scrollTop && nBody.parentNode.scrollTop) {
        nBody = nBody.parentNode;
        scrollTop = nBody.scrollTop;
      }
      if (scrollTop < bottom) {
        if (!visible) {
          $name.css('opacity', 0);
        }
        visible = true;

        var rate = (bottom - scrollTop) / bottom;
        setCss(rate);
      }
      else if (visible) {
        $name.css('opacity', 1);
        setCss(0);
        visible = false;
      }

      function setCss(rate) {
        var left = orgLeft * rate;
        var top = orgTop * rate;
        var opacity = (rate > 0 ? (rate > 0.7 ? rate : 0.7) : 0);
        var deg = (rate < 1 ? 0 : orgDeg);
        var scale = Math.max(rate, 0.2);
        $title.css({
          left: left,
          top: top,
          opacity: opacity,
          'transform': 'rotate(' + deg + 'deg) scale(' + scale + ')'
        });
      }
    }).scroll();
  }();

  // in-page link
  $('a[href^=#]:not([href$=#],.item)').click(function(event) {
    event.preventDefault();
    var href = $(this).attr('href');
    var top = $(href).offset().top;
    var offset = $('#global_header').outerHeight(true);
    var margin = 10;
    var scrollTop = top - offset - margin;
    $('body,html').animate({ scrollTop: scrollTop}, function() {
      location.hash = href;
    })
  });

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
