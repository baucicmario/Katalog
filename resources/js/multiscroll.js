$(document).ready(function() {

    //redundant classes
    $('#containerDivID > div > section').addClass('ms-section');
    $('#containerDivID > div > section').addClass('container-fluid');
    $('#containerDivID > div > section > div').addClass('row');
    $('#mobile-left > section').addClass('pt-5');
    $('#mobile-left > section > div').addClass('container-fluid');
    $('#mobile-left > section > div > div').addClass('row');
    $('#mobile-left > section > div > div').addClass('align-items-center');












    //medium screen scaling
    if ($(window).width() > $(window).height() * 1.7) {
        $('html').removeClass('noscroll');
        $('body').removeClass('noscroll');
        $('#containerDivID').removeClass('d-none');
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

        $('html').removeClass('noscroll');
        $('body').removeClass('noscroll');

        $('#containerDivID').removeClass('d-none');
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
        $('#menu3').removeClass('d-none');
        $('.ms-section').addClass('container-fluid');
        $('#mobile-left > section').addClass('pt-5');

        //multiscroll engine
        $('#containerDivID').multiscroll({
            anchors: ['cover', 'smarthome', 'automation', 'HomeAssistant', 'camera', 'green', 'safety', 'security', 'innovation', 'wall', 'tuya', 'Node-RED', 'pelda1', 'pelda2', 'pelda3', 'pelda4', 'pelda5', 'pelda6', 'pelda7', 'pelda8', 'pelda9', 'katalog'],
            menu: '#menu',
            licenseKey: '2B5F90AB-9EA14D00-B905CB66-CC8855BA',
            navigationPosition: 'left',
            navigation: true,
            navigationTooltips: ['Kezd??lap', 'Intelligens ??p??let', 'Automatiz??l??s', 'HomeAssistant', 'Kamera integr??ci??', 'Energiahat??konys??g', '??p??letbiztons??g', 'Vagyonbiztons??g', 'Kinetikus kapcsol??k', 'Kinetikus kapcsol??k vev??egys??gei (aktu??torai)', 'Vez??rl??s', 'Fejlett vez??rl??s', 'Reggeli Rutinok', 'Vil??g??t??svez??rl??s', 'F??t??s-/h??t??svez??rl??s', 'V??z??rz??kel??s', 'G??z??rz??kel??s', 'Biztons??g', 'Kamera vez??rl??s', 'Be??p??thet?? aktu??tor', 'Fagymentes??t??s', 'Legfrisebb term??keink'],
            verticalCentered: true,
            navigationColor: '#FFFFFF',
        });

        $.fn.multiscroll.moveTo('cover');
    } else {
        //small screen
        $('html').addClass('noscroll');
        $('body').addClass('noscroll');
        $('#left').addClass('d-none');
        $('#left').removeClass('ms-left');
        $('#right').addClass('d-none');
        $('#right').removeClass('ms-right');


        $('#mobile-left').removeClass('d-none');
        $('#mobile-right').removeClass('d-none');
        $('#menu3').addClass('d-none');
        $('#menu2').removeClass('d-none');
        $('#menu').addClass('d-none');
    }


    var oldwidth = $(window).width();
    $(window).resize(function() {
        var nw = $(window).width();
        if (oldwidth > nw * 1.1) {
            window.scrollTo(0, 0);
            location.reload();
            $.fn.multiscroll.moveTo('cover');


        } else {
            if (oldwidth * 1.1 < nw) {
                window.scrollTo(0, 0);
                location.reload();
                $.fn.multiscroll.moveTo('cover');

            }
        }
    });



});

function NextPage() {
    $.fn.multiscroll.moveSectionDown();
}
window.onload = function() {
    document.getElementById('btn_text').onclick = function() {
        $.fn.multiscroll.moveSectionDown();
    }
}