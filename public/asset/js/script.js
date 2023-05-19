$(document).ready(function () {
    $('#example').DataTable();
});

function changeButtonStyle(button) {
    var buttons = document.getElementsByClassName("btn1");
    for (var i = 0; i < buttons.length; i++) {
      buttons[i].classList.remove("active");
    }
    button.classList.add("active");
  }

$(document).ready(function () {
    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
    });

    $('#sidebarCollapse1').on('click', function () {
        $('#sidebar').toggleClass('active');
    });
});

document.addEventListener("DOMContentLoaded", function () {
    var arrows = document.querySelectorAll(".btn1");

    arrows.forEach(function (arrow) {
        arrow.addEventListener("click", function () {
            this.classList.toggle("rotated");
        });
    });
});

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




