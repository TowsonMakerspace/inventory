<script src="/assets/js/terminal.js"></script>
<link
	rel="stylesheet" type="text/css" href="/assets/css/terminal.css" />
<body onLoad="clear()">


<?php if(isset($check) && isset($send)){?>
	<table class="center">
		<tr>
			<td>Check Status</td>
			<td>Record Status</td>
		</tr>
		<tr>
			<td> <?php echo $check;?></td>
			<td> <?php echo $send;?></td>
		</tr>
	</table>
<?php }?>

<?php if(isset($check) && empty($send)){?>
	<table class="center">
		<tr>
			<td><h1>Docutrack Lookup: Nothing Recorded</h1></td>
		</tr>
		<tr>
			<td style='font-size:25px;'> <?php echo $check;?></td>
		</tr>
	</table>
<?php }?>
Simplicity: Choose Options Before Scanning
	<form action="/terminal/submit/<?php echo $small;?>" name="form1" id="form1" method="POST"
		onSubmit="{calc(); return false;}">
		<table class="center" width="500" border="1">
			<tr>
				<td><select name='todo' onChange="form1.text1.focus()">
						<?php if(isset($todo)){?>
						<option><?php echo $todo;?></option>
						<?php }?>
						<option>LOOKUP</option>
						<option>RECORD</option>
				</select></td><td><select name='document' onChange="form1.text1.focus()">
						<?php if(isset($last)){?>
						<option><?php echo $last;?></option>
						<?php }?>
						<option>OUT WITH COURIER</option>
						<option>SIGNED AFFIDAVIT</option>
						<option>FILED AFFIDAVIT</option>
						<optgroup label="Deed">
						<option>LIEN APPLICATION</option>
						<option>LIEN CERTIFICATE</option>
						<option>DEED DROP OFF</option>
						<option>DEED APPROVED</option>
						<option>DEED RECORDED</option>
						<option>DEED DEFICIENCY: CLIENT</option>
						<option>DEED DEFICIENCY: OFFICE</option>
						<option>DEED REJECTED</option>
						</optgroup>
						<optgroup label="E-File">
						<option>E-FILE SUBMITTED</option>
						<option>E-FILE ACCEPTED</option>
						<option>E-FILE REJECTED</option>
						</optgroup>
						<optgroup label="Old Options">
						<option>OUT WITH SERVER-FBS</option>
						<option>PRINTED AFFIDAVIT</option>
						<option>NOTARIZED AFFIDAVIT</option>
						<option>NOTARIZED AFFIDAVIT</option>
						<option>OTD/SOT READY FOR COURIER</option>
						<option>OTD/SOT FILED/RECORDED</option>
						</optgroup>
				</select></td>
				<td>
					<select name="month"><?php echo $month;?></select>
				</td>
				<td>
					<select name="day"><?php echo $day;?></select>
				</td>
				<td>
					<select name="year"><?php echo $year;?></select>
				</td>
			</tr>
		</table>
		<table class="center" width="500" border="1">
			<tr>
				<td>Scan Document Barcode<br>
						<input name="text1"
							onKeyUp="toCount('text1','sBann','{CHAR} characters left',100);"
							id="text1" value="" onChange="upda()">
					</td>
					<td>
					<span id="sBann" class="minitext">100 bytes left.</span>
					</td>
			</tr>
		</table>
</form>
<script>document.form1.text1.focus()</script>
