(function($) { // Begin jQuery
  $(function() { // DOM ready
    // If a link has a dropdown, add sub menu toggle.
    $('nav ul li a:not(:only-child)').click(function(e) {
      $(this).siblings('.sub-menu').toggle();
      
      // Close one dropdown when selecting another
      $('.sub-menu').not($(this).siblings()).hide();
      e.stopPropagation();
    });
    
    // Clicking away from dropdown will remove the dropdown class
    $('html').click(function() {
      $('.sub-menu').hide();
    });
    
    // Toggle open and close nav styles on click
    $('#nav-toggle').click(function() {
      $('nav ul').slideToggle();
    });
    
    // Hamburger to X toggle
    $('#nav-toggle').on('click', function() {
      this.classList.toggle('active');
    });
    
    // Removes inline style on main nav to make menu reappear on window resize
    $(window).resize(function(){
    if ($(window).width() >= 768) {  //This breakpoint MUST match the mobile breakpoint
		$('nav#site-navigation ul').removeAttr('style');
     	}     
	});
  }); // end DOM ready
})(jQuery); // end jQuery