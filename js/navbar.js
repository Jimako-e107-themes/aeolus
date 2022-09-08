if (true) {
    $(document).ready(function () {
        //===== close navbar-collapse when a  clicked
        const navbarTogglerHome = document.querySelector(
            ".navbar-area .navbar-toggler"
        );
        navbarTogglerHome?.addEventListener("click", function () {
            navbarTogglerHome.classList.toggle("active");
        });

        let navbarTogglerPages = document.querySelector(
            ".navbar-eight .navbar-toggler"
        );
        navbarTogglerPages?.addEventListener("click", function () {
            navbarTogglerPages.classList.toggle("active");
        });

        var header = $(".navbar-area.navbar-home"); 
        $(window).scroll(function () {
            var scroll = $(window).scrollTop();

            if (scroll >= 300) {
                header.removeClass('bg-transparent').addClass("bg-white");
                header.addClass("transition");
            } else {
                header.removeClass("bg-white").addClass('bg-transparent');
                header.addClass("transition");
            }
        });

    });
}