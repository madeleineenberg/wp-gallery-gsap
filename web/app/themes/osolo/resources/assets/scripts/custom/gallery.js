import { TweenMax } from 'gsap/gsap-core';
import gsap from 'gsap';
import ScrollTrigger from 'gsap/ScrollTrigger';
gsap.registerPlugin(ScrollTrigger);

export default function () {
  gsap.config({
    nullTargetWarn: false,
  });
  let $images;
  let $container = $('.gallery-container');
  let $count = 0;

  if ($(document).width() > 768) {
    setTimeout(function () {
      const $id = $('.gallery-title').data('id');
      let data = {
        id: $id,
      };

      $.ajax({
        url: '/wp-json/portfolio/gallery',
        data,
        beforeSend: () => {
          console.log('before send:' + data.id);
        },
        success: (response) => {
          if (response) {
            setImages(response.images);
          }
        },
      });
    }, 100);

    function setImages(images) {
      $images = images;
      detectScroll();
    }

    function detectScroll(e) {
      $(document).off('mousewheel DOMMouseScroll');
      setTimeout(function () {
        $(document).on('mousewheel DOMMouseScroll', function (e) {
          if (e.originalEvent.wheelDelta > 0) {
            insertImage($images, $container);
            $count++;

            if ($count === $images.length) {
              $count = 0;
            }

            $(document).off('mousewheel DOMMouseScroll', detectScroll);
          }
        });
      }, 100);
    }

    function insertImage(array, container) {
      let image = $('<img/>');
      image.attr('class', 'image');
      image.attr('src', array[$count]);

      let randomNumberWidth = Math.floor(Math.random() * 30) + 40;
      let randomNumberHeight = Math.floor(Math.random() * 30) + 40;
      let randomNumberTop = Math.floor(Math.random() * 50) + -5;
      let randomNumberLeft = Math.floor(Math.random() * 70) + -5;

      image.css({
        top: randomNumberTop + '%',
        left: randomNumberLeft + '%',
        maxWidth: randomNumberWidth + '%',
        maxHeight: randomNumberHeight + '%',
      });
      image.appendTo(container);
      TweenMax.to($('.image'), 10, {
        css: { scaleX: 1.1, scaleY: 1.1 },
      });
      checkImage();
    }

    function checkImage() {
      // check if imagearray is more than 10, then start remove frist image
      let images = $('.image');
      let imageRemove = 0;

      if (images.length > 4) {
        images[imageRemove].remove();
        imageRemove++;
      }
    }

    function wrap(mouseX, mouseY) {
      let images = $('.image').toArray();
      let countImage = 0;

      images.forEach(function (e, index, array) {
        TweenMax.to(array[array.length - (1 + countImage)], 0.3, {
          width: 0,
          top: mouseY,
          left: mouseX,
          delay: countImage / 40,
        });
        setTimeout(function () {
          deleteAllImage(array);
        }, 3000);
        countImage++;
      });
    }

    function deleteAllImage(array) {
      array.forEach(function (e) {
        e.remove();
      });
      countImage++;
    }

    $(document).on('mousedown', function (e) {
      let mouseX = e.pageX;
      let mouseY = e.pageY;
      wrap(mouseX, mouseY);
    });
  }

  // mobile image animation
  const images = gsap.utils.toArray('.img-responsive');

  images.forEach((image, i) => {
    const anim = gsap.fromTo(
      image,
      { autoAlpha: 0, y: 100 },
      { duration: 4, autoAlpha: 1, y: 0 },
    );
    ScrollTrigger.create({
      trigger: image,
      animation: anim,
      toggleActions: 'play none none none',
      once: true,
    });
  });
}
