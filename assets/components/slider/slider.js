import './slider.scss';
import $ from 'jquery';

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
    }

    function prevSlide () {
        slides[pageCounter].classList.add('events__slide_deactive');
        slides[pageCounter].classList.remove('events__slide_active');
        pageCounter--;
        if (pageCounter < 0) {
            pageCounter = slides.length - 1;
        }
        slides [pageCounter].classList.add('events__slide_active');
    }

    nextBtn.addEventListener('click', nextSlide, false);
    prevbtn.addEventListener('click',prevSlide,false);

}

slider(document.getElementById('next-button'), document.getElementById('prev-button'), document.getElementById('slides-wrapper'));
slider(document.getElementById('next-button-2'), document.getElementById('prev-button-2'), document.getElementById('slides-wrapper-2'));