/**
 * Created by porfirio on 12/15/16.
 */

$(document).ready(function () {
    var slideIndex = 1;
    var totalSlides = 4;
    var slider = $("#slider_labsol").responsiveSlides({
        auto: true,
        nav: true,
        pause: true,
        speed: 500,
        namespace: "callbacks",
        before: function () {
            var mod = (slideIndex + 1) % totalSlides;
            slideIndex = mod == 0 ? totalSlides : mod;
            $('.events').append("<li>" + slideIndex + "</li>");
            if (slideIndex == totalSlides) {
                $('#slider_labsol').trigger('mouseenter');
            } else {
                $('#slider_labsol').trigger('mouseleave');
            }
        },
        after: function () {

        }
    });
});
