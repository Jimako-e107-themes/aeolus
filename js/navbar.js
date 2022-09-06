if (true) {
    $(document).ready(function () {
        //===== close navbar-collapse when a  clicked
        const navbarTogglerFive = document.querySelector(
            ".navbar-area .navbar-toggler"
        );
        navbarTogglerFive.addEventListener("click", function () {
            navbarTogglerFive.classList.toggle("active");
        });
    });
}