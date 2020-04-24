
  
    //Activate Color white
  
    // Collapse Navbar
    var navbarCollapse = function() {
      
      
     
  
      if  ($("#mainNav").offset().top == 0) {
        $("#mainNav").addClass("navbar-scrolled");
        $("#color-menu").addClass("navbar-toggler-icon-oscuro");
        $("#color-menu").removeClass("navbar-toggler-icon-white");
      }
    };
    // Collapse now if page is not at top
    navbarCollapse();
  