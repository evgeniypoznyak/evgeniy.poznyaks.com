/**
 * Created by Evgeniy on 6/14/2017.
 */

/* ACCORDION */

$(".accordion").accordion({
    active: false,
    heightStyle: "content",
    // event: "mouseover",
    collapsible: true
    //disabled: true
});


/* SCROLL TO TOP */

$('#my-body').prepend('<a href="#" class="ui-button ui-corner-all ui-widget back-to-top">Back to Top</a>');
var amountScrolled = 800;

$(window).scroll(function () {
    if ($(window).scrollTop() > amountScrolled) {
        $('a.back-to-top').fadeIn('slow');
    } else {
        $('a.back-to-top').fadeOut('slow');
    }
});

$('a.back-to-top').click(function () {
    $('html, body').animate({
        scrollTop: 0
    }, 700);
    return false;
});




$('#contactModalBody').on('show.bs.modal', function (event) {

    //

});

// Swipe for carousel bootstrap
$("#carousel-example-generic").carousel();

// hiding jquery-mobile extra body
//$('body').first().hide();

