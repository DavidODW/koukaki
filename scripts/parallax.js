
 // mise en place des parallax du logo et des nuages
 document.addEventListener("DOMContentLoaded", function () {
       // mise en place d'un effet parallax sur le logo
      var image = document.getElementsByClassName("banner__parallax");
      new simpleParallax(image,{
          scale: 2,overflow: true
      });

      // mise en place d'un effet parallax sur les nuages de la section #place limité à 300 px
      var image = document.getElementsByClassName('place_img_big');
      new simpleParallax(image, {
      scale: 8.63,overflow: true,
      orientation: 'right',
      maxTransition: 82
      });

      var image = document.getElementsByClassName('place_img_small');
      new simpleParallax(image, {
      scale: 18.05,overflow: true,
      orientation: 'right',
      maxTransition: 82
      });  
});


