// Menu shrinks on Scroll
var docElement = document.documentElement,
	navbar = document.querySelector('nav'),
	didScroll = false,
	changeNavbarOn = 100;

function init() {
	window.addEventListener('scroll', function(e) {
		if (!didScroll) {
			didScroll = true;
			setTimeout(scrollPage, 250);
		}
	}, false);
}

function scrollPage() {
	var yaxis = window.pageYOffset || docElement.scrollTop;
	if (yaxis >= changeNavbarOn) {
		navbar.classList.add('shrink');
	} else {
		navbar.classList.remove('shrink');
	}
	didScroll = false;
}

function scrollY() {
	return window.pageYOffset || docElement.scrollTop;
}

init();


// Hamburger Menu
var menu = document.querySelector('.menu-icon');

menu.addEventListener('click', function(){
    var nav = document.querySelector('.hamburger .nav');
    nav.classList.toggle("active");
});
