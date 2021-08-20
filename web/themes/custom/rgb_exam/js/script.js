var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
  var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("navbar-unit").style.top = "0px";
  } else {
    document.getElementById("navbar-unit").style.top = "-700px";
  }
  prevScrollpos = currentScrollPos;
}
