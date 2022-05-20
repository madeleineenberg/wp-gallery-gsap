export default function () {
  $('.c-social-links__link').on('mouseover', function (e) {
    $('.c-social-links__box')
      .find('ion-icon')
      .attr('name', $(e.target).data('icon'));
  });

  $('.c-social-links__link').on('mouseleave', function () {
    $('.c-social-links__box')
      .find('ion-icon')
      .attr('name', $('.c-social-links__box').data('icon'));
  });
}
