/**
 * Created by anton on 26.01.2017.
 */

function parallaxmain(){
    var jumboHeight = $('#jumbotron-main').outerHeight();
    //noinspection JSValidateTypes,JSUnresolvedFunction
    var scrolled = $(window).scrollTop();
    //noinspection JSUnresolvedFunction
    $('.bg').css('height', (jumboHeight-scrolled) + 'px');
}

$(window).scroll(function(e){
    parallaxmain();
});