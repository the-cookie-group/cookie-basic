$(document).ready(function () {
    /**
     * Reduce the menu when the user clicks outside and the menu is
     * "collaps" and "show". Uses bootstrap menu
     */
    $(document).click(function (event) {
        var clickover = $(event.target);
        var _opened = $("#navbarCollapse").hasClass("collapse show");
        if (_opened === true && !clickover.hasClass("navbar-toggle")) {
            $("button.navbar-toggler").click();
        }
    });
});