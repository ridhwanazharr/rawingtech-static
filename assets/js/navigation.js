document.addEventListener("DOMContentLoaded", function () {
	const menuBtn = document.querySelector("#nav-btn");
	const menu = document.querySelector("#menu-container");
	const body = document.body;
    var toggleState = false;

	if (menuBtn && menu) {
		const toggleMenu = () => {
			menu.classList.toggle("collapsed");
			body.classList.toggle("on-menu");
            toggleState = !toggleState;

            //Change Icons on Toggle
            if (toggleState) {
                menuBtn.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16"><path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z"/></svg>`;
            } else {
                menuBtn.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/></svg>`;
            }
		};

		menuBtn.addEventListener("click", function (e) {
			e.preventDefault();
			toggleMenu();
		});

		// Close menu when clicking on a menu item link
		const menuLinks = document.querySelectorAll(".nav-link");
		menuLinks.forEach(link => {
			link.addEventListener("click", function () {
                console.log('navlink clicked');
				if (menu.classList.contains("collapsed")) {
					toggleMenu();
				}
			});
		});
	}

    //Add Classes when scrolled down
    window.addEventListener('scroll', function() {
		const header = document.querySelector('header');
		if (window.scrollY > 75) {
			header.classList.add('scrolled');
		} else {
			header.classList.remove('scrolled');
		}
	});
});
