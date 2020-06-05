function getVar(key) {
  return getComputedStyle(document.documentElement).getPropertyValue(
    "--" + key
  );
}

function isMobile() {
  let w = $(window).width();
  return w < parseInt(getVar("breakpoint-md"));
}
