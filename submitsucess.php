<!DOCTYPE HTML>

<html>
	<head>
		<title>SafePal</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		
		
		
		<link href="admin/css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="admin/febe/style.css" type="text/css" media="screen" charset="utf-8">
<script src="admin/argiepolicarpio.js" type="text/javascript" charset="utf-8"></script>
<script src="admin/js/application.js" type="text/javascript" charset="utf-8"></script>	
<!--sa poip up-->
<link href="admin/src/report/facebox.css" media="screen" rel="stylesheet" type="text/css" />
   <script src="admin/lib/jquery.js" type="text/javascript"></script>
  <script src="admin/src/report/facebox.js" type="text/javascript"></script>
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage : 'src/loading.gif',
        closeImage   : 'src/closelabel.png'
      })
    })
  </script>
  
      <style type="text/css">

        ul{
            padding: 0;
            list-style: none;
            background: #ffffff;
			text-align: right;
			margin-top:10px
        }
        ul li{
            display: inline-block;
            position: relative;
            line-height: 21px;
            text-align: left;
        }
        ul li a{
            display: block;
            padding: 8px 25px;
            color: #333;
            text-decoration: none;

        }
        ul li a:hover{
            color: #fff;
            background: #939393;
        }

        ul li ul.dropdown{
            min-width: 100%; /* Set width of the dropdown */
            background: #f2f2f2;
            display: none;
            position: absolute;
            z-index: 999;
            left: 0;
        }

        ul li:hover ul.dropdown{

            display: block; /* Display the dropdown */
        }
        ul li ul.dropdown li{

            display: block;

        }

    </style>
<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:700italic,400,300,700' rel='stylesheet' type='text/css'>
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/init.js"></script>
<script type="text/javascript">
<!--
    function toggle_visibility(id) {
       var e = document.getElementById(id);
       if(e.style.display == 'block')
          e.style.display = 'none';
       else
          e.style.display = 'block';
    }
//-->
</script>
		<style type="text/css">
		body {
	background-color: #CCC;
}
        </style>
<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->

	</head>
	<body bgcolor="#808080" class="homepage">

	<!-- Header -->
<div id="header">
			<div class="container">
					
				<!-- Logo -->
										
<div style="position:relative; left: 0; top: 0;">    
<img src=".\images\logo1.png" style="position:relative;width:140px;height:90px;float:left; margin-top:-25px;">
<div style="position:relative; left: 30; top: 0;" id="logo">
						<h1 align="left"><a href="#">SafePal</a></h1> 
 
					</div>
</div>
				
						
				
				
				 <ul>
            <div style="margin-top: -70px;">
           
            <li class="active">

                <a href="#">Report an Incidence &#9662;</a>

                <ul class="dropdown">

                    <li><a  rel="facebox" href="reportingincidence.php">For myself</a></li>

                    <li><a rel="facebox" href="reportingincidencefrd.php">For a Friend</a></li>

                    
                </ul>

            </li>

            <li><a href="connectwithus.php">Connect with Us</a></li>
 <li><a href="help.php">Help</a></li>
        </ul>
				
				
				
				

			</div>
		</div>
	<!-- Header -->
		
	<!-- Banner -->
		 <div id="banner">
                  <div style="position:relative; left: 0; top: 0;">
 <a href=".\images\Safepal.apk" download = "Safepal.apk">
<img src=".\images\ee.png"
style="position:relative;width:180px;height:80px;float:right;"> </a>
</div>
                <div class="container">

              </div>
                </div>
	<!-- /Banner -->

	<!-- Main -->
<div id="page">

			<!-- Extra -->
			<div id="marketing" class="container" style="margin-top: -5%;color:#D71D5B;size:150px";align="center">
			<?php
							include('connect.php');
							$result = mysql_query("SELECT * FROM incident_report_details ORDER BY incident_report_id DESC LIMIT 1");
							while($row = mysql_fetch_array($result))
								{
		echo  '<p align="center" > <strong align="right" style="color:red;"><font size="6">Thank you very much, the incident has been Recorded with Reference number SFPINC'.$row['incident_report_id'].'</font> </strong></p>';
				}
							?> 
				<p align="center" style="color:red;"><strong align="right">Do you wish to be contacted?.</strong></p>
				
					<p align="center" style="color:blue;"><strong align="right"> <a rel="facebox" href="contactincidence.php">YES</a> &nbsp;&nbsp;
					<a rel="facebox" href="no.php">NO</a> &nbsp;&nbsp;
					<a href="index.php">Go back to Home page</a></strong></p>
													 

			</div>
			<!-- /Extra -->
				
			<!-- Main -->
						
					</div>
		
			<!-- Main -->

	<!-- /Main -->

	<!-- /Featured -->


				</div>
			</div>
		</div>
	<!-- /Footer -->

	<!-- Copyright -->
		<div id="copyright" class="container">
Copyright	@ <a href="http://safepal.com">SafePal Designers : 
	</div>


	</body>
</html>