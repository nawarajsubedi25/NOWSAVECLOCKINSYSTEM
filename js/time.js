
$(document).ready(function(){
    $("#clockinn").click(function(){
 $.ajax({
  url: "some.php",
  data: { name: "John" },success: function(data) {
       document.getElementById("links").innerHTML = data;
      }
    });
  });
  
    
    $("#clockout").click(function(){
 $.ajax({
  url: "ClockOut.php",
  data: { name: "John" }
}).done(function( data ) {
  document.getElementById("links").innerHTML = data;
});    

    });
});