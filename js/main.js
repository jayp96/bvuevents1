/* Plugin js */
$(document).ready(function() {
 
  $("#images").owlCarousel({
 
      autoPlay: 3000,
      stopOnHover: true,
      slideSpeed : 2000,
      paginationSpeed : 1800,
      singleItem:true
 
      // "singleItem:true" is a shortcut for:
      // items : 1, 
      // itemsDesktop : false,
      // itemsDesktopSmall : false,
      // itemsTablet: false,
      // itemsMobile : false
 
  });

  //comments
 var owl = $("#comments");
 
  owl.owlCarousel({
  	autoPlay: 3000,
      stopOnHover: true,
      items : 3, //10 items above 1000px browser width
      itemsDesktop : [1000,2], //5 items between 1000px and 901px
      itemsDesktopSmall : [900,1], // betweem 900px and 601px
      itemsTablet: [600,1], //2 items between 600 and 0
      itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option
  });
 
  
});


