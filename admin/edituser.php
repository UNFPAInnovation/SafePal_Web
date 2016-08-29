<style type="text/css">
<!--
.ed{
border-style:solid;
border-width:thin;
border-color:#00CCFF;
padding:5px;
margin-bottom: 4px;
}
#button1{
text-align:center;
font-family:Arial, Helvetica, sans-serif;
border-style:solid;
border-width:thin;
border-color:#00CCFF;
padding:5px;
background-color:#00CCFF;
height: 34px;
}
-->
</style>
<?php
	include('connect.php');
	$id=$_GET['id'];
	$result = mysql_query("SELECT * FROM users where user_id 	='$id'");
		while($row = mysql_fetch_array($result))
			{
				$fname=$row['fullname'];
				$username=$row['username'];
				$password=$row['password'];
				$usergroup=$row['user_categories_user_category_id'];
			}
?>
<form action="execedituser.php" method="post">
	<input type="text" hidden name="id" value="<?php echo $id=$_GET['id'] ?>">
	Full name:<br><input type="text" name="fname" value="<?php echo $fname ?>" class="ed"><br>
	User Name:<br><input type="text" name="username" value="<?php echo $username ?>" class="ed"><br>
	Password:<br><input type="text" name="password" value="<?php echo $password ?>" class="ed"><br>
	Level<br />
     <select name="level" class="ed">
			<?php
			include('connect.php');
			$result = mysql_query("SELECT * from user_categories");
			while ($row = mysql_fetch_array($result)){?>
			<option value="<?php echo $row['user_category']?>"><?php echo $row['user_category']?></option>
			<?php 
			}			
			?>
			</select><br />
			
	<input type="submit" value="Edit User" id="button1">
</form>