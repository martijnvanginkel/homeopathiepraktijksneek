$(document).ready(function(){

  jQuery('#pageRight').hide();
  jQuery('#pageUp').show();

    $(".menu ul .pagesItem").click(function(){
        jQuery('.togglePagesMenu').toggleClass('visible');

        jQuery('#pageRight').toggle();
        jQuery('#pageUp').toggle();
    });

});

$(document).ready(function(){

  jQuery('#elementRight').hide();
  jQuery('#elementUp').show();

    $(".menu ul .elementsItem").click(function(){
        jQuery('.toggleElementsMenu').toggleClass('visible');

        jQuery('#elementRight').toggle();
        jQuery('#elementUp').toggle();
    });
});
