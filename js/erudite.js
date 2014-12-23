(function ($) {
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
		var $main_navbar = $("#main-navbar");
		var navbar_height = $("#navbar-container-space").height();
		var navbar_location = $("#navbar-container-space").offset().top + navbar_height;
		var navbar_is_fixed = $main_navbar.hasClass("navbar-fixed-top");

		if (scroll > navbar_location && !navbar_is_fixed) {
			$main_navbar.addClass("navbar-fixed-top navbar-hide");
			$main_navbar.removeClass("navbar-embed");
			setTimeout(function(){ $main_navbar.removeClass("navbar-hide"); }, 50);
		}
		else if (scroll < (navbar_location - navbar_height))
		{
			$main_navbar.removeClass("navbar-fixed-top");
			$main_navbar.removeClass("navbar-hide");
			$main_navbar.addClass("navbar-embed");
		}
	}

}(jQuery));