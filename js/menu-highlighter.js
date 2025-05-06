// menu-highlighter.js
document.addEventListener('DOMContentLoaded', function () {
    // Get current filename
    var path = window.location.pathname;
    var page = path.split("/").pop();

    // If no page is specified, assume it's index.php
    if (page === "") page = "index.php";

    // Find the matching link and add the is-current class
    var navLinks = document.querySelectorAll('nav a');
    for (var i = 0; i < navLinks.length; i++) {
        var link = navLinks[i];
        var href = link.getAttribute('href');

        if (href === page) {
            link.parentNode.classList.add('is-current');
            break;
        }
    }
});