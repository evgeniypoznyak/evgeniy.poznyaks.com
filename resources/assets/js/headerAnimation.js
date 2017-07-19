/**
 * Created by Evgeniy on 6/14/2017.
 */

/* HEADER ANIMATION */

$(document).ready(function () {


    $('#profile-pic').toggle('slide', {'direction': 'right'}, 800);
    $("#text-title-hero").delay(350).animate({fontSize: '36'}, {duration: 1000});
    $("#text-subtitle-hero").delay(350).animate({fontSize: '26'}, {duration: 1000} );







/*    $( "#contact-icon" ).removeClass('ui-button');
    $( "#contact-icon" ).removeClass('ui-corner-all');
    $( "#contact-icon" ).removeClass('ui-widget');


    $("#profile-pic").delay(800).animate({ marginRight: '-89px'}, {duration: 1000});
    $("#text-title-hero").delay(350).animate({fontSize: '36'}, {duration: 1000});
    $("#text-subtitle-hero").delay(350).animate({fontSize: '26'}, {duration: 1000} );*/

    $("#wordpress-icon").delay(1500).animate({marginTop: '0px'}, {duration: 350});
    $("#github-icon").delay(2000).animate({marginTop: '0px'}, {duration: 350});
    $("#lindkin-icon").delay(2500).animate({marginTop: '0px'}, {duration: 350});
    $("#resume-icon").delay(3000).animate({marginTop: '0px'}, {duration: 350});
    $("#contact-icon").delay(3500).animate({marginTop: '0px'}, {duration: 350});

    var i = 50;
    var d = 250;
    do {

        $("#wordpress-icon").animate({marginTop: i+'px'}, {duration: d-i});
        $("#github-icon").animate({marginTop: i+'px'}, {duration:  d-i});
        $("#lindkin-icon").animate({marginTop: i+'px'}, {duration:  d-i});
        $("#resume-icon").animate({marginTop: i+'px'}, {duration:  d-i});
        $("#contact-icon").animate({marginTop: i+'px'}, {duration:  d-i});


        $("#wordpress-icon").animate({marginTop: '0px'}, {duration:  d-i});
        $("#github-icon").animate({marginTop: '0px'}, {duration:  d-i});
        $("#lindkin-icon").animate({marginTop: '0px'}, {duration:  d-i});
        $("#resume-icon").animate({marginTop: '0px'}, {duration:  d-i});
        $("#contact-icon").animate({marginTop: '0px'}, {duration:  d-i});
        i = i - 10;
    }
    while (i > 10);







});
