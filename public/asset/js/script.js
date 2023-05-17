(function ($) {
    "use strict";
    var fullHeight = function () {
        $(".js-fullheight").css("height", $(window).height());
        $(window).resize(function () {
            $(".js-fullheight").css("height", $(window).height());
        });
    };
    fullHeight();
    $("#sidebarCollapse").on("click", function () {
        $("#sidebar").toggleClass("active");
    });
})(jQuery);

// (function ($) {
//     "use strict";
//     var fullHeight = function () {
//         $(".js-fullheight").css("height", $(window).height());
//         $(window).resize(function () {
//             $(".js-fullheight").css("height", $(window).height());
//         });
//     };
//     fullHeight();
//     $("#sidebarCollapse").on("click", function () {
//         $("#sidebar").toggleClass("active");
//         if ($("#sidebar").hasClass("active")) {
//             $(".sidebar-text").hide(); // Hide the text when sidebar is closed
//             $(".icon").show(); // Show the image when sidebar is closed
//         } else {
//             $(".sidebar-text").show(); // Show the text when sidebar is open
//             $(".icon").hide(); // Hide the image when sidebar is open
//         }
//     });
// })(jQuery);




