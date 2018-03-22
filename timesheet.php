<?php
include('session.php');
?>

<html>
<head>
<title>Timesheet!EMPLOYEE</title>
	<style>
		body {
			font-family: Arial, Verdana, sans serif;			
		}
		
		table {
		  font-size: 0.8em;
		}
		
		.urow {
			border-bottom: 1px solid black;
			font-size: 1.3em;
		}
		
		.little-table {
			width: 100%;			
		}
		.little-table {
		  border-collapse: collapse;
		}
		
		
		.log-table {
			text-align: center;
			width: 90%;
			margin-left:9%; 
    	margin-right:1%;
			empty-cells: show;
			border-collapse: collapse;
			font-size: 0.9em;
		}
		
		.log-table td {
			vertical-align: top;
			line-height: 15px;
			padding: 0px;		
		}
		
		
		.large-job-class {
			position: absolute;
			left: 560px;			
		  float: right;	  
		  font-size: 5em;
		  font-weight: bold;
		  padding: 2px;
		}
		
		.table-below-numbers {
		  font-size: 0.7em;
		}
		
		.under-caption {
		  display: inline-block;
		  width: 200px;
		}
		
		.side-caption {
		  display: inline-block;
		  width: 75px;
		  padding-left: 2px;
		}
		
		.disclaimer {
		  font-size: 0.8em;
		  font-weight: bold;
		  background-color: #ccc;
		}
		
		.month-and-year {
		  font-size: 1em;
		  padding-top: 4px;
		  padding-bottom: 6px;
		  text-align: center;
		  font-weight: bold;
		}
		
		.notice {
			text-align: center; 
			font-size: 0.9em;
			padding: 2px;
		}
		
	</style>
	</head>
	
<?php
if (isset($_POST["buttonTimesheet"]))
{
	$var=$login_session;
include 'EmployeeDatabaseConnection.php';
$conn= new EmployeeDatabaseConnection($var);
date_default_timezone_set("America/Chicago");
$monthYear = explode(" ", $_POST["buttonTimesheet"]);
$MONTH= $monthYear[0]; 
$YEAR= $monthYear[1];
$date = $_POST["buttonTimesheet"];
$numberMonth= date('m', strtotime($date));
$YEARMONTH=$YEAR."-".$numberMonth;
$days=date('t', mktime(0, 0, 0, $numberMonth, 1, $YEAR)); 

echo "
	<table width='650'>
	<td>
			<div style='position: absolute; top: 10px; left: 10px;'><a href='javascript:window.print();'>Print</a></div>
	      <div class='large-job-class'>04</div>

				<center> ";
					$query="SELECT * FROM `INFORMATION` ";
					 $result=$conn->returnEmployeeQuery($query);
					 $row = $result->fetch_assoc();
					 echo "
				    <b>
  						Dhaliwal Inc. 
  						<br>
  						EMPLOYEE TIMESHEET
						</b>
						<br>
						<div style='margin-top: 5px; font-size: 0.8em;'>
						<b>Generated electronically by http://www.nowsavestore/timeclock</b>
						<br>for position: <b>{$row["Position"]}</b>
						</div>
				</center>
	             
				<table cellpadding='3' cellspacing='3' width='100%'>
					<tr>
				
			 
					<td style='font-size: 1.2em;' valign='top' align='right' width='12%'><b>&nbsp;&nbsp;Name:</b></td>
						<td valign='top' class='urow'><b>{$row["Fname"]}&nbsp;{$row["Lname"]}</b></td>
						<td>&nbsp;&nbsp;<td>
						<td style='font-size: 1.2em;' valign='top' width='8%'><b>SSN:</b></td>
						<td valign='top' class='urow'><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$row["Ssn"]}</b></td>
					</tr>	
					<tr>
						<td style='font-size: 1.2em;' valign='bottom' align='right'><b>Address:</b></td>
						<td valign='bottom' class='urow' width='300'><b>{$row["Streetaddress"]} <br>{$row["Citystate"]}</b></td>
						<td>&nbsp;&nbsp;<td>
						<td style='font-size: 1.2em;' valign='bottom'><b>Employeer:</b></td>
					 	<td valign='top' class='urow'><b> <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$row["Employer"]}</b></td>
					</tr>	
					</tr></table>
				
				<div class='notice'>
					Time sheet below must be completed and returned to the Store Manager by last
					working day of the pay period.
				</div><div class='month-and-year'>	
							 Month: <u>&nbsp; &nbsp; &nbsp; $MONTH &nbsp; &nbsp; &nbsp;</u> &nbsp; &nbsp; &nbsp; 
							 Year: <u>&nbsp; &nbsp; &nbsp; $YEAR &nbsp; &nbsp; &nbsp;</u>
						 </div>
				</div><table class='log-table'>
						<tr style='border: 0;'>
							<th width='10%'>Date</th>
							<th width='12%'>Start</th>
							<th width='12%'>End</th>
							<th width='12%'>Start</th>
							<th width='12%'>End</th>
							<th width='12%'>Start</th>
							<th width='12%'>End</th>
							<th width='12%'>Totals</th>
						</tr><tr> ";
						
						$query = "SELECT * FROM `$YEAR`
						          WHERE Month='$MONTH'";
						 $result=$conn->returnEmployeeQuery($query);
                         	if ($result->num_rows > 0) {
                         		$x=1;
                         		while($row = $result->fetch_assoc())
						{
							
							 
							 while( $x < $row["Days"])
							 {
							 	
							      	echo "
							      	<td style='border: 1px solid;' align='center'>$x</td><td style='border: 1px solid;'></td><td style='border: 1px solid;'></td><td style='border: 1px solid;'></div></td><td style='border: 1px solid;'></td><td style='border: 1px solid;'></td><td style='border: 1px solid;'></td><td style='border: 1px solid;' align='center'></td></tr><tr>
						             ";
						             $x ++;
						             if ($x==$row["Days"])
						             {
						             	$x++;
						             }
							   }
							      
							 if (($row["FirstIn"]=="") || ($row["FirstOut"]==""))
							 {
							 	$FirstIn="";
						 	$FirstOut="";
							 	
							 }
							 else  {
							 	$FirstIn= date("h:i A",strtotime($row["FirstIn"]));
							 	$FirstOut=date("h:i A",strtotime($row["FirstOut"]));
							 	
							 }
							 
							  if (($row["SecondIn"]=="") || ($row["SecondOut"]==""))
							 {
							 	$SecondIn="";
							 	$SecondOut="";
							 	
							 }
							 else  {
							 	$SecondIn= date("h:i A",strtotime($row["SecondIn"]));
							 	$SecondOut=date("h:i A",strtotime($row["SecondOut"]));
							 	
							 }
							 
							  if (($row["ThirdIn"]=="") || ($row["ThirdOut"]==""))
							 {
							 	$ThirdIn="";
							 	$ThirdOut="";
							    
							 	
							 }
						 else  {
							 	$ThirdIn= date("h:i A",strtotime($row["ThirdIn"]));
							 	$ThirdOut=date("h:i A",strtotime($row["ThirdOut"]));
							 
							 
							 }
							echo "
								<td style='border: 1px solid;' align='center'>{$row["Days"]}</td><td style='border: 1px solid;'>{$FirstIn}</td><td style='border: 1px solid;'>{$FirstOut}</td><td style='border: 1px solid;'></div>{$SecondIn}</td><td style='border: 1px solid;'>{$SecondOut}</td><td style='border: 1px solid;'>{$ThirdIn}</td><td style='border: 1px solid;'>{$ThirdOut}</td><td style='border: 1px solid;' align='center'>{$row["Total"]}</td></tr><tr>
							
							";
							
						}
						while (!($days-($x-1))==0)
						{
								echo "
							      	<td style='border: 1px solid;' align='center'>$x</td><td style='border: 1px solid;'></td><td style='border: 1px solid;'></td><td style='border: 1px solid;'></div></td><td style='border: 1px solid;'></td><td style='border: 1px solid;'></td><td style='border: 1px solid;'></td><td style='border: 1px solid;' align='center'></td></tr><tr>
						             ";
						             $x++;
						}
							$query = "SELECT * FROM `PAYSTUBS`
						          WHERE Month='$MONTH' AND Date='$YEARMONTH'";
						       $result=$conn->returnEmployeeQuery($query);
					            $row = $result->fetch_assoc();
					            echo "
							<td colspan='4'>&nbsp;</td>
						<td style='border: 1px solid; border-bottom: 0;' colspan='3' align='left'><b>Total Hours Worked</b></td>
							<td style='border: 1px solid;'><b>{$row["Thour"]}</b></td>
						</tr><tr style='font-size: 1.1em;' align='center'>
							<td colspan='4'>&nbsp;</td>
							<td style='border: 1px solid; border-top: 0; border-right:0;' colspan='2' align='left'><b>Hourly Wage</b></td>
							<td style='border: 1px solid; border-top: 0; border-left:0;'><b>{$row["Srate"]}</b></td>
							<td style='border: 1px solid;'><b>{$row["GrossAmount"]}</b></td>
						</tr></table>
	
	<br>
	
	<table border='0' width='100%' class='table-below-numbers' cellspacing='5'>
	 <td align='center' style='border: 1px solid;' width='50%'>
	   <br><br>______________________________________________________<br>
	   <span class='under-caption'>EMPLOYEE SIGNATURE</span>&nbsp;&nbsp;&nbsp; DATE<br>
	   <br><br>______________________________________________________<br>
	   <span class='under-caption'>MANAGER SIGNATURE</span>&nbsp;&nbsp; DATE
	   	   
	 </td>
	 
	 <td valign='top' style='border: 1px solid; line-height: 23px;' width='50%'>
	     <div style='background-color: #aaa; text-align: center;'><b>Store Manager</b></div>
	   <span class='side-caption'>Printed Name:</span> ______________________________________
	   <br><span class='side-caption'>Store Name:</span> ______________________________________
	   <br><span class='side-caption'>Phone #:</span> ______________________________________     
	 
	 </td>	 
	</table>
	
	<div class='disclaimer'>
	 This timesheet was generated electronically by http://www.nowsavestore/timeclock.  
	 It is up to the employee to verify
	 the correctness of this timesheet before submitting, as errors might be present due to
	 the nature of the Timeclock system.
	</div>
</td>
	</table>
	";
                         	}
}
	?>
	</html>