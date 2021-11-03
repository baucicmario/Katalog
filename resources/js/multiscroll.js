$(document).ready(function() {

    //redundant classes
    $('#containerDivID > div > section').addClass('ms-section');
    $('#containerDivID > div > section').addClass('container-fluid');
    $('#containerDivID > div > section > div').addClass('print2');
    
    $('#containerDivID > div > section ').addClass('print');
    $('#containerDivID > div > section ').addClass('d-flex align-items-center');
    $('#containerDivID > div > section > div').addClass('row box');
    $('#mobile-left > section').addClass('pt-5');
    $('#mobile-left > section > div').addClass('container-fluid');
    $('#mobile-left > section > div > div').addClass('row');
    $('#mobile-left > section > div > div').addClass('align-items-center');


    









    //medium screen scaling
    if ($(window).width() > $(window).height() * 1.7) {
        $('.ms-section > .row').removeClass('bgcontain');
        $('#pelda6leftId > div').removeClass('bgcontain');
        $('.ms-section > .row').addClass('bgcover');
        $('#pelda6leftId > div').addClass('bgcover');
    } else {
        $('.ms-section > .row').addClass('bgcontain');
        $('#pelda6leftId > div').addClass('bgcontain');
        $('.ms-section > .row').removeClass('bgcover');
        $('#pelda6leftId > div').removeClass('bgcover');
    }
    //big screen scaling
    if ($(window).width() * 0.8 > $(window).height()) {

        $('#mobile-left').addClass('d-none');
        $('#mobile-left').removeClass('ms-left');
        $('#mobile-right').addClass('d-none');
        $('#mobile-right').removeClass('ms-right');
        $('#left').removeClass('d-none');
        $('#left').addClass('ms-left');
        $('#right').removeClass('d-none');
        $('#right').addClass('ms-right');
        $('#menu2').addClass('d-none');
        $('#menu').removeClass('d-none');
        $('.ms-section').addClass('container-fluid');
        $('#mobile-left > section').addClass('pt-5');

        //multiscroll engine

    } else {
        //small screen
        $('#mobile-left').addClass('d-none');
        $('#mobile-left').removeClass('ms-left');
        $('#mobile-right').addClass('d-none');
        $('#mobile-right').removeClass('ms-right');
        $('#left').removeClass('d-none');
        $('#left').addClass('ms-left');
        $('#right').removeClass('d-none');
        $('#right').addClass('ms-right');
        $('#menu2').addClass('d-none');
        $('#menu').removeClass('d-none');
        $('.ms-section').addClass('container-fluid');
        $('#mobile-left > section').addClass('pt-5');

    }


    var oldwidth = $(window).width();
    $(window).resize(function() {
        var nw = $(window).width();
        if (oldwidth > nw * 1.1) {
            location.reload();

        } else {
            if (oldwidth * 1.1 < nw) {
                location.reload();
            }
        }
    });
});