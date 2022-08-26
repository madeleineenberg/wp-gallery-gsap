export default function () {
  setTimeout(function () {
    $.ajax({
      url: '/wp-json/portfolio/submissions',
      success: (response) => {
        if (response) {
          console.log(response);
          $('.c-note-board__grid').append(response.html);
          $('.c-note-board__grid').addClass('notes-ready');

          let divs = $('.c-note-board__grid-item');

          $(divs).each(function (index, elem) {
            if (index % 2 === 0) {
              $(elem).after(
                '<div class="c-note-board__grid-item empty-note"></div>',
              );
            }
            if (index % 3 === 0) {
              $(elem).after(
                '<div class="c-note-board__grid-item empty-note-color" data-scroll data-scroll-speed="-2"><div class="container"></div><div class="eye-box"><div class="eye"></div><div class="eye"></div></div></div>',
              );
            }
          });
        }
      },
    });
  }, 100);

  $(document).on('mousemove', function (event) {
    var eye = $('.eye');
    console.log('hej');
    console.log('eye', eye);
    var x = eye.offset().left + eye.width() / 2;
    var y = eye.offset().top + eye.height() / 2;
    var rad = Math.atan2(event.pageX - x, event.pageY - y);
    var rot = rad * (180 / Math.PI) * -4 + 180;
    eye.css({
      '-webkit-transform': 'rotate(' + rot + 'deg)',
      '-moz-transform': 'rotate(' + rot + 'deg)',
      '-ms-transform': 'rotate(' + rot + 'deg)',
      transform: 'rotate(' + rot + 'deg)',
    });
  });
}
