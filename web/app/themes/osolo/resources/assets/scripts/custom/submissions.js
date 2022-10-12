export default function () {
  getNotes();

  function getNotes() {
    setTimeout(function () {
      $.ajax({
        url: '/wp-json/portfolio/submissions',
        success: (response) => {
          if (response) {
            $('.c-note-board__grid').append(response.html);
            $('.c-note-board__grid').addClass('notes-ready');

            let divs = $('.c-note-board__grid-item');

            $(divs).each(function (index, elem) {
              if (index % 2 === 0) {
                $(elem).after(
                  '<div class="c-note-board__grid-item empty-note"></div>',
                );
              }
              if (index % 6 === 0) {
                $(elem).after(
                  '<div class="c-note-board__grid-item empty-note-color" data-scroll data-scroll-speed="-2"><div class="ghost"><div class="container"></div><div class="eye-box"><div class="eye"></div><div class="eye"></div></div></div></div>',
                );
              }
            });
            ghostEyes();
          }
        },
      });
    }, 100);
  }

  function ghostEyes() {
    $(document).on('mousemove', function (event) {
      let eye = $('.eye');

      if (eye.length > 0) {
        let x = eye.offset().left + eye.width() / 2;
        let y = eye.offset().top + eye.height() / 2;
        let rad = Math.atan2(event.pageX - x, event.pageY - y);
        let rot = rad * (180 / Math.PI) * -4 + 180;
        eye.css({
          '-webkit-transform': 'rotate(' + rot + 'deg)',
          '-moz-transform': 'rotate(' + rot + 'deg)',
          '-ms-transform': 'rotate(' + rot + 'deg)',
          transform: 'rotate(' + rot + 'deg)',
        });
      }
    });
  }
  //Setup our on formSumbit Listener.
  $(document).on('nfFormSubmitResponse', function () {
    $('.c-note-board__grid-item').remove();
    getNotes();
  });
}
