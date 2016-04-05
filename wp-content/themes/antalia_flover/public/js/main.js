/**
 * Created by serg on 05.04.16.
 */
$(document).ready(function(){

    $('.hower').mouseenter(function(){
        $('.dropdown-menu').dropdown();
    });
    function showImage(e) {
        var mo = $('#iview');
        $('#iview .modal-dialog').html($('<img>',{
            src: e.next('img').attr('src')
        })).append($('<div>', {
            class: 'close',
            'data-dismiss':'modal',
            'aria-label':'Close'
        }).append($('<span>',{
            'aria-hidden': true,
            text: '×'
        })));
        mo.modal();

    }
});