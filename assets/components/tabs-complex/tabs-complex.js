import './tabs-complex.scss';
import $ from 'jquery';
import 'jquery-ui/ui/widgets/tabs';

$( function() {
    $( "#complex-tabs" ).tabs();
} );

$( function() {
    $( "#for-you").on('click', function () {
        $( ".tabs-complex__roller").addClass('tabs-complex__roller_active')
    });
    $( "#for-company").on('click', function () {
        $( ".tabs-complex__roller").removeClass('tabs-complex__roller_active')
    });

} );
