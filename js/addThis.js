const serviceClassNames = [
  "addthis_button_facebook",
  "addthis_button_twitter",
  "addthis_button_hatena",
  "addthis_button_compact",
];

let loaded = false;

export function startAddThis() {
  const elTargets = document.querySelectorAll('[data-ref="addThis"]');
  const onPointerMoveOrDown = () => load(elTargets, serviceClassNames);

  document.body.addEventListener('pointermove', onPointerMoveOrDown);
  document.body.addEventListener('pointerdown', onPointerMoveOrDown);
}

/**
 * @param {NodeListOf<Element>} elTargets
 * @param {string[]} serviceClassNames
 */
function load(elTargets, serviceClassNames) {
  if (loaded) {
    return;
  }
  loaded = true;

  setTimeout(() => {
    elTargets.forEach((elContainer) => {
      prepareElements(elContainer, serviceClassNames);
    });

    loadScript('https://s7.addthis.com/js/300/addthis_widget.js#pubid=ginpei');
  }, 1000);
}

/**
 * @param {Element} elContainer
 * @param {string[]} serviceNames
 */
function prepareElements(elContainer, serviceNames) {
  serviceNames.forEach((serviceName) => {
    const el = document.createElement('a');
    el.className = serviceName;
    elContainer.appendChild(el);
  });
}

/**
 * @param {string} url
 */
function loadScript(url) {
  const el = document.createElement('script');
  el.src = url;
  document.head.appendChild(el);
}
