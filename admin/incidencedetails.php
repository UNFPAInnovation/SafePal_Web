
<?php
	include('connect.php');
	$id=$_GET['id'];
	$result = mysql_query("SELECT * FROM incident_report_details where incident_report_id='$id'");
		while($row = mysql_fetch_array($result))
			{
				$iid=$row['incident_report_id'];
				$name=$row['survivor_name'];
				$gender=$row['survivor_gender'];
				$phone=$row['survivor_contact_phone_number'];
				$email=$row['survivor_contact_email'];
				$dob=$row['survivor_date_of_birth'];
				$loc=$row['incident_location'];
				$cdate=$row['incident_date_and_time'];
				$des=$row['incident_description'];
				$reporter=$row['incident_reported_by'];
				$nop=$row['number_of_perpetrators'];
				$pname=$row['perpetrator_name'];
				$pgender=$row['perpetrator_gender'];
				$page=$row['perpetrator_estimated_age'];
				$rel=$row['perpetrator_relationship'];
				$ploc=$row['perpetrator_location'];
				$status=$row['status'];
				
				
				
			}
?>
<form action="reportcase.php" method="post">
	<input type="hidden" name="prodid" value="<?php echo $id=$_GET['id'] ?>">
	
<table>
<tr>
<td>Incidence Code: <input type="text" name="name" value="<?php echo 'SFPINC'.$iid ?>" readonly class="ed"  style="width: 165px; align=right margin-left: 15px; border: 2px double #CCCCCC; padding:5px 10px;"/></td>
<td>Survivors's Name: <input type="text" name="gender" value="<?php echo $name ?>" readonly class="ed"  style="width: 165px; align=right margin-left: 15px; border: 2px double #CCCCCC; padding:5px 10px;"/></td>
</tr>	
<tr>
<td>Gender: <input type="text" name="phone" value="<?php echo $gender ?>" readonly class="ed"  style="width: 165px; align=right margin-left: 15px; border: 2px double #CCCCCC; padding:5px 10px;"/></td>
<td>Phone: <input type="email" name="password" value="<?php echo $phone ?>" readonly class="ed" style="width: 165px; align=right margin-left: 15px; border: 2px double #CCCCCC; padding:5px 10px;"/></td>
</tr>	
<tr>
<td>Email: <input type="text" name="phone" value="<?php echo $email ?>" readonly class="ed"  style="width: 165px; align=right margin-left: 15px; border: 2px double #CCCCCC; padding:5px 10px;"/></td>
<td>Date of Birth: <input type="email" name="password" value="<?php echo $dob ?>" readonly class="ed" style="width: 165px; align=right margin-left: 15px; border: 2px double #CCCCCC; padding:5px 10px;"/></td>
</tr>
<tr>
<td>Incidence location: <input type="text" name="phone" value="<?php echo $loc ?>" readonly class="ed"  style="width: 165px; align=right margin-left: 15px; border: 2px double #CCCCCC; padding:5px 10px;"/></td>
<td>Incidence date: <input type="email" name="password" value="<?php echo $cdate ?>" readonly class="ed" style="width: 165px; align=right margin-left: 15px; border: 2px double #CCCCCC; padding:5px 10px;"/></td>
</tr>
<tr>
<td>Incidence description: <input type="text" name="phone" value="<?php echo $des ?>" readonly class="ed"  style="width: 165px; align=right margin-left: 15px; border: 2px double #CCCCCC; padding:5px 10px;"/></td>
<td>Reported by: <input type="email" name="password" value="<?php echo $reporter ?>" readonly class="ed" style="width: 165px; align=right margin-left: 15px; border: 2px double #CCCCCC; padding:5px 10px;"/></td>
</tr>
<tr>
<td>N0. of perpetrators: <input type="text" name="phone" value="<?php echo $nop ?>" readonly class="ed"  style="width: 165px; align=right margin-left: 15px; border: 2px double #CCCCCC; padding:5px 10px;"/></td>
<td>Perpetrator's name: <input type="email" name="password" value="<?php echo $pname ?>" readonly class="ed" style="width: 165px; align=right margin-left: 15px; border: 2px double #CCCCCC; padding:5px 10px;"/></td>
</tr>
<tr>
<td>Perpetrator's gender: <input type="text" name="phone" value="<?php echo $pgender ?>" readonly class="ed"  style="width: 165px; align=right margin-left: 15px; border: 2px double #CCCCCC; padding:5px 10px;"/></td>
<td>Perpetrator's age: <input type="email" name="password" value="<?php echo $page ?>" readonly class="ed" style="width: 165px; align=right margin-left: 15px; border: 2px double #CCCCCC; padding:5px 10px;"/></td>
</tr>
<tr>
<td>Status: <input type="text" name="phone" value="<?php echo $status ?>" readonly class="ed"  style="width: 165px; align=right margin-left: 15px; border: 2px double #CCCCCC; padding:5px 10px;"/></td>

</tr>
</form>