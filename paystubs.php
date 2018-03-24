<?php
include('session.php');
?>
<html>
	<head>
    	<?php 
		 $conn = new DatabaseConnection();
		$query="SELECT * FROM `INFORMATION`";
		$result = $conn->returnQuery($query);
		$row = $result->fetch_assoc();
		?>
		
		<?php 
		include ('EmployeeDatabaseConnection.php');
		$conn = new EmployeeDatabaseConnection($login_session);
		$query="SELECT * FROM `INFORMATION`";
		$result = $conn->returnEmployeeQuery($query);
		$row1 = $result->fetch_assoc();
		?>
		<?php 
		$query="SELECT * FROM `PAYSTUBS`
		        WHERE Month='MARCH'";
		$result = $conn->returnEmployeeQuery($query);
		$row2 = $result->fetch_assoc();
		?>
			<title> <?php echo $row1["Fname"]."&nbsp;".$row1["Lname"]; ?></title>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
			<style type="text/css" scoped>
				table.GeneratedTable {
					width: 100%;
					background-color: #FFFFFF;
					border-collapse: collapse;
					border-width: 0px;
					border-color: white;
					color: black;
				}

				table.GeneratedTable td {
				padding-left:14px;
				}
				table.GeneratedTable th {
					padding: 5px 3px 5px 14px;
				}
				table.tableEnd {
					width: 35%;
					background-color: #FFFFFF;
					border-collapse: collapse;
					border-width: 1px;
					border-color: white;
					border-style: solid;
					color: darkblue;
					float: right;
				}
				table.tableEnd thead {
					background-color: #0c5add;
					color: white;
				}
				table.GeneratedTable thead {
					background-color: #0c5add;
					color: white;
				}
				table.tableEnd th {
					padding: 5px 3px 5px 14px;
					text-align:center;
				}
				tr.spaceUpper > td {
					padding-top: 0.5em;
				}
				.firstRow {
					margin-top: 0.5em;
					background-color: white;
				}
				
				.paystubday {
					text-align: right;
					top: 3em;
				}
				.secondRow {
					border: 1px;
					margin-top: 1em;
					padding: 2em 1em 0.5em 0em;
					background-color: #c3d8fa;
					color: #333333;
				}
				.amountcheck {
					margin-left: 3em;
					font-weight: 900;
				}
				.salarynumber {
					text-align: right;
				}
				.thisisnotcheque {
					color: #edf0f5;
				}
				.thirdRow {
					background-color: #ffffff;
					padding: 2em 1em 1em 0em;
				}
				.paytotheorderof {
					color: #cccccc;
				}
				.earningStatement {
					color: #0c5add;
					text-align: right;
					margin-top: 2em;
					font-weight: 900;
				}
				.employeeAddress {
					text-align: center;
					font-weight: 400;
				}
				@media print {
					.noprint {
						display: none;
					}
					.salarynumber {
						text-align: right;
						top: -2em;
					}
					.paystubday {
						text-align: right;
						top: -1em;
					}
					.earningStatement {
						text-align: right;
						top: -7em;
						font-weight: 900;
						color: #0c5add !important;
						-webkit-print-color-adjust: exact;
					}
					.forthRow {
						margin-bottom: -4em;
					}
					.firstRow {
						margin-bottom: -1em;
					}
					.secondRow {
						margin-bottom: -1em;
					}
					.employeeAddress {
						top: -1em;
						left: -4em;
					}
				}
				@media print {
					table.GeneratedTable thead {
						background-color: #0c5add !important;
						-webkit-print-color-adjust: exact;
						font-size: 13px;
					}
					table.tableEnd thead {
						background-color: #0c5add !important;
						-webkit-print-color-adjust: exact;
						font-size: 13px;
					}
					.secondRow {
						background-color: #c3d8fa !important;
						-webkit-print-color-adjust: exact;
					}
				}
				@media print {
					.GeneratedTable th {
						color: white !important;
					}
					.GeneratedTable td {
						font-size: 12px;
					}
					.tableEnd th {
						color: white !important;
					}
					 .printStyle {margin-top:9em;}
				.background{
				    border: 0.5px solid black;
				    padding:0.2em;
				}
				}
				
			</style>
		</head>
		<body class="background">
			<div class="container">
				<div class="row firstRow">
					<div class="col-sm-8 employeeName">
						<?php echo $row["Name"];?>
						<br>
					    	<?php echo $row["Streetaddress"];?>
						<br>
							<?php echo $row["Citystate"];?>
					</div>
					<div class="col-sm-4 paystubday">
						<?php 
					echo date_format(date_create($row2["Paydate"]),"F d, Y");
					?>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row secondRow">
					<div class="col-sm-8 SalaryAmount">
						Pay One Thousand Four Hundred Fifty One And Thirty Three Cents
					</div>
					<div class="col-sm-4 salarynumber">
						<div class="amountcheck">
							$ <?php echo $row2["NetAmount"];?>
							</div class="thisisnotcheque">This is not a check
						</div>
					</div>
				</div>
				<div class="container">
					<div class="row thirdRow">
						<div class="col-sm-2 paytotheorderof">
							Pay to the order of
						</div>
						<div class="col-sm-2 employeeAddress" style="text-align: center;">
						    <div style="display: inline-block; text-align: left;">
						    <?php echo $row1["Fname"]."&nbsp;".$row1["Lname"]; ?>
							<br>
							<?php echo $row1["Streetaddress"];?>
							<br>
							<?php echo $row1["Citystate"];?>
						</div>
						</div>
					</div>
				</div>
				<div class="container">
					<div class="row forthRow">
						<div class="col-sm-8 companyAddress">
							<b>Company Information</b>
							<br>
							<?php echo $row["Name"];?>
							<br>
							<?php echo $row["Streetaddress"];?>	<?php echo $row["Citystate"];?>
							<br>
							PHONE:	<?php echo $row["Phone"];?>
							<br>
							EIN:<?php echo $row["Ein"];?>
						</div>
						<div class="col-sm-4 earningStatement">
							Earning Statement
						</div>
					</div>
				</div>

				<div class="container">
					<div class="row">
						<table class="GeneratedTable">
							<thead>
								<tr>
									<th>Employee Information</th>
									<th style="text-align:center;">Social Sec. ID</th>
									<th style="text-align:center;">Position</th>
									<th style="text-align:center;">Start Date</th>
									<th style="text-align:center;">End Date</th>
									<th style="text-align:center;">Check Date</th>
								</tr>
							</thead>
							<tbody>
								<tr class="spaceUpper">
									<td width="25%" style="padding-left:14px;"><?php echo $row1["Fname"]."&nbsp;".$row1["Lname"]; ?>
							<br>
							<?php echo $row1["Streetaddress"];?>
							<br>
							<?php echo $row1["Citystate"];?></td>
									<td style="text-align:center;"><?php echo $row1["Ssn"];?></td>
									<td style="text-align:center;"><?php echo $row1["Position"];?></td>
									<td style="text-align:center;"><?php 
				                	echo date_format(date_create($row2["Startdate"]),"m/d/Y");
				                	?></td>
									<td style="text-align:center;"><?php 
				                	echo date_format(date_create($row2["Enddate"]),"m/d/Y");
				                	?></td></td>
									<td style="text-align:center;"><?php 
				                	echo date_format(date_create($row2["Paydate"]),"m/d/Y");
				                	?></td></td>
								</tr>
							</tbody>
					</div>
				</div>
				<div class="container" style="margin-bottom:1em;">
					<div class="row">
						<table class="GeneratedTable">
							<thead>
								<tr>
									<th width="16%">Earning</th>
									<th width="6%" style="text-align:center;">Rate</th>
									<th width="6%" style="text-align:center;">Hour</th>
									<th width="10%" style="text-align:center;">Current</th>
									<th width="13%" style="text-align:center;">Year to Date</th>
									<th width="21%">Dedutction</th>
									<th width="14%" style="text-align:center;">Current</th>
									<th width="14%"style="text-align:center;">Year to Date</th>
								</tr>
							</thead>
							<tbody>
								<tr class="spaceUpper">
									<td width="16%" style="background-color:#e6e8ec; padding-left:14px;" >Regural Earning</td>
									<td width="6%" style="text-align:center;"><?php echo number_format($row2["Srate"],2);?></td>
									<td width="6%" style="text-align:center;"><?php echo number_format($row2["Thour"],2);?></td>
									<td width="10%" style="text-align:center;"><?php echo number_format($row2["GrossAmount"],2);?></td>
									<td width="13%" style="text-align:center;"><?php echo number_format(12.00 * $row2["GrossAmount"],2);?></td>
									<td width="21%" style="background-color:#e6e8ec;">Federal</td>
									<td width= "14%" style="text-align:center;"><?php echo number_format($row2["FederalTaxWithholding"],2);?></td>
									<td width="14%" style="text-align:center;"><?php echo number_format(12 * $row2["FederalTaxWithholding"],2);?></td>
								</tr>
								<tr>
									<td width="16%"style="background-color:#e6e8ec; padding-left:14px;"></td>
									<td width="6%"></td>
									<td width="6%"></td>
									<td width="10%"></td>
									<td width="13%"></td>
									<td width="21%" style="background-color:#e6e8ec">State</td>
									<td width="14%" style="text-align:center;"><?php echo number_format($row2["StateTaxWithholding"],2);?></td>
									<td width="14%" style="text-align:center;"><?php echo number_format(12 * $row2["StateTaxWithholding"],2);?></td>
								</tr>
								<tr>
								<tr>
									<td width="16%" style="background-color:#e6e8ec; padding-left:14px;"></td>
									<td width="6%"></td>
									<td width="6%"></td>
									<td width="10%"></td>
									<td width="13%"></td>
									<td width="21%" style="background-color:#e6e8ec">Social Security</td>
									<td width="14%" style="text-align:center;"><?php echo number_format($row2["Socialdudction"],2);?></td>
									<td width="14%" style="text-align:center;"><?php echo number_format(12.00 * $row2["Socialdudction"],2);?></td>
								</tr>
								<tr>
									<td width="16%"style="background-color:#e6e8ec; padding-left:14px;"></td>
									<td width="6%"></td>
									<td width="6%"></td>
									<td width="10%"></td>
									<td width="13%"></td>
									<td width="21%"style="background-color:#e6e8ec">Health Insurance Tax</td>
									<td width="14%"style="text-align:center;"><?php echo $row2["Healthdudction"];?></td>
									<td width="14%"style="text-align:center;"><?php echo number_format(12.00 * $row2["Healthdudction"],2);?></td>
								</tr>
							</tbody>
					</div>
				</div>
				<div class="container" style="margin-bottom:1em;">
					<div class="row">
						<table class="GeneratedTable">
							<thead>
								<tr>
									<th width="16%" style="padding-left:14px;">Gross Earning</th>
									<th width="6%" style="text-align:center; background-color:#e6e8ec; color:white;"></th>
									<th width="6%" style="text-align:center; background-color:#e6e8ec; color:white;"></th>
									<th width="10%" style="text-align:center; background-color:#e6e8ec; color:black;"><?php echo number_format($row2["GrossAmount"],2);?></th>
									<th width="13%" style="text-align:center; background-color:#e6e8ec; color:black;"><?php echo number_format(12 * $row2["GrossAmount"],2);?></th>
									<th width="21%">Gross Dedutctions</th>
									<th width="14%"style="text-align:center; background-color:#e6e8ec; color:black;"><?php echo number_format($row2["TotalPersonalDeductions"],2);?></th>
									<th width="14%"style="text-align:center; background-color:#e6e8ec; color:black; "><?php echo number_format(12 * $row2["TotalPersonalDeductions"],2);?></th>
								</tr>
							</thead>
					</div>
				</div>
				<div class="container printStyle" style="margin-bottom:0.5em;">
					<div class="row">
						<table class="tableEnd" style="margin-top:0.5em;">
							<thead>
								<tr>
									<th width="20%">Check No</th>
									<th class="lastth" width="20%" style="background-color:#d5e2f8; text-align:center; color:black">#<?php echo $row2["Checkno"];?></th>
								</tr>
							</thead>
						</table>
					</div>
				</div>
				<div class="container">
					<div class="row">
						<table class="tableEnd">
							<thead>
								<tr>
									<th width="20%">Net Pay</th>
									<th class="lastth" width="20%" style="background-color:#d5e2f8; text-align:center; color:black">$ <?php echo $row2["NetAmount"];?></th>
								</tr>
							</thead>
						</table>
					</div>
				</div>
				<div class="container">
					<div class="row">
						<table class="tableEnd">
							<thead>
								<tr>
									<th width="20%">YTD Net Pay</th>
									<th class="lastth" width="20%" style="background-color:#d5e2f8; text-align:center; color:black" >$ <?php echo number_format(12* $row2["NetAmount"],2);?></th>
								</tr>
							</thead>
						</table>
					</div>
				</div>
		</body>
</html>