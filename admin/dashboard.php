<?php
	require_once('../auth.php');

if(isset($_SESSION['Admin'])!='' && isset($_SESSION['password'])!='')
{
$staff = $_SESSION['Admin'];
?>

	<?php
							include('connect.php');
							$sql = mysql_query("SELECT COUNT(incident_report_id) from  incident_report_details WHERE status='New'");
							$result = mysql_fetch_array($sql);
												
												?> 		
<html>
<head>
<head>
<link rel="shortcut icon" href="img/safe.png" type="image/x-icon">
</head>
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
<title>SafePal - Admin Dashboard</title>
</head>
<body>
	<div id="container">
		<div id="adminbar-outer" class="radius-bottom">
			<div id="adminbar" class="radius-bottom" style="margin-top:0.9%">
				<a id="logo" href="dashboard.php"></a>
				
			</div>
		</div>
		<div id="panel-outer" class="radius" style="opacity: 1" style="margin-top:10%">
			<div id="panel" class="radius" >
				<ul class="radius-top clearfix" id="main-menu">
					<li>
						<a class="active" href="dashboard.php">
							<img alt="Dashboard" src="img/m-dashboard.png" title='Home'>
							<span>Dashboard</span>
						</a>
					</li>
					<li>
						<a href="user.php">
							<img alt="Users" src="img/m-users.png" title='manage users'>
							<span>Users</span>
							<span class="submenu-arrow"></span>
						</a>
					</li>
					
					
					<li>
						<a href="levels.php">
							<img alt="Statistics" src="img/add.png" title='manage user levels'>
							<span>User Groups</span>
						</a>
					</li>
					<li>
						<a href="incidents.php">
							<img alt="Statistics" src="img/re.png" title='manage Reported Incidents'>
							<span>Incidents</span>
						</a>
					</li>
					<li>
					<a href="cso.php">
							<img alt="Statistics" src="img/m-statistics.png" title='manage CSOs'>
							<span>CSO</span>
						</a>
					</li> 
					<li>
						<a href="reports.php">
							<img alt="Statistics" src="img/pr.png" title='Generate Reports'>
							<span>Reports</span>
						</a>
					</li>
					<li>
						<a href="followup.php">
							<img alt="Dashboard" src="img/cont.png" title='view Summary'>
							<font  size="1px"><span>Followup Summary</span></font>
						</a>
					</li>
					<li>
						<a href="newincidents.php">
							<img alt="Newsletter" src="img/m-newsletter.png" title='View New Incidents'>
							<span><font color="red" size="1px"> <?php echo $result[0]; ?> </font>New Incidents</span>
						</a>
					</li> 
					<li>
						<a href="settings.php">
							<img alt="Articles" src="img/m-articles.png" title='System Settings'>
							<span>Settings</span>
							<span class="submenu-arrow"></span>
						</a>
					</li>
					
					<div id="details">
					
					<div class="tcenter" style="margin-left:-20%">
					Hi
					<strong>Admin:<?php echo $_SESSION['fname']; ?></strong>
					!
					<br>
					<a href="../login.php">Logout</a>
					</div>
				</div>
					
					<div class="clearfix"></div>
				</ul>
				<div id="content" class="clearfix">
					<label for="filter">Expert Filter</label> <input type="text" name="filter" value="" id="filter" />
			<table cellpadding="1" cellspacing="1" id="resultTable">
						<thead>
							<tr>
								
								<th> Activity </th>
								<th> Number</th>
								
								<th> Details </th>
							
							</tr>
						</thead>
						<tbody>
						<?php
							include('connect.php');
							$sql = mysql_query("SELECT COUNT(incident_report_id) from  incident_report_details WHERE status='New'");
							$result = mysql_fetch_array($sql);
							
							$sql2 = mysql_query("SELECT COUNT(incident_report_id) from  incident_report_details WHERE status='Does Not Want to be Contacted'");
							$result2 = mysql_fetch_array($sql2);
							
							$sql3 = mysql_query("SELECT COUNT(incident_report_id) from  incident_report_details WHERE status='WTBC'");
							$result3 = mysql_fetch_array($sql3);
							
								$sql33 = mysql_query("SELECT COUNT(incident_report_id) from  incident_report_details WHERE status='DC'");
							$result33 = mysql_fetch_array($sql33);
							
								$sql4 = mysql_query("SELECT COUNT(cso_details_id) from  cso_details WHERE cso_email='Active'");
							$result4 = mysql_fetch_array($sql4);
							
						
							
												?> 			
									<tr class="record">
									
									
									<td><div align="left">New Notifications </div></td>
									<td><div align="left"><?php echo $result[0]; ?></div></td>
									<td><div align="left"><a href="newincidents.php?id='.$row['incident_report_id'].'" title="view Details">View all the <?php echo $result[0]; ?> New Notificitaion Details</a>  </div></td>
									
									</tr>
									
									<tr class="record">
									
									
									<td><div align="left">Do not want to be contacted</div></td>
									<td><div align="left"><?php echo $result2[0]; ?></div></td>
									<td><div align="left"><a href="policeincidents.php?id='.$row['incident_report_id'].'" title="view Details">View Details</a>  </div></td>
									
									</tr>
									
									<tr class="record">
									<td><div align="left">Waiting to be contacted</div></td>
									<td><div align="left"><?php echo $result3[0]; ?></div></td>
									<td><div align="left"><a href="incidents.php?id='.$row['incident_report_id'].'" title="view Details">View Details</a>  </div></td>
									
									</tr>
								
								<tr class="record">
									<td><div align="left">Directly Supported</div></td>
									<td><div align="left"><?php echo $result33[0]; ?></div></td>
									<td><div align="left"><a href="incidents.php?id='.$row['incident_report_id'].'" title="view Details">View Details</a>  </div></td>
									
									</tr>
								<tr class="record">
									<td><div align="left">Called and Refused to  Pick</div></td>
									<td><div align="left"><?php echo $result33[0]; ?></div></td>
									<td><div align="left"><a href="followup.php?id='.$row['incident_report_id'].'" title="view Details">View Victim's Details</a>  </div></td>
									
									</tr>
								<tr class="record">
									<td><div align="left">Active CSOs</div></td>
									<td><div align="left"><?php echo $result4[0]; ?></div></td>
									<td><div align="left"><a href="cso.php?id='.$row['cso_details_id'].'" title="view Details">View CSO Details</a>  </div></td>
									
									</tr>
									
							
						</tbody>
					</table>
				</div>
				<div id="footer" class="radius-bottom">
					
					<a class="afooter-link" href="">© Copyright 2017 - SafePal/UNFPA</a>
					
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
 if(confirm("Sure you want to delete this record? There is NO undo!"))
		  {

 $.ajax({
   type: "GET",
   url: "deleteres.php",
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
<?php
}
else{
header ('location:/index.php');
}
?>