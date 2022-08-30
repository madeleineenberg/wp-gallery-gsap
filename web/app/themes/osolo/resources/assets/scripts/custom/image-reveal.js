export default function () {
  if ($(document).width() > 768) {
    const link = document.querySelectorAll('.c-image-reveal__link');
    const linkHoverReveal = document.querySelectorAll('.hover-reveal');
    const linkImages = document.querySelectorAll('.hidden-img');

    for (let i = 0; i < link.length; i++) {
      link[i].addEventListener('mousemove', (e) => {
        linkHoverReveal[i].style.opacity = 1;
        linkHoverReveal[
          i
        ].style.transform = `translate(-20%, -50% ) rotate(5deg)`;
        linkImages[i].style.transform = 'scale(1, 1)';
        linkHoverReveal[i].style.left = e.clientX + 'px';
      });

      link[i].addEventListener('mouseleave', (e) => {
        linkHoverReveal[i].style.opacity = 0;
        linkHoverReveal[
          i
        ].style.transform = `translate(-50%, -50%) rotate(-5deg)`;
        linkImages[i].style.transform = 'scale(0.8, 0.8)';
      });
    }
  }
}
