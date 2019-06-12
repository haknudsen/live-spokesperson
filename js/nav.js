// JavaScript Document
$(document).ready(function () {
	var title = $(document).find("title").text();
	if (title.indexOf("About") > -1) {
		$('#about').addClass("active");
	} else if (title.indexOf("Styles") > -1) {
		$('#styles').addClass("active");
	} else if (title.indexOf("Spokespeople") > -1) {
		$('#spokespeople').addClass("active");
	} else {
		$('#home').addClass("active");
	}
	var $scrollNav = $('nav.navbar');
	$(window).scroll(function () {
		if ($(this).scrollTop() > 180) {
			$scrollNav.addClass('bg-gradient-light');
			$scrollNav.removeClass('bg-gradient-dark');
			$scrollNav.removeClass('navbar-dark');
			$scrollNav.addClass('navbar-light');
		} else {
			$scrollNav.removeClass('bg-gradient-light');
			$scrollNav.addClass('bg-gradient-dark');
			$scrollNav.removeClass('navbar-light');
			$scrollNav.addClass('navbar-dark');
		}
	})
})
