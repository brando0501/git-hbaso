
var maskCarouselImages;
var garterCarouselImages;
var purseCarouselImages;
var hairbandCarouselImages;

var modalImageSet;


function getHello(){
  return "hello from getHello in app";
}




function returnHello(){
  //return "hello";
  //return getHello();
}

function sayHelloWorld() {
    var hello = "hello";
    var world = "world";

    //alert(hello+world);
    console.log("This is a test log");
    //alert(oauth);
}

window.onload = function() {
  //alert("Hello! I am an alert box!");
  //drawCanvas();

  var vw = jQuery( window ).width();
  //console.log("vw: " + vw);


  if(vw > 1030){
    //setHeightFromTop("mask-strip-video", "mask-strip-text", 0, true);
  }

  /*setHeightFromTop("garter-slides", "garter-carousel-img-1", 0, true);
  setHeightFromTop("garter-carousel-img-3", "garter-carousel-img-1", 0, true);*/


/*  matchWidth("garter-slide-tall", "garter-carousel-img-3", 0);

  setHeightFromTop("purse-slides", "purse-carousel-img-2", 0, true);*/

  //document.getElementById("purse-slides").style.height = height.toString()+"px";

/*  setHeightFromTop("purse-slides", "purse-carousel-img-2", 0, true);
  setHeightFromTop("purse-carousel-img-1", "purse-carousel-img-2", 0, true);
  setHeightFromTop("purse-carousel-img-4", "purse-carousel-img-2", 0, true);
  setHeightFromTop("purse-carousel-img-6", "purse-carousel-img-2", 0, true);
  setHeightFromTop("purse-carousel-img-8", "purse-carousel-img-2", 0, true);

  matchWidth("purse-carousel-img-4-div", "purse-carousel-img-4", 0);*/


/*  matchWidth("purse-carousel-img-1-div", "purse-carousel-img-1", 0);
  matchWidth("purse-carousel-img-4-div", "purse-carousel-img-4", 0);
  matchWidth("purse-carousel-img-6-div", "purse-carousel-img-6", 0);
  matchWidth("purse-carousel-img-8-div", "purse-carousel-img-8", 0);*/


  maskCarouselImages = fillImageArray("mask-carousel-img")
  garterCarouselImages = fillImageArray("garter-carousel-img");
  purseCarouselImages = fillImageArray("purse-carousel-img");
  hairbandCarouselImages = fillImageArray("hairband-carousel-img")


/*  purseCarouselImages.forEach((item, i) => {
    console.log("purseCarouselImages");
    console.log(i + ": " + item.height);
    item.style.height = document.getElementById("purse-slides").style.height;
    console.log(i + ": " + item.style.height);
  });*/



}

window.onresize = function() {
  //console.log("in onresize");

  var vw = jQuery( window ).width();
  //console.log("vw: " + vw);

  if(vw > 764){
    //setHeightFromBounds("full-strip-grid", "why-boozebong-group", "light-up-button-div", 150);
    //setHeightFromTop("fire-script-ID", "full-strip-grid", 0, true);
  }else{
    //setHeightFromBounds("full-strip-grid", "why-boozebong-group", "light-up-button-div", 80);
    //setHeightFromTop("fire-script-ID", "full-strip-grid", 0, true);
  }

  if(vw > 1030){
    //setHeightFromTop("mask-strip-video", "mask-strip-text", 0, true);
  }

/*  setHeightFromTop("garter-carousel-img-3", "garter-carousel-img-1", 0, true);
  setHeightFromTop("garter-slides", "garter-carousel-img-1", 0, true);

  matchWidth("garter-slide-tall", "garter-carousel-img-3", 0);*/

  //u_0_2 is the video
  //setHeightFromTop("mask-strip", "u_0_2", -300, true);
  //setHeightFromTop("fire-script-ID", "full-strip-grid", 0, true);

    //setHeightFromTop("mask-strip-img", "mask-strip", -48, true);




/*
  var c = document.getElementById("front-page-canvas");
  var ctx = c.getContext("2d");
  ctx.strokeStyle = generateRandomColor();
  ctx.beginPath();

  ctx.rect(20, 20, 100, 100);
  ctx.rect(40, 40, 100, 100);
  ctx.font = "30px Arial";
  ctx.fillText("Hello World", 10, 50);
  ctx.stroke();*/

}


function setHeightFromBounds(selection, top, bottom, bottomOffset){
  //console.log("in setHeightFromBounds");
  var topBound = document.getElementById(top).getBoundingClientRect();
  var bottomBound = document.getElementById(bottom).getBoundingClientRect();

  var topY = topBound.bottom;
  var bottomY = bottomBound.top;
  var height = (bottomY - topY)+bottomOffset;

  document.getElementById(selection).style.height = height.toString()+"px";

}

function setHeightFromTop(selection, bottom, bottomOffset, isOverlayed){
  console.log("in setHeightFromTop");
  console.log(selection);
  var topBound = document.getElementById(selection).getBoundingClientRect();
  var bottomBound = document.getElementById(bottom).getBoundingClientRect();

  var topY = topBound.top;

  var bottomY;

  //meant to switch between bottom.bottom and bottom.top
  if (isOverlayed){
    bottomY = bottomBound.bottom;
  }else{
    bottomY = bottomBound.top;
  }


  var height = (bottomY - topY)+bottomOffset;

  console.log(height);
  document.getElementById(selection).style.height = height.toString()+"px";

}

function matchWidth(selection, target, offset){
  console.log("in matchWidth");
  console.log(selection);
  var sel = document.getElementById(selection).getBoundingClientRect();
  var tar = document.getElementById(target).getBoundingClientRect();

  var tLeft = tar.left;
  var tRight = tar.right;

  var tWidth = tRight - tLeft;

  document.getElementById(selection).style.width = tWidth.toString()+"px";

}

function generateRandomColor()
{
    var randomColor = '#'+Math.floor(Math.random()*16777215).toString(16);
    return randomColor;
    //random color will be freshly served
}


function getCardData(){


  //console.log(sqrt(-4).toString()) // 2i

console.log("in get getCardData");


}

function dataToCards(){

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




//carousel

var modal = document.getElementById("main-page-modal");
var modalImg = document.getElementById("modal-img");

var img1 = document.getElementById("carousel-img-1");
var img2 = document.getElementById("carousel-img-2");
var img3 = document.getElementById("carousel-img-3");
var img4 = document.getElementById("carousel-img-4");
var img5 = document.getElementById("carousel-img-5");

let images = [img1, img2, img3, img4, img5];





function fillImageArray(targetClass){
  //var carouselArray = document.getElementsByClassName(targetClass);
  var carouselArray = document.getElementsByClassName(targetClass);
  var resultArray = [];
  console.log("from document");
  console.log(carouselArray);

  for(var i=0; i<carouselArray.length; i++) {
    console.log("in array");
    console.log(carouselArray[i].src);
      resultArray.push(carouselArray[i]);
  }

  console.log("created array");
  console.log(resultArray);

  //resultArray = removeDuplicates(resultArray);

  let newArray = removeDuplicates(resultArray);

  console.log("new array");
  console.log(newArray);

  return newArray;

}


/*function removeDuplicates(array) {
  array.forEach((item, i) => {
    array.forEach((check, j) => {
      if (true) {

      }
    });
  });

}*/

/*function noDuplicateSources(item){

  if (onlyOnce(item)) {
    return true;
  }

  return false;

}

function onlyOnce(item){

}*/



function removeDuplicates(array) {
  let x = {};
  array.forEach(function(i) {
    console.log("for each " + i);
    console.log(i.src);
    if(!x[i.src]) {
      x[i.src] = true
    }
  })

  var result = [];

  keys = Object.keys(x).slice();

  array.forEach(function(i) {

    if(keys.includes(i.src)){

      console.log("Match");
      console.log(keys.indexOf(i.src));


      result.push(i);
      keys.splice(keys.indexOf(i.src), 1);


    }
  })

  return result;

};






var curImageIndex = 0;


// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

function carouselClick(clickedImage, carouselID){

  var imgArray;

  switch(carouselID) {
    case "mask-carousel":
      imgArray = maskCarouselImages;
      modalImageSet = maskCarouselImages;
      break;
    case "garter-carousel":
      imgArray = garterCarouselImages;
      modalImageSet = garterCarouselImages;
      break;
    case "purse-carousel":
      imgArray = purseCarouselImages;
      modalImageSet = purseCarouselImages;
      break;
    case "hairband-carousel":
      imgArray = hairbandCarouselImages;
      modalImageSet = hairbandCarouselImages;
      break;
    default:
      imgArray = [];
      // code block
  }

  //console.log(clickedImage);
  var img = document.getElementById(clickedImage);
  console.log(img);
  modal.style.display = "block";
  modalImg.src = img.src;

  for (i = 0; i < imgArray.length; i++) {
    if (imgArray[i] == img) {
      curImageIndex = i;
    }
  }

}

function prevClicked(carouselID){



  var imgArray;

  switch(carouselID) {
    case "mask-carousel":
      imgArray = maskCarouselImages;
      break;
    case "garter-carousel":
      imgArray = garterCarouselImages;
      break;
    case "purse-carousel":
      imgArray = purseCarouselImages;
      break;
    case "hairband-carousel":
      imgArray = hairbandCarouselImages;
      break;
    default:
      imgArray = modalImageSet;
      // code block
  }

  var arrayLength = imgArray.length;


  //console.log("previous");
  curImageIndex = ((curImageIndex - 1) + arrayLength) % arrayLength;
  //console.log(curImageIndex);
  //console.log(carouselID);
  //console.log(imgArray);
  modalImg.src = imgArray[curImageIndex].src;

}

function nextClicked(carouselID){



  var imgArray;

  switch(carouselID) {
    case "mask-carousel":
      imgArray = maskCarouselImages;
      break;
    case "garter-carousel":
      imgArray = garterCarouselImages;
      break;
    case "purse-carousel":
      imgArray = purseCarouselImages;
      break;
    case "hairband-carousel":
      imgArray = hairbandCarouselImages;
      break;
    default:
      imgArray = modalImageSet;
      // code block
  }

  var arrayLength = imgArray.length;


  //console.log("next");
  curImageIndex = ((curImageIndex + 1) + arrayLength) % arrayLength;
  //console.log(carouselID);
  //console.log(curImageIndex);
  modalImg.src = imgArray[curImageIndex].src;

}




//hairbandsandsewon

function divLink(link){
  var baseURL= "localhost/hairbandsandsewon/";
  console.log(link);
  window.open("shop");
}
