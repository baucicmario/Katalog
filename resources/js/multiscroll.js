$(document).ready(function () {
    $('#multiscroll').multiscroll({
        verticalCentered: true,
        scrollingSpeed: 700,
        easing: 'easeInQuart',
        easingcss3: 'ease-out',
        menu: false,
        sectionsColor: [],
        navigation: false,
        navigationPosition: 'right',
        navigationColor: '#ffffff',
        navigationTooltips: ['first', 'second', 'third', 'forth', 'fifth', 'sixth'],
        loopBottom: false,
        loopTop: false,
        css3: true,
        paddingTop: 0,
        paddingBottom: 0,
        normalScrollElements: null,
        scrollOverflow: true,
        scrollOverflowOptions: null,
        keyboardScrolling: true,
        touchSensitivity: 5,
        //responsive
        responsiveWidth: 0,
        responsiveHeight: 0,
        responsiveExpand: false,

        // Custom selectors
        sectionSelector: '.ms-section',
        leftSelector: '.ms-left',
        rightSelector: '.ms-right',

        //events
        onLeave: function (index, nextIndex, direction) { },
        afterLoad: function (anchorLink, index, active) { },
        afterRender: function () { },
        afterResize: function () { },
    });
});