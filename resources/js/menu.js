document.addEventListener('DOMContentLoaded', function () {
    var menuItems = document.querySelectorAll('.submenu');

    menuItems.forEach(function (item) {
        item.previousElementSibling.addEventListener('mouseenter', function () {
            item.classList.add('show-submenu');
        });

        item.addEventListener('mouseleave', function () {
            item.classList.remove('show-submenu');
        });
    });
});