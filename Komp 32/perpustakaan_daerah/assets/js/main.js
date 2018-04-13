function vidOpen(){
		vidSidebar.classList.add('active');
		const video = vidSidebar.querySelector('.video-container video');
		video.setAttribute('autoplay', true);
	}
	function vidClose(){
		vidSidebar.classList.remove('active');
		const video = vidSidebar.querySelector('.video-container video');
		video.setAttribute('autoplay', false);
	}

	function sideNavOpen(){
		regClose();
		loginClose();
		overlayOpen();
		sideNav.classList.add('active');
	}
	function sideNavClose(){
		overlayClose();
		sideNav.classList.remove('active');
	}
	function loginOpen(){
		regClose();
		sideNavClose();
		overlayOpen();
		loginSidebar.classList.add('active');
	}
	function loginClose(){
		overlayClose();
		loginSidebar.classList.remove('active');
	}
	function regOpen(){
		loginClose();
		sideNavClose();
		overlayOpen();
		regSidebar.classList.add('active');
	}
	function regClose(){
		overlayClose();
		regSidebar.classList.remove('active');
	}
	function overlayOpen(){
		overlay.classList.add('active');
	}
	function overlayClose(){
		overlay.classList.remove('active');
	}