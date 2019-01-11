$(function() {
    //changes nav menu logo
    $('.logo-icon-container > img').attr('src',window.location.origin + '/images/Knoune_logo_horiz.png');
    //changes nav menu cover
    coverdiv = $('div.panel.widget.center.bgimage');
    coverdiv.attr('style','');
    coverdiv.css('background-image','url("'+ window.location.origin + '/images/Knoune_logo_horiz.png")');
    coverdiv.css('background-size','cover');
    coverdiv.css('background-position','0px');
    //change title
    $('div.title').text('Knoune');
    //hide the warning
    $('div.alert.alert-warning.alert-name-missing-storage-symlink').hide();
});