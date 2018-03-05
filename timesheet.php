<?php
include('session.php');
?>
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
	
<?php
$var=$login_session;
include 'EmployeeDatabaseConnection.php';
$conn= new EmployeeDatabaseConnection($var);
$DAYS=date('j');
$time=date('Y-m-d h:i:s A');
$MONTH=strtoupper(date('F'));
$days = date("t");
echo "
	<table width='650'>
	<td>
				<div style='position: absolute; top: 10px; left: 10px;'><a href='javascript:window.print();'>Print</a></div>
	      <div class='large-job-class'>04</div>
	
				<center>
				    <b>
  						Dhaliwal Inc. 
  						<br>
  						04 Employee Workers
						</b>
						<br>
						<div style='margin-top: 5px; font-size: 0.8em;'>
						<b>Generated electronically by http://webservices.ulm.edu/timeclock</b>
						<br>for position: Cashier 
						</div>
				</center>
	
				<table cellpadding='3' cellspacing='3' width='100%'>
					<tr>
						<td style='font-size: 1.2em;' valign='top' align='right' width='12%'><b>&nbsp;&nbsp;CWID:</b></td>
						<td valign='top' class='urow'><b></b></td>
						<td>&nbsp;&nbsp;<td>
						<td style='font-size: 1.2em;' valign='top' width='8%'><b>Name:</b></td>
						<td valign='top' class='urow'><b></b></td>
					</tr>	
					<tr>
						<td style='font-size: 1.2em;' valign='bottom' align='right'><b>Acct Name:</b></td>
						<td valign='bottom' class='urow' width='200'><b></b></td>
						<td>&nbsp;&nbsp;<td>
						<td style='font-size: 1.2em;' valign='bottom'><b>Acct #:</b></td>
						<td valign='top'>
								<table border='1' class='little-table'>
									<tr style='font-size: 1.2em;' align='center'>
										<th width='28%'>Fund</th>
										<th width='28%'>Orgn</th>
										<th width='15%'>Prog</th>
										<th width='29%'>Account</th>
									</tr>
									<tr style='font-size: 1.5em;' align='center'>
										<td><b>275024</b></td>
										<td><b>301803</b></td>
										<td><b>51</b></td>
										<td><b>601230</b></td>
									</tr>
								</table>
						</td>
					</tr></table>
				
				<div class='notice'>
					Time sheet below must be completed and returned to the Payroll Office by last
					working day of the pay period.
				</div><div class='month-and-year'>	
							 Month: <u>&nbsp; &nbsp; &nbsp; August &nbsp; &nbsp; &nbsp;</u> &nbsp; &nbsp; &nbsp; 
							 Year: <u>&nbsp; &nbsp; &nbsp; 2016 &nbsp; &nbsp; &nbsp;</u>
						 </div>
				</div><div class='month-and-year'>	
							 From: <u> &nbsp; &nbsp; &nbsp;</u> &nbsp; &nbsp;
							 To: <u> &nbsp; &nbsp; &nbsp;</u>
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
						
						$query = "SELECT * FROM $MONTH";
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
							echo "
								<td style='border: 1px solid;' align='center'>{$row["Days"]}</td><td style='border: 1px solid;'>"; echo date("h:i:s A",strtotime($row["FirstIn"])). "</td><td style='border: 1px solid;'>"; echo date("h:i:s A",strtotime($row["FirstOut"])). "</td><td style='border: 1px solid;'></div>"; echo date("h:i:s A",strtotime($row["SeconIn"])). "</td><td style='border: 1px solid;'>"; echo date("h:i:s A",strtotime($row["SecondOut"])). "</td><td style='border: 1px solid;'>"; echo date("h:i:s A",strtotime($row["ThirdIn"])). "</td><td style='border: 1px solid;'>"; echo date("h:i:s A",strtotime($row["ThirdOut"])). "</td><td style='border: 1px solid;' align='center'>{$row["Total"]}</td></tr><tr>
							
							";
							
						}
						while (!($days-($x-1))==0)
						{
								echo "
							      	<td style='border: 1px solid;' align='center'>$x</td><td style='border: 1px solid;'></td><td style='border: 1px solid;'></td><td style='border: 1px solid;'></div></td><td style='border: 1px solid;'></td><td style='border: 1px solid;'></td><td style='border: 1px solid;'></td><td style='border: 1px solid;' align='center'></td></tr><tr>
						             ";
						             $x++;
						}
						echo "
							<td colspan='4'>&nbsp;</td>
							<td style='border: 1px solid; border-bottom: 0;' colspan='3' align='left'><b>Total Hours Worked</b></td>
							<td style='border: 1px solid;'><b></b></td>
						</tr><tr style='font-size: 1.1em;' align='center'>
							<td colspan='4'>&nbsp;</td>
							<td style='border: 1px solid; border-top: 0; border-right:0;' colspan='2' align='left'><b>Hourly Wage</b></td>
							<td style='border: 1px solid; border-top: 0; border-left:0;'><b></b></td>
							<td style='border: 1px solid;'><b></b></td>
						</tr></table>
	
	<br>
	
	<table border='0' width='100%' class='table-below-numbers' cellspacing='5'>
	 <td align='center' style='border: 1px solid;' width='50%'>
	   <br><br>______________________________________________________<br>
	   <span class='under-caption'>STUDENT SIGNATURE</span>&nbsp;&nbsp;&nbsp; DATE<br>
	   <br><br>______________________________________________________<br>
	   <span class='under-caption'>SUPERVISOR SIGNATURE</span>&nbsp;&nbsp; DATE
	   	   
	 </td>
	 
	 <td valign='top' style='border: 1px solid; line-height: 23px;' width='50%'>
	     <div style='background-color: #aaa; text-align: center;'><b>SUPERVISOR</b></div>
	   <span class='side-caption'>Printed Name:</span> ______________________________________
	   <br><span class='side-caption'>Department:</span> ______________________________________
	   <br><span class='side-caption'>Phone #:</span> ______________________________________     
	 
	 </td>	 
	</table>
	
	<div class='disclaimer'>
	 This timesheet was generated electronically by http://webservices.ulm.edu/timeclock.  
	 It is up to the student to verify
	 the correctness of this timesheet before submitting, as errors might be present due to
	 the nature of the Timeclock system.
	</div>
	</td>
	</table>
	";
                         	}
	?>