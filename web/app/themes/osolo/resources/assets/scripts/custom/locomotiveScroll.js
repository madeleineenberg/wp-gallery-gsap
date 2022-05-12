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
    imagesLoaded(scrollContainer, { background: '.item' }, function () {
      scroll.update();
    });
  }
}
