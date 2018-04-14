
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Dialog - Default functionality</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
  <link href="css/adminDashboard.css" rel="stylesheet" type="text/css">
  <!-- Dialogbox Javascript -->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <!------------------------------------------------------------------>
  <!--- For Auto logout ---------------------------------------------->
<body onload="--ssStartTimers();">
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
 <!---------------------Auto logout Script End --------------------------->
</head>
    <div class="innercontainer">
    <div id="timeout" title="Session Expiring">
        <div class="sessionBox"> <br/> For Security purpose your session will end in&nbsp;<span style="font-weight:bold" id="second"></span>&nbsp;seconds. Any unsaved data will be lost. Please click
          <b>Continue Session</b> to keep your current session active.
          
          
          <br/>
         
          <div class="sessionBox"style="line-height:4em; vertical-align:bottom; margin-top:1em; padding-bottom:1em;">
              <button  class="btn btn-danger continueSession" onclick="ResetTimers()" value="Continue Session"> Continue Session</button>
          </div>
          </div>
    </div>
    </div>
    
         <div class="container-fluid">
             <div class="row firstRow">
    <div class="col-sm-3 storelogo">
    <a  href="admin.php"><img alt="logo" height="30" src="images/nowsave.png" width="139" /></a>
    </div>
    <div class="col-sm-4 storeInformation">
     <a href="admin.php"><i class="fas fa-home fa-2x">&nbsp;</i>DHALIWAL INC</a> |&nbsp;
     <a  href="admin.php"><i class="fas fa-laptop fa-2x">&nbsp;</i>VIJAY-VIKRAM LLC</a> |&nbsp;
      <a href="admin.php"><i class="fas fa-user fa-2x">&nbsp;</i>nowsave20</a>
    </div>
    
    <div class="col-sm-5 logout" align="right">
    <a  href="admin.php"><img alt="logo" height="30" src="images/shutdown.png" width="30" />Logout </a>
    </div>
    </div>
    </div>
    <div class="innercontainer">
    <div class="row SecondRow">
    </div>
    <div class="row thirdRow">
        <div class="col-sm-3 col-md-2 left-sidebar">
                <ul class="nav nav-sidebar">
                    <li class="active"><a href="#">Overview</a></li>
                    <li><a href="#">Reports</a></li>
                    <li><a href="#">Analytics</a></li>
                    <li><a href="#">Export</a></li>
                </ul>
            </div>
         <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                <div class="selectEmployee">Find Employee
                 <input class="inputbox" id="inputbox"  maxlength="40" autocomplete="off" name="password" type="password"  required/>
            <input type="submit" name="formSubmit" value="Search" class="button" />
        </div>
                 </div>
            </div>
    </div>
    </div>
</body>
</html>