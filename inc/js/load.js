// Sets the padding for the "fp-jumbo" div based on the header and donate bar heights
function jumboPadding() {
  $("#main > div.fp-jumbo").css({
    paddingTop: $("#header > #top-alert").outerHeight(),
    paddingBottom: !isMobile() ? $("#main div.donate-bar").outerHeight() : 0,
  });
}
$(window).ready(jumboPadding);
$(window).resize(jumboPadding);
