<?php
	require_once('../auth.php');
?>
<html>
<head>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="febe/style.css" type="text/css" media="screen" charset="utf-8">
<script src="argiepolicarpio.js" type="text/javascript" charset="utf-8"></script>
<script src="js/application.js" type="text/javascript" charset="utf-8"></script>	
<!--sa poip up-->
<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
   <script src="lib/jquery.js" type="text/javascript"></script>
  <script src="src/facebox.js" type="text/javascript"></script>
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage : 'src/loading.gif',
        closeImage   : 'src/closelabel.png'
      })
    })
  </script>
  <html>
  <head>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="febe/style.css" type="text/css" media="screen" charset="utf-8">
<script src="argiepolicarpio.js" type="text/javascript" charset="utf-8"></script>
<script src="js/application.js" type="text/javascript" charset="utf-8"></script>	
<title>Admin Panel - track</title>
</head>
<body>
	<div id="container">
		<div id="adminbar-outer" class="radius-bottom">
			<div id="adminbar" class="radius-bottom" style="margin-top:0.9%">
				<a id="logo" href="dashboard.php"></a>
				<div id="details">
					<a class="avatar" href="javascript: void(0)">
					<img width="36" height="36" alt="avatar" src="img/avatar.jpg">
					</a>
					<div class="tcenter" style="margin-left:-20%">
					Hi
					<strong>Admin:<?php echo $_SESSION['fname']; ?></strong>
					!
					<br>
					<a class="alightred" href="../index.php">Logout</a>
					</div>
				</div>
			</div>
		</div>
		<div id="panel-outer" class="radius" style="opacity: 1;">
			<div id="panel" class="radius">
				<ul class="radius-top clearfix" id="main-menu">
					<li>
						<a class="active" href="dashboard.php">
							<img alt="Dashboard" src="img/m-dashboard.png" title='view current orders,instant message also sent to farmer'>
							<span>Dashboard</span>
						</a>
					</li>
					<li>
						<a href="user.php">
							<img alt="Users" src="img/m-users.png">
							<span>Users</span>
							<span class="submenu-arrow"></span>
						</a>
					</li>
					
					
					<li>
						<a href="levels.php">
							<img alt="Statistics" src="img/add.png" title='add user levels'>
							<span>Levels</span>
						</a>
					</li>
					<li>
						<a href="incidents.php">
							<img alt="Statistics" src="img/re.png" title='Manage the incidents'>
							<span>Incidents</span>
						</a>
					</li>
					<li>
					<a href="cso.php">
							<img alt="Statistics" src="img/m-statistics.png" title='Manage CSOs on the platform'>
							<span>CSO</span>
						</a>
					</li>
					<li>
						<a href="assignments.php">
							<img alt="Statistics" src="img/pr.png" title=' forecast the price changes for the commodity and generate graphs'>
							<span>Reports</span>
						</a>
					</li>
					<li>
						<a href="followup.php">
							<img alt="Dashboard" src="img/cont.png" title='view current contracts'>
							<span>Incident followup</span>
						</a>
					</li>
					<li>
						<a href="notifications.php">
							<img alt="Newsletter" src="img/m-newsletter.png" title='view and delete visitors comments.these may also be orders'>
							<span>Notifications</span>
						</a>
					</li> 
					<li>
						<a href="profile.php">
							<img alt="Articles" src="img/m-articles.png">
							<span>My profile</span>
							<span class="submenu-arrow"></span>
						</a>
					</li>
					<div class="clearfix"></div>
				</ul>
					<div class="clearfix"></div>
				</ul>
				
				<div id="content" class="clearfix">
					<label for="filter">Expert Filter</label> <input type="text" name="filter" value="" id="filter" />
				<a href="viewload.php">View CSO Load</a> &nbsp;&nbsp;<a href="viewstaffload.php">View CSO Load Report</a>
					<table cellpadding="1" cellspacing="1" id="resultTable">
						<thead>
							<tr>
								<th>CSO Name</th>
								<th> District</th>
								<th> Village</th>
								<th> Assign to a survivor </th>
								
							</tr>
						</thead>
						<tbody>
						<?php
							include('connect.php');
							$result = mysql_query("SELECT * FROM lecturers");
							while($row = mysql_fetch_array($result))
								{
									echo '<tr class="record">';
									
									echo '<td><div align="left">'.$row['tittle'].'</div></td>';
									echo '<td><div align="left">'.$row['fname'].'</div></td>';
									echo '<td><div align="left">'.$row['department'].'</div></td>';
									
									
									
									echo '<td><div align="left"><a rel="facebox" href="assign.php?id='.$row['ID'].'">Assign A  survivor</a> | <a href="#" id="'.$row['ID'].'" class="delbutton" title="Click To Delete">Un Assign a  survivor</a></div></td>';
									echo '</tr>';
								}
							?> 
						</tbody>
					</table>
				</div>
				<div id="footer" class="radius-bottom">
					2016 ©
					<a class="afooter-link" href="">Admin Panel - SafePal</a>
					by
					<a class="afooter-link" href="">UNFPA</a>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
	</div>
	<script src="js/jquery.js"></script>
  <script type="text/javascript">
$(function() {


$(".delbutton").click(function(){

//Save the link in a variable called element
var element = $(this);

//Find the id of the link that was clicked
var del_id = element.attr("id");

//Built a url to send
var info = 'id=' + del_id;
 if(confirm("Sure you want to delete this update? There is NO undo!"))
		  {

 $.ajax({
   type: "GET",
   url: "deleteroom.php",
   data: info,
   success: function(){
   
   }
 });
         $(this).parents(".record").animate({ backgroundColor: "#fbc7c7" }, "fast")
		.animate({ opacity: "hide" }, "slow");

 }

return false;

});

});
</script>
</body>
</html>