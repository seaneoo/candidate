jQuery(document).ready(($) => {
  let y = window.pageYOffset;
  let nav = $("#top-nav").offset().top;
  if ($("body").hasClass("admin-bar")) nav += 32;

  if (y >= nav && y > 0) $("body").addClass("sticky-nav");
  $(window).scroll(function () {
    y = window.pageYOffset;
    if (y >= nav && y > 0) {
      $("body").addClass("sticky-nav");
    } else {
      $("body").removeClass("sticky-nav");
    }
  });
});
