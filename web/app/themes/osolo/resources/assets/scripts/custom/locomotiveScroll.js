import LocomotiveScroll from 'locomotive-scroll';
import imagesLoaded from 'imagesloaded';

export default function () {
  if (!$('body').hasClass('home') && !$('body').hasClass('single-galleri')) {
    let scrollContainer = document.querySelector('[data-scroll-container]');

    const scroll = new LocomotiveScroll({
      el: scrollContainer,
      smooth: true,
      smoothClass: 'has-scroll-smooth',
    });

    //update scroll when images are loaded

    imagesLoaded(scrollContainer, { background: '.item' }, function () {
      scroll.update();
    });

    //update locomotive scroll if height is changed

    const containerId = document.querySelector('[data-scroll-container]');
    let MutationObserver =
      window.MutationObserver ||
      window.webkitMutationObserver ||
      window.MozMutationObserver;

    let recordHeight = 0;
    const mutationObserver = new MutationObserver(function (mutations) {
      let height = window
        .getComputedStyle(containerId)
        .getPropertyValue('height');
      if (height === recordHeight) {
        return;
      }
      recordHeight = height;

      console.log(' Height is Change');

      scroll.update();
    });

    mutationObserver.observe(containerId, {
      childList: true,
      attributes: true,
      characterData: true,
      subtree: true,
    });
  }
}
