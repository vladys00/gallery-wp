jQuery(document).ready(function($) {
  $('.main-carousel').flickity({
    wrapAround: true,
    autoPlay: 3000,
    imagesLoaded: true,
    cellAlign: 'left',
    contain: true
  });
});