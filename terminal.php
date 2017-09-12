<?PHP 
include_once('header.php'); 
$month = mkmonth();
$day = mkday();
$year = mkyear();
?>
<center>
<script src="terminal.js"></script>
<link
	rel="stylesheet" type="text/css" href="/assets/css/terminal.css" />
<body onLoad="clear()">

	<pre><?PHP if (isset($_POST)){ print_r($_POST); } ?></pre>
	
	
	<?PHP
	if (isset($_POST['name']) && isset($_POST['text1']) ){
		$parts = explode('-',$_POST['text1']);
		$hardware_id = str_replace('%','',$parts[2]);
		$member_id = '1';
		$action = $_POST['document'];
		if ($_POST['todo'] == 'RECORD'){
			echo "RECORD: $action hardware $hardware_id user $member_id ";	
			if ($action == 'CHECK OUT'){
				mysqli_query($database,"insert into CHECKOUT (hardware_id, users_id, date_out) values ('$hardware_id', '$member_id', NOW() )") or die(mysqli_error($database));
			}else{
				mysqli_query($database,"update CHECKOUT set date_back = NOW() where hardware_id = '$hardware_id' and users_id = '$member_id' ") or die(mysqli_error($database));
			}
		}else{
			echo "Lookup: hardware $hardware_id";	
		}
	}
	?>
	
	

<?php if(isset($check) && isset($send)){?>
	<table class="center">
		<tr>
			<td>Check</td>
			<td>Record</td>
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
			<td><h1>Inventory Lookup: Nothing Recorded</h1></td>
		</tr>
		<tr>
			<td style='font-size:25px;'> <?php echo $check;?></td>
		</tr>
	</table>
<?php }?>

	<form action="terminal.php" name="form1" id="form1" method="POST"
		onSubmit="{calc(); return false;}">
		<table class="center" width="500" border="1">
			<tr>
				<td><select name='todo' onChange="form1.text1.focus()">
						<?php if(isset($todo)){?>
						<option><?php echo $todo;?></option>
						<?php }?>
					
						<option>RECORD</option>
						<option>LOOKUP</option>
				</select></td><td><select name='document' onChange="form1.text1.focus()">
						<?php if(isset($last)){?>
						<option><?php echo $last;?></option>
						<?php }?>
						
						<optgroup label="hardware">
						<option>CHECK IN</option>
						<option>CHECK OUT</option>
						
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
		
		
		<table  class="center" width="500" border="1">
			<tr>
				<td>Member Name: <input name="name" value="make this a dropdown"></td>
				
				<td>Scan Inventory Barcode<br>
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
	</center>
