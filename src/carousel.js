//carousel

var maskCarouselImages;
var garterCarouselImages;
var purseCarouselImages;
var hairbandCarouselImages;

var modalImageSet;

var modal = document.getElementById("main-page-modal");
var modalImg = document.getElementById("modal-img");

var img1 = document.getElementById("carousel-img-1");
var img2 = document.getElementById("carousel-img-2");
var img3 = document.getElementById("carousel-img-3");
var img4 = document.getElementById("carousel-img-4");
var img5 = document.getElementById("carousel-img-5");

let images = [img1, img2, img3, img4, img5];


function fillCarouselArrays(){
  //console.log("in fillCarouselArrays");
  maskCarouselImages = fillImageArray("mask-carousel-img");
  garterCarouselImages = fillImageArray("garter-carousel-img");
  purseCarouselImages = fillImageArray("purse-carousel-img");
  hairbandCarouselImages = fillImageArray("hairband-carousel-img");
  //prepareClose();
}


function fillImageArray(targetClass){

  //console.log("in fillImageArray");
  //console.log("Target class: " + targetClass);

  var carouselArray = document.getElementsByClassName(targetClass);
  var resultArray = [];

  //console.log("carouselArray: " + carouselArray);

  for(var i=0; i<carouselArray.length; i++) {
      resultArray.push(carouselArray[i]);
  }

  //console.log("resultArray: " + resultArray);

  let newArray = removeDuplicates(resultArray);

  //console.log("newArray: " + newArray);
  return newArray;
}


function removeDuplicates(array) {
  let x = {};

  array.forEach(function(i) {
    if(!x[i.src]) {
      x[i.src] = true
    }
  })

  var result = [];
  keys = Object.keys(x).slice();

  array.forEach(function(i) {
    if(keys.includes(i.src)){
      result.push(i);
      keys.splice(keys.indexOf(i.src), 1);
    }
  })

  return result;
}





//modal for carousel
var curImageIndex = 0;

//function prepareClose(){
  // Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal

if(typeof(span) != 'undefined' && span != null){
  span.onclick = function() {
    modal.style.display = "none";
  }
}
//}

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
  }

  var img = document.getElementById(clickedImage);
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
  }

  var arrayLength = imgArray.length;
  curImageIndex = ((curImageIndex - 1) + arrayLength) % arrayLength;
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
  }

  var arrayLength = imgArray.length;
  curImageIndex = ((curImageIndex + 1) + arrayLength) % arrayLength;
  modalImg.src = imgArray[curImageIndex].src;
}
