
$(document).ready(function () {
    //small screen right side removal
    if ($(window).width() > $(window).height()) {

        $('#mobile-left').addClass('d-none');
        $('#mobile-left').removeClass('ms-left');
        $('#mobile-right').addClass('d-none');
        $('#mobile-right').removeClass('ms-right');


        $('#large-left').removeClass('d-none');
        $('#large-left').addClass('ms-left');
        $('#large-right').removeClass('d-none');
        $('#large-right').addClass('ms-right');



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
    //medium screen scaling
    if ($(window).width() > $(window).height() * 1.8) {
        //remove class
        $('#large-pelda1rightId').removeClass('medium-large-pelda1rightId');
        $('#pelda1leftId').removeClass('medium-pelda1leftId');
        $('#large-pelda2rightId').removeClass('medium-large-pelda2rightId');
        $('#pelda2leftId').removeClass('medium-pelda2leftId');
        $('#pelda3leftId').removeClass('medium-pelda3leftId');
        $('#large-pelda3rightId').removeClass('medium-large-pelda3rightId');
        $('#pelda4leftId').removeClass('medium-pelda4leftId');
        $('#large-pelda4rightId').removeClass('medium-large-pelda4rightId');
        $('#large-pelda5rightId').removeClass('medium-large-pelda5rightId');
        $('#pelda5leftId').removeClass('medium-pelda5leftId');
        $('#large-pelda6rightId').removeClass('medium-large-pelda6rightId');
        $('#pelda6leftId').removeClass('medium-pelda6leftId');
        $('#large-pelda7rightId').removeClass('medium-large-pelda7rightId');
        $('#pelda7leftId').removeClass('medium-pelda7leftId');
        //add classes
        $('#large-pelda1rightId').addClass('large-pelda1rightId');
        $('#pelda1leftId').addClass('pelda1leftId');
        $('#large-pelda2rightId').addClass('large-pelda2rightId');
        $('#pelda2leftId').addClass('pelda2leftId');
        $('#pelda3leftId').addClass('pelda3leftId');
        $('#large-pelda3rightId').addClass('large-pelda3rightId');
        $('#pelda4leftId').addClass('pelda4leftId');
        $('#large-pelda4rightId').addClass('large-pelda4rightId');
        $('#large-pelda5rightId').addClass('large-pelda5rightId');
        $('#pelda5leftId').addClass('pelda5leftId');
        $('#large-pelda6rightId').addClass('large-pelda6rightId');
        $('#pelda6leftId').addClass('pelda6leftId');
        $('#large-pelda7rightId').addClass('large-pelda7rightId');
        $('#pelda7leftId').addClass('pelda7leftId');
    } else {
        //add class
        $('#large-pelda1rightId').removeClass('large-pelda1rightId');
        $('#pelda1leftId').removeClass('pelda1leftId');
        $('#large-pelda2rightId').removeClass('large-pelda2rightId');
        $('#pelda2leftId').removeClass('pelda2leftId');
        $('#pelda3leftId').removeClass('pelda3leftId');
        $('#large-pelda3rightId').removeClass('large-pelda3rightId');
        $('#pelda4leftId').removeClass('pelda4leftId');
        $('#large-pelda4rightId').removeClass('large-pelda4rightId');
        $('#large-pelda5rightId').removeClass('large-pelda5rightId');
        $('#pelda5leftId').removeClass('pelda5leftId');
        $('#large-pelda6rightId').removeClass('large-pelda6rightId');
        $('#pelda6leftId').removeClass('pelda6leftId');
        $('#large-pelda7rightId').removeClass('large-pelda7rightId');
        $('#pelda7leftId').removeClass('pelda7leftId');
        //remove class
        $('#large-pelda1rightId').addClass('medium-large-pelda1rightId');
        $('#pelda1leftId').addClass('medium-pelda1leftId');
        $('#large-pelda2rightId').addClass('medium-large-pelda2rightId');
        $('#pelda2leftId').addClass('medium-pelda2leftId');
        $('#pelda3leftId').addClass('medium-pelda3leftId');
        $('#large-pelda3rightId').addClass('medium-large-pelda3rightId');
        $('#pelda4leftId').addClass('medium-pelda4leftId');
        $('#large-pelda4rightId').addClass('medium-large-pelda4rightId');
        $('#large-pelda5rightId').addClass('medium-large-pelda5rightId');
        $('#pelda5leftId').addClass('medium-pelda5leftId');
        $('#large-pelda6rightId').addClass('medium-large-pelda6rightId');
        $('#pelda6leftId').addClass('medium-pelda6leftId');
        $('#large-pelda7rightId').addClass('medium-large-pelda7rightId');
        $('#pelda7leftId').addClass('medium-pelda7leftId');
    }
    //multiscroll engine
    $('#containerDivID').multiscroll({
        anchors: ['cover', 'smarthome', 'automation', 'green', 'safety', 'security', 'innovation', 'tuya', 'pelda1', 'pelda2', 'pelda3', 'pelda5', 'pelda4', 'pelda7', 'pelda6', 'pelda8', 'large-empty', 'large-empty1', 'large-empty2', 'large-empty3', 'large-empty4', 'large-empty5', 'large-empty6'],
        menu: '#menu',
        navigationPosition: 'left',
        navigation: false,
        navigationTooltips: ['Borító', 'Intelligens épület', 'Automatizálás', 'Energia hatékonyság', 'Épületbiztonság', 'Vagyonbiztonság', 'Innovatív megoldások', 'Vezérlés', 'Reggeli Rutinok', 'Világításvezérlés és automatizálás', 'Fűtés-/Hűtésvezérlés', 'Vízérzékelés', 'Gázérzékelés', 'Egy biztonsági rendszer', 'Fagymentesítés'],
        verticalCentered: true,
        navigationColor: '#FFFFFF',


    });
});
$(window).on('resize', function () {
    location.reload();
})