import './article.scss';
import $ from 'jquery';


(function () {
    let pageHeight = document.documentElement.scrollHeight;

    window.addEventListener('scroll', function () {

        let winScroll = document.body.scrollTop || document.documentElement.scrollTop,
            height = document.documentElement.scrollHeight - document.documentElement.clientHeight,
            percent = (winScroll / height) * 100;
            document.getElementById('progress-bar').style.width = percent + '%';



    });


}());
