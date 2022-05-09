import LocomotiveScroll from 'locomotive-scroll';
export default function () {
  if (!$('body').hasClass('home') && !$('body').hasClass('single-galleri')) {
    const scroll = new LocomotiveScroll({
      el: document.querySelector('[data-scroll-container]'),
      smooth: true,
      smoothClass: 'has-scroll-smooth',
    });
  }
}
