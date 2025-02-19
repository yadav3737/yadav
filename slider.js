document.addEventListener("DOMContentLoaded", function () {
    let slides = document.querySelectorAll(".slide");
    let index = 0;

    function changeSlide() {
        slides.forEach((slide, i) => {
            slide.classList.remove("active");
            if (i === index) {
                slide.classList.add("active");
            }
        });
        index = (index + 1) % slides.length;
    }

    changeSlide(); // Initialize the first slide
    setInterval(changeSlide, 3000); // Change background every 3 seconds
});
