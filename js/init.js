$(document).ready(function() {
    $('.your-class').slick({
        autoplay: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        pauseOnHover: true,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    swipe: true,
                    slidesToShow: 3,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    swipe: true,
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    fade: true,
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
});
function hideAnswers(btn) {
    let x = document.getElementById(btn);
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}