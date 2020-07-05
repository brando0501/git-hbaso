window.onload = function() {
  toggle();
  fillCarouselArrays();
  //checkScroll("body-content-id");
  checkPage();
}

window.onresize = function() {
  toggle();
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

// on page load set the menu display initially
toggle();

// toggle the menu display on browser resize
jQuery( window ).resize( function () {
    toggle();
} );


//position footer
function isScrollable(el) {
    console.log("scroll height: " + el.scrollHeight);
    console.log("client height: " + window.innerHeight);

    return el.scrollHeight > window.innerHeight;
}

function checkScroll(id) {
    /*the data is JSON type, convert it to string and then
    check the element with given id for scrollbar*/
    alert(JSON.stringify(isScrollable(document.getElementById(id))));

}

function checkPage(){
  if ( document.URL.includes("/cart/") ) {
    var foot = document.getElementById("footer");
    foot.style.position = "absolute";
    foot.style.bottom = 0;
  }
}


//hairbandsandsewon
function divLink(link){
  //function not finished. needs actual urls
  var baseURL= "localhost/hairbandsandsewon/";
  //console.log(link);
  window.open("shop");
}
