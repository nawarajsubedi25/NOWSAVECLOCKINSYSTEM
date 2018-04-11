
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Dialog - Default functionality</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<style>
#timeout {
    display: none;
     text-align: center;
     background-color: white;
}
</style>
<body onload="StartTimers();">
<script type="text/javascript">
        // Set timeout variables.
        var timoutWarning = 7500; // Display warning in 1Mins.
        var timoutNow = 15000; // Timeout in 2 mins.
        var logoutUrl = 'http://www.asp.net'; // URL to logout page.

        var warningTimer;
        var timeoutTimer;
        var timer;
        var second;
        // Start timers.
        function StartTimers() {
            warningTimer = setTimeout("IdleWarning()", timoutWarning);
            timeoutTimer = setTimeout("IdleTimeout()", timoutNow);
        }

        // Reset timers.
        function ResetTimers() {
            clearTimeout(warningTimer);
            clearTimeout(timeoutTimer);
            StartTimers();
            $("#timeout").dialog('close');
        }

        // Show idle timeout warning dialog.
        function IdleWarning() {
              second=60;
            $("#timeout").dialog({
                width: "30%",
   maxWidth: "768px",
        close: function () { ResetTimers() },
            }).prev(".ui-dialog-titlebar").css("background","red");
             document.getElementById("second").innerHTML = second;

  if(!timer) {
    timer = window.setInterval(function() {
      myFunction();
    }, 1000);
  }
        }

        // Logout the user.
        function IdleTimeout() {
            window.location = logoutUrl;
        }
      function myFunction() {
     if(second < 60) {
    document.getElementById("second").innerHTML = second;
  }
     if (second >0 ) {
         second--;
     } 
}
    </script>
</head>
<!--body onload="StartTimers();" onmousemove="ResetTimers();"-->
    <div id="timeout" title="Session Expiring">
        <div class="SessionBox"> For Security purpose your session will end in&nbsp;<span style="font-weight:bold" id="second"></span>&nbsp;seconds. Any unsaved data will be lost. Please click
          <b>Continue Session</b> to keep your current session active.
          
          </div>
          <br/>
          <div style="line-height:4em; vertical-align:bottom;">
              <button  class="btn btn-danger" onclick="ResetTimers()" value="Continue Session"> Continue Session</button>
          </div>
          
           
    </div>
    <table id="table1" align="center" border="1" width="800" cellpadding="0" cellspacing="0">
        <tr>
            <td>
                Hello World
            </td>
        </tr>
    </table>
</body>
</html>