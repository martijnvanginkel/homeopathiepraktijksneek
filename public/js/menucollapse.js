$(window).resize(function() {
  if ($(window).width() < 970) {

      // $( "#hallo" ).replaceWith( "<ul id='hoi'> </ul>" );
      $("#hallo").hide();
      $("#hoi").show();

  }
 else {
      $("#hallo").show();
      $("#hoi").hide();
 }
});
