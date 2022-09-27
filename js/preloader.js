(function () {

	"use strict";

	//===== Prealoder

	window.onload = function () {
		window.setTimeout(fadeout, 200);
	}

	function fadeout() {
        var preloader = document.querySelector(".preloader");
        if (preloader) {
            preloader.style.opacity = '0';
            preloader.style.display = 'none';
        }
	}
})();