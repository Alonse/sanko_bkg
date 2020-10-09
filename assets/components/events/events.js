import './events.scss';
import $ from 'jquery';





function changeSlideDate(button) {
    button.closest('.events__slider').querySelector('.events__date').textContent = button.closest('.events__slider').querySelector('.events__slide_active').getAttribute('data-date');
}

function slider(nextBtn, prevbtn, slides) {


    slides = Array.from(slides.children);
    let pageCounter = 0;


    function nextSlide () {

        slides[pageCounter].classList.add('events__slide_deactive');
        slides[pageCounter].classList.remove('events__slide_active');
        pageCounter++;
        if (pageCounter > slides.length -1) {
            pageCounter = 0;
        }
        slides[pageCounter].classList.add('events__slide_deactive');
        slides[pageCounter].classList.add('events__slide_active');


        changeSlideDate(this);
    }

    function prevSlide () {
        slides[pageCounter].classList.add('events__slide_deactive');
        slides[pageCounter].classList.remove('events__slide_active');
        pageCounter--;
        if (pageCounter < 0) {
            pageCounter = slides.length - 1;
        }
        slides [pageCounter].classList.add('events__slide_active');

        changeSlideDate(this);
    }

    nextBtn.addEventListener('click', nextSlide, false);
    prevbtn.addEventListener('click', prevSlide, false);

}

window.addEventListener('load', function () {
    let sliders = document.querySelectorAll('.events__slider');
    sliders.forEach(function callback(currentValue, index, array) {
        currentValue.querySelector('.events__date').textContent = currentValue.querySelector('.events__slide_active').getAttribute('data-date');
    });
});

slider(document.getElementById('next-button'), document.getElementById('prev-button'), document.getElementById('slides-wrapper'));
slider(document.getElementById('next-button-2'), document.getElementById('prev-button-2'), document.getElementById('slides-wrapper-2'));

