$(document).ready(function(){
    $("#clockinn").click(function(){
 $.ajax({
  url: "some.php",
  data: { name: "John" }
}).done(function( msg ) {
  alert( "Data Saved: " + msg );
});    

    });
    
    $("#clockout").click(function(){
 $.ajax({
  url: "ClockOut.php",
  data: { name: "John" }
}).done(function( msg ) {
  alert( "Data Saved: " + msg );
});    

    });
});