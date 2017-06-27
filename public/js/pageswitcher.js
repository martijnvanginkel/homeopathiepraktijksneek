$(document).ready(function(){

    var url = window.location.href;

    $('.pageSwitcher a').filter(function() {
        return this.href == url;
    }).addClass('onPage');

});

$(document).ready(function(){

    var url = window.location.href;

    $('.togglePagesMenu li a').filter(function() {
        return this.href == url;

    }).addClass('onPage');

});
