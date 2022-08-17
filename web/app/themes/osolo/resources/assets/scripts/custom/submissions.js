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
                '<div class="c-note-board__grid-item empty-note-color" data-scroll data-scroll-speed="2"></div>',
              );
            }
          });
        }
      },
    });
  }, 100);
}
