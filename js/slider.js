document.addEventListener('DOMContentLoaded', () => {
    let currentSlide = 0;
    let clicked = false;
    const slides = document.querySelectorAll('.slide');
    const slidesContainer = document.querySelector('.slides');
    const prevButton = document.querySelector('#previousSlide');
    const nextButton = document.querySelector('#nextSlide');

    function showSlide(index) {
        slidesContainer.style.transform = `translateX(-${index * 100}%)`;
    }

    function changeSlide(n) {
        currentSlide = (currentSlide + n + slides.length) % slides.length;
        showSlide(currentSlide);
        for (let i = 0; i < smallButtons.length; i++) smallButtons[i].classList.remove("active-slider-button")
        smallButtons[currentSlide].classList.add("active-slider-button")
    }

    function changeSlideByClick(n){
        clicked = true
        changeSlide(n)
    }

    prevButton.addEventListener('click', () => changeSlideByClick(-1));
    nextButton.addEventListener('click', () => changeSlideByClick(1));


    const smallButtonsContainer = document.querySelectorAll(".slider-control")[0]
    for (let i = 0; i < slidesContainer.children.length;i++) smallButtonsContainer.appendChild(document.createElement("span"))

    const smallButtons = document.querySelectorAll(".slider-control>span")
    for (let i = 0; i < smallButtons.length; i++) smallButtons[i].addEventListener('click', () => changeSlideByClick(i-currentSlide))

    changeSlide(currentSlide);

    // Optional: Auto sliding (commented out)
    function autoSlide() {
        if (clicked) clicked = false
        else changeSlide(1)
    }
    let slideInterval = setInterval(autoSlide, 3000);
});
