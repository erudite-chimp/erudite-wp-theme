(function ($) {
	var logo_height_offset = 480;


	$(function(){
		// Navbar listener to show/hide it when appropriate
		showNavbar();
		$(window).scroll(function (event) {
			showNavbar();
		});
	});

	function showNavbar()
	{
		var scroll = $(window).scrollTop();
		var $main_navbar = $(".navbar-fixed-top");
		if (scroll > logo_height_offset) {
			$main_navbar.removeClass("navbar-hide");
		}
		else
		{
			$main_navbar.addClass("navbar-hide");
		}
	}

}(jQuery));