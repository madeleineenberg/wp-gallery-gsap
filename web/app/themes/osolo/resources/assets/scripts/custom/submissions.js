export default function () {
  setTimeout(function () {
    $.ajax({
      url: '/wp-json/portfolio/submissions',
      success: (response) => {
        if (response) {
          console.log(response);
        }
      },
    });
  }, 1000);
}
