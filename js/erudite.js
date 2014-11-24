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
		console.log(scroll + "px");
		var $main_navbar = $(".navbar-fixed-top");
		if (scroll > logo_height_offset) {
			$main_navbar.show();
			console.log('show');
		}
		else
		{
			$main_navbar.hide();
			console.log('hide');
		}
	}

}(jQuery));