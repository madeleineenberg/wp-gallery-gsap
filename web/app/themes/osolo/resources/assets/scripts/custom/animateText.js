import gsap from 'gsap';
import SplitType from 'split-type';
import ScrollTrigger from 'gsap/ScrollTrigger';
gsap.registerPlugin(ScrollTrigger);

export default function () {
  let titleSplit = new SplitType('h1', {
    types: 'lines',
    lineClass: 'split-child',
  });

  gsap.from(titleSplit.lines, {
    duration: 1.5,
    yPercent: 100,
    ease: 'power4.out',
    stagger: 0.1,
  });

  const links = gsap.utils.toArray(
    '.navigation-item, .c-image-reveal__mobile__list-item',
  );

  links.forEach((link, i) => {
    const anim = gsap.fromTo(
      link,
      { autoAlpha: 0, y: 100 },
      { duration: 1, autoAlpha: 1, y: 0 },
    );
    ScrollTrigger.create({
      trigger: link,
      animation: anim,
      toggleActions: 'play none none none',
      once: true,
    });
  });

  let subtitleSplit = new SplitType('h2', {
    types: 'lines, words',
    lineClass: 'subtitle_line',
  });
}
