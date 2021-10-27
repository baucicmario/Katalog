$(document).ready(function() {

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
        $('#containerDivID').multiscroll({
            anchors: ['cover', 'smarthome', 'automation', 'camera', 'green', 'safety', 'security', 'innovation', 'wall', 'tuya', 'pelda1', 'pelda2', 'pelda3', 'pelda4', 'pelda5', 'pelda6', 'pelda7', 'pelda8', 'pelda9', 'katalog'],
            menu: '#menu',
            navigationPosition: 'left',
            navigation: false,
            navigationTooltips: ['Borító', 'Intelligens épület', 'Automatizálás', 'Kamera integráció', 'Energia hatékonyság', 'Épületbiztonság', 'Vagyonbiztonság', 'Innovatív megoldások', 'Vezérlés', 'Reggeli Rutinok', 'Világításvezérlés és automatizálás', 'Fűtés-/Hűtésvezérlés', 'Vízérzékelés', 'Gázérzékelés', 'Egy biztonsági rendszer', 'Fagymentesítés'],
            verticalCentered: true,
            navigationColor: '#FFFFFF',
        });
    } else {
        //small screen
        $('#left').addClass('d-none');
        $('#left').removeClass('ms-left');
        $('#right').addClass('d-none');
        $('#right').removeClass('ms-right');


        $('#mobile-left').removeClass('d-none');
        $('#mobile-left').addClass('ms-left');
        $('#mobile-right').removeClass('d-none');
        $('#mobile-right').addClass('ms-right');
        $('#menu2').removeClass('d-none');
        $('#menu').addClass('d-none');
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