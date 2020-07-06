window.onload = function() {
  toggle();

  if(document.URL.endsWith("hairbandsandsewon/")){
    fillCarouselArrays();
  }
  //checkScroll("body-content-id");
  checkPageFooter();
}

window.onresize = function() {
  toggle();
  checkPageFooter();
}


// hide or display the mobile menu

/* let's consider we want to toggle the menu displayed at 800 screen width, here's what we need to do (you can accordingly replace 800 with to a screen width you would need)..*/
function toggle() {
    if ( jQuery( window ).width() >= 800 ) {
      jQuery( '.nav.mobile-menu' ).hide();
      jQuery( '.nav.desktop-menu' ).show();
    } else {
      jQuery( '.nav.desktop-menu' ).hide();
      jQuery( '.nav.mobile-menu' ).show();
    }
}



//position footer
function checkPageFooter(){
  if (document.URL.includes("/cart/") || document.URL.includes("/contact/")) {
    var space = document.getElementById("foot-spacer");
    //foot.style.position = "absolute";
    //foot.style.bottom = 0;
    space.style.height = "500px";
  }
}
