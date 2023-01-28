$('[href^="#"]').on("click", function () {
  let href = $(this).attr("href"),
    elem = $(document).find(href);
  if (elem.length > 0) {
    let posY = elem.eq(0).offset().top;
    $("html, body").animate(
      {
        scrollTop: posY,
      },
      1000
    );
  }
  return false;
});

$(".center").slick({
  dots: true,
  arrows: false,
  centerMode: true,
  centerPadding: "50px",
  slidesToShow: 2,
  responsive: [
    {
      breakpoint: 768,
      settings: {
        dots: true,
        arrows: false,
        centerMode: true,
        centerPadding: "40px",
        slidesToShow: 2,
      },
    },
    {
      breakpoint: 480,
      settings: {
        dots: true,
        arrows: false,
        centerMode: true,
        centerPadding: "30px",
        slidesToShow: 1,
      },
    },
  ],
});







