// Sets the width and height of the navbar-toggle button equal to the height of the branding
let px = $("#nav > a.navbar-brand").outerHeight();
$("#nav > div.navbar-sm > button.navbar-toggler").css({
  width: px,
  height: px,
  flexBasis: px,
});

// Sets the padding for the "fp-jumbo" div based on the header and donate bar heights
function jumboPadding() {
  $("#main > div.fp-jumbo").css({
    paddingTop: $("#header > #top-alert").outerHeight(),
    paddingBottom: !isMobile() ? $("#main div.donate-bar").outerHeight() : 0,
  });
}
$(window).ready(jumboPadding);
$(window).resize(jumboPadding);
