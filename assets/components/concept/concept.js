import './concept.scss';
import '../../../node_modules/jquery-viewport-checker/src/jquery.viewportchecker';

(function () {
    let blocksArr = $('.concept__description-item');
    for(let i=0; i<blocksArr.length; i++) {
        $(blocksArr[i]).viewportChecker({
            classToAdd: 'concept__description-item_active',
            offset: 200,
        });
    }
}());
