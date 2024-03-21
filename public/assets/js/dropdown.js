document.addEventListener("DOMContentLoaded", function () {
    const dropdowns = document.querySelectorAll(".dropdown");

    dropdowns.forEach(function (dropdown) {
        dropdown.addEventListener("show.bs.dropdown", function () {
            const icon = this.querySelector(".fa-angle-down");
            if (icon) {
                icon.classList.remove("fa-angle-down");
                icon.classList.add("fa-angle-up");
            }
        });

        dropdown.addEventListener("hide.bs.dropdown", function () {
            const icon = this.querySelector(".fa-angle-up");
            if (icon) {
                icon.classList.remove("fa-angle-up");
                icon.classList.add("fa-angle-down");
            }
        });
    });
});
