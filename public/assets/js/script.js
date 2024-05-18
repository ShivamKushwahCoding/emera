$(document).ready(function () {
    $("#wrapper").scroll(function () {
        if ($(this).scrollTop() > 50) {
            $(".navbar").addClass("bg-primary");
        } else {
            $(".navbar").removeClass("bg-primary");
        }
    });
});

document.addEventListener("DOMContentLoaded", function () {
    var navbarToggle = document.querySelector(".navbar-toggler");
    var blurredContentMain = document.querySelector("main");
    var blurredContentFooter = document.querySelector("footer");

    navbarToggle.addEventListener("click", function () {
        blurredContentMain.classList.toggle("blurred-content");
        blurredContentFooter.classList.toggle("blurred-content");
        if (blurredContentMain.classList.contains("blurred-content")) {
            var overlay = document.createElement("div");
            overlay.classList.add("blurred-overlay");
            document.body.appendChild(overlay);
        } else {
            var overlay = document.querySelector(".blurred-overlay");
            if (overlay) {
                overlay.remove();
            }
        }
    });
});

var swiper = new Swiper(".market-place-swiper", {
    slidesPerView: 3,
    spaceBetween: 30,
    slidesPerGroup: 1,
    loop: true,
    loopFillGroupWithBlank: true,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    breakpoints: {
        0: {
            slidesPerView: 2,
        },
        520: {
            slidesPerView: 3,
        },
        768: {
            slidesPerView: 3,
        },
        1100: {
            slidesPerView: 4,
        },
    },
});
var swiper = new Swiper(".testimonial-swiper", {
    slidesPerView: 3,
    spaceBetween: 25,
    slidesPerGroup: 1,
    centerSlide: true,
    loop: true,
    loopFillGroupWithBlank: true,
    grabCursor: true,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    breakpoints: {
        0: {
            slidesPerView: 1,
        },
        520: {
            slidesPerView: 1,
        },
        768: {
            slidesPerView: 2,
        },
        1100: {
            slidesPerView: 3,
        },
    },
});
