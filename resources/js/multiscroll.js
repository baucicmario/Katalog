
$(document).ready(function () {
    //small screen right side removal



     //medium screen scaling
     if ($(window).width() > $(window).height() * 1.85) {
        $('.ms-section > .row').removeClass('bgcontain');
        $('#pelda6leftId > div').removeClass('bgcontain');
        $('.ms-section > .row').addClass('bgcover');
        $('#pelda6leftId > div').addClass('bgcover');
    } else{
        
        $('.ms-section > .row').addClass('bgcontain');
        $('#pelda6leftId > div').addClass('bgcontain');
        $('.ms-section > .row').removeClass('bgcover');
        $('#pelda6leftId > div').removeClass('bgcover');
    }
    //multiscroll engine




    if ($(window).width() > $(window).height()) {

        $('#mobile-left').addClass('d-none');
        $('#mobile-left').removeClass('ms-left');
        $('#mobile-right').addClass('d-none');
        $('#mobile-right').removeClass('ms-right');


        $('#large-left').removeClass('d-none');
        $('#large-left').addClass('ms-left');
        $('#large-right').removeClass('d-none');
        $('#large-right').addClass('ms-right');

        $('#containerDivID').multiscroll({
            anchors: ['cover', 'smarthome', 'automation', 'green', 'safety', 'security', 'innovation', 'tuya', 'pelda1', 'pelda2', 'pelda3', 'pelda5', 'pelda4', 'pelda7', 'pelda6', 'pelda8', 'large-empty', 'large-empty1', 'large-empty2', 'large-empty3', 'large-empty4', 'large-empty5', 'large-empty6'],
            menu: '#menu',
            navigationPosition: 'left',
            navigation: false,
            navigationTooltips: ['Borító', 'Intelligens épület', 'Automatizálás', 'Energia hatékonyság', 'Épületbiztonság', 'Vagyonbiztonság', 'Innovatív megoldások', 'Vezérlés', 'Reggeli Rutinok', 'Világításvezérlés és automatizálás', 'Fűtés-/Hűtésvezérlés', 'Vízérzékelés', 'Gázérzékelés', 'Egy biztonsági rendszer', 'Fagymentesítés'],
            verticalCentered: true,
            navigationColor: '#FFFFFF',
    
    
        });


    } else {

        $('#large-left').addClass('d-none');
        $('#large-left').removeClass('ms-left');
        $('#large-right').addClass('d-none');
        $('#large-right').removeClass('ms-right');


        $('#mobile-left').removeClass('d-none');
        $('#mobile-left').addClass('ms-left');
        $('#mobile-right').removeClass('d-none');
        $('#mobile-right').addClass('ms-right');
    }


    var oldwidth = $(window).width();
    $(window).resize(function () {
        var nw = $(window).width();
        if(oldwidth>nw*1.1){
            alert("I am smaller");
            location.reload();

        }else{
            if(oldwidth*1.1<nw){
                alert("I am bigger");
                location.reload();
            }
        }       
    });








});





