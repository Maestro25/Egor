const navSlide = () => {
	const burger = document.querySelector('.burger');
	const nav = document.querySelector('.nav-list');
	const navLinks = document.querySelectorAll('.nav-link');

	burger.addEventListener('click', () => {
		nav.classList.toggle('nav-active');

		/* navLinks.forEach((link, index) => {
		 	link.style.animation = `navLinkFade 0s ease forwards ${index/7}s`;
		 }); */

		burger.classList.toggle('open');
	});


}


navSlide();