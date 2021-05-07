
function Carousel() {
  var myCarousel = document.querySelector('#Carousel');
  var carousel = new bootstrap.Carousel(myCarousel, {
    interval: 3000,
    wrap: false
});
console.log(carousel)
}
window.onload = Carousel;