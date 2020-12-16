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
    var orgTop = offset.top - document.scrollingElement.scrollTop;
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
      $title.addClass('animate');
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
        var left = orgLeft + 16 * (1 - rate);
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
  $('a[href^="#"]:not([href$="#"],.item)').click(function(event) {
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

  // recent posts
  /** @type {NodeListOf<HTMLAnchorElement>} */
  (document.querySelectorAll('[data-js="recentPostList"] a')).forEach((elLink) => {
    const url = elLink.href;
    const elCount = createHatebuCounterElement(url);
    elCount.onload = () => {
      // no entries yet
      if (elCount.naturalWidth === 1) {
        return;
      }

      elCount.width = elCount.naturalWidth;
      elCount.height = elCount.naturalHeight;

      const hatebuUrl = `https://b.hatena.ne.jp/entry/${url}`;
      const elHatebuLink = document.createElement('a');
      elHatebuLink.href = hatebuUrl;
      elHatebuLink.target = '_blank';

      elHatebuLink.appendChild(elCount);
      elLink.parentElement.appendChild(elHatebuLink);
    };

    /**
     * @param {string} url
     */
    function createHatebuCounterElement(url) {
      const src = `https://b.hatena.ne.jp/entry/image/${url}`;

      const el = document.createElement('img');
      el.src = src;
      el.width = 1;
      el.height = 1;
      el.alt = "";
      el.className = "hatebuCount"

      return el;
    }
  });

  // external luxury scripts
  $('body').one('pointermove pointerdown', () => {
    setTimeout(() => {
      setUpAddThis();

      loadScript('https://s7.addthis.com/js/300/addthis_widget.js#pubid=ginpei');
    }, 1000);

    function setUpAddThis() {
      document.querySelectorAll('[data-js="addthis"]').forEach((elContainer) => {
        const serviceNames = [
          "addthis_button_facebook",
          "addthis_button_twitter",
          "addthis_button_hatena",
          "addthis_button_compact",
        ];
        serviceNames.forEach((serviceName) => {
          const el = document.createElement('a');
          el.className = serviceName;
          elContainer.appendChild(el);
        });
      });
    }

    function loadScript(url) {
      const el = document.createElement('script');
      el.src = url;
      document.head.appendChild(el);
    }
  });
}(jQuery);
