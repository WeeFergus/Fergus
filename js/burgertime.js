(function(jQuery) { // Begin jQuery
  jQuery(function() { // DOM ready
    // If a link has a dropdown, add sub menu toggle.
    jQuery('nav ul li a:not(:only-child)').click(function(e) {
      jQuery(this).siblings('.sub-menu').toggle();
      
      // Close one dropdown when selecting another
      jQuery('.sub-menu').not(jQuery(this).siblings()).hide();
      e.stopPropagation();
    });
    
    // Clicking away from dropdown will remove the dropdown class
    jQuery('html').click(function() {
      jQuery('.sub-menu').hide();
    });
    
    // Toggle open and close nav styles on click
    jQuery('#nav-toggle').click(function() {
      jQuery('nav ul').slideToggle();
    });
    
    // Hamburger to X toggle
    jQuery('#nav-toggle').on('click', function() {
      this.classList.toggle('active');
    });
    
    // Removes inline style on main nav to make menu reappear on window resize
    jQuery(window).resize(function(){
    if (jQuery(window).width() >= 768) {  //This breakpoint MUST match the mobile breakpoint
		jQuery('nav#site-navigation ul').removeAttr('style');
     	}     
	});
  }); // end DOM ready
})(jQuery); // end jQuery