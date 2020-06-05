// Sets the width and height of the navbar-toggle button equal to the height of the branding
$("#nav > div.navbar-sm > button.navbar-toggler").css({
  width: $("#nav > a.navbar-brand").outerHeight(),
  height: $("#nav > a.navbar-brand").outerHeight(),
  flexBasis: $("#nav > a.navbar-brand").outerHeight(),
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
