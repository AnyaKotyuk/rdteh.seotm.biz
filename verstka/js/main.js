$('document').ready(function(){
    $('.slick-slider').slick({
        dots: true,
        arrows: false
    });
    $('.news-slider').slick({
        dots: false,
        arrows: true,
        variableWidth: true
    });
});