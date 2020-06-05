const navWrapperSel = "#nav > div.navbar-nav-wrapper";

// Toggles the "collapsed" class from the navbar-nav-wrapper div depending on the window's width
function detectMobile() {
  isMobile()
    ? $(navWrapperSel).addClass("collapsed")
    : $(navWrapperSel).removeClass("collapsed");
}
$(window).ready(detectMobile);
$(window).resize(detectMobile);

// Show or hide the navbar-nav-wrapper div
function toggleNav() {
  if (isMobile()) {
    $(navWrapperSel).hasClass("collapsed")
      ? $(navWrapperSel).removeClass("collapsed") // Show
      : $(navWrapperSel).addClass("collapsed"); // Hide
  }
}
