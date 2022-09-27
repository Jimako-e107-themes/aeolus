(function () {

    /*=====================================
    Sticky
    ======================================= */
    window.onscroll = function () {
        var header_navbar = document.querySelector(".navbar-area");

        if (header_navbar) {
            var sticky = header_navbar.offsetTop;

            if (window.pageYOffset > sticky) {
                header_navbar.classList.add("sticky");
            } else {
                header_navbar.classList.remove("sticky");
            }
        }
    };

    "use strict";

})();
