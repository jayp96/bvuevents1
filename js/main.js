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
 
 $("#comments").owlCarousel({
    autoPlay : 3000,
    stopOnHover : true,
    navigation:true,
    paginationSpeed : 1000,
    goToFirstSpeed : 2000,
    singleItem : true,
    autoHeight : true,
    transitionStyle:"fade"
  });
  
});


