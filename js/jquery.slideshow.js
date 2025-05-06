// slideshow.js
$(document).ready(function () {
    // Initialize slideshow
    if ($('.slideshow').length) {
        // Set first slide as active if none is
        if (!$('.slideshow img.active').length) {
            $('.slideshow img:first').addClass('active');
        }

        // Run slideshow at interval
        setInterval(function () {
            var $active = $('.slideshow img.active');
            var $next = $active.next('img').length ? $active.next('img') : $('.slideshow img:first');

            // Fade out current, fade in next
            $active.removeClass('active');
            $next.addClass('active');
        }, 4000); // Change slide every 4 seconds
    }
});