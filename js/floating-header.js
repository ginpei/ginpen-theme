// @ts-check

export function startHeaderFloating() {
  const elTitle = $ref("navbarSiteTitle");

  window.addEventListener("scroll", onScroll);

  function onScroll() {
    const threshold = 100;

    const top = document.scrollingElement?.scrollTop ?? 0;
    elTitle.toggleAttribute("data-hidden", top < 100);
  }
}

/**
 * @param {string} id
 */
function $ref(id) {
  const el = document.querySelector(`[data-ref="${id}"]`);
  if (!el) {
    throw new Error(`Element referred as "${id}" is not found`);
  }

  return el;
}
