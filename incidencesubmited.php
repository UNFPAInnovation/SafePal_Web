<!DOCTYPE html>
<html>
<title>SafePal</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body id="myPage">



<div class="w3-relative w3-pink" id="beforemenu">
  <img src="images/safe.png" alt="boat" style="width:10%;min-height:85px;max-height:20px;">
  <div class="w3-display-middle" style="height:632px;"> 
	<h2><b>SAFEPAL WEB REPORTER</b></h2>
		
  </div>
</div>

<!-- Navbar -->
<div class="w3-absolute w3-gray" id="navDemo">
 <ul class="w3-navbar w3-theme-d2 w3-left-align w3-gray">
  <li class="w3-hide-medium w3-hide-large w3-opennav w3-right w3-gray">
    <a class="w3-hover-cyan w3-theme-d2 w3-gray" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  </li>
  <li><a href="index.php" class="w3-teal"><i class="fa fa-home w3-margin-right"></i>SafePal</a></li>
  <li class="w3-hide-small"><a href="#service" class="w3-hover-cyan">Service Providers</a></li>
  <li class="w3-hide-small"><a href="#footer" class="w3-hover-cyan">Follow Us</a></li>
  <li class="w3-hide-small w3-dropdown-hover">
    <a href="javascript:void(0);" title="Download">Download <i class="fa fa-caret-down"></i></a>     
    <div class="w3-dropdown-content w3-gray w3-card-4">
      <a href="https://play.google.com/apps/testing/com.unfpa.safepal">Get Mobile Version</a>
      
    </div>
  </li>
 </ul>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-hide w3-gray w3-hide-large w3-hide-medium w3-gray">
    <ul class="w3-navbar w3-left-align w3-theme">
      <li><a href="#service">Service Providers</a></li>
      <li class="w3-dropdown-hover">
      <a href="javascript:void(0);" title="Download">Download <i class="fa fa-caret-down"></i></a>     
      <div class="w3-dropdown-content w3-light-gray w3-card-4">
        <a href="https://play.google.com/apps/testing/com.unfpa.safepal">Get Mobile Version</a>
        
        
      </div>
      </li>
    </ul>
  </div>
</div>

<!-- Image Header -->
<div class="w3-display-container w3-animate-opacity">
  <img src="images/banner.jpg" alt="boat" style="width:100%;min-height:300px;max-height:400px;">
  <div class="w3-display-middle" style="height:300px;"> 
	<marquee behavior="alternate" loop="-1">
	<h2><b><blink>CLICK BELOW TO REPORT AN INCIDENT</blink></b></h2>
	</marquee>
	
  </div>
  <div class="w3-display-middle" style="height:20px;">  
    <button onclick="document.getElementById('id01').style.display='block'" style="height: 400%;"  class="w3-btn-bar w3-xlarge w3-theme w3-hover-cyan" title="Report Incident For Yourself" >REPORT FOR<br>MYSELF</button>
	<button onclick="document.getElementById('id02').style.display='block'" style="height: 400%;"class="w3-btn-bar w3-xlarge w3-theme w3-hover-cyan" title="Report Incident For a Friend" >REPORT FOR<br>A FRIEND</button>
  </div>
</div>

<!-- Modal -->
<div id="id01" class="w3-modal">
  <div class="w3-modal-content w3-card-8 w3-animate-top">
    <header class="w3-container w3-cyan"> 
      <span onclick="document.getElementById('id01').style.display='none'" class="w3-closebtn"><i class="fa fa-remove"></i></span>
      <h2>SafePal Web Reporter</h2>
    </header>
    <div class="w3-container">
      <p> &#8212; Know that the sexual violence wasn't your fault
	  &#8212; You do not have to protect the perpetrator
	  &#8212; It is critical that you seek medical care
	  &#8212; 40% of rape survivors develop sexually transmitted diseases as a result of sexual assault
	  </p>
     <p><a rel="facebox2" href="reportingincidenceformyself.php">Click to Report Incident For Yourself</a></p>
    </div>
    <footer class="w3-container w3-cyan">
      <p><h5><b>We are Willing To Help You</b></h5></p>
    </footer>
  </div>
</div>

<div id="id02" class="w3-modal">
  <div class="w3-modal-content w3-card-8 w3-animate-top">
    <header class="w3-container w3-cyan"> 
      <span onclick="document.getElementById('id02').style.display='none'" class="w3-closebtn"><i class="fa fa-remove"></i></span>
      <h2>SafePal Web Reporter</h2>     
    </header>
    <div class="w3-container">
     <p> &#8212; Know that the sexual violence wasn't your fault
	  &#8212; You do not have to protect the perpetrator
	  &#8212; It is critical that you seek medical care
	  &#8212; 40% of rape survivors develop sexually transmitted diseases as a result of sexual assault
	  </p>
     <p><a rel="facebox2" href="reportingincidenceforfriend.php">Click to Report Incident For a Friend</a></p>
    </div>
    <footer class="w3-container w3-cyan">
      <p><h5><b>We are Willing To Help You</b></h5></p>
    </footer>
  </div>
</div>

<!-- Slider Container -->
<div class="w3-container w3-padding-64 w3-center w3-white" id="team1" style="height:500px;">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing:border-box}
body {font-family: Verdana,sans-serif;}
.mySlides {display:none}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 13px;
  width: 13px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>
<body>

<div class="slideshow-container">

	<div id="marketing" class="container" style="margin-top: -8%;color:#D71D5B;size:150px";align="center">
			<?php
							include('connect.php');
							$result = mysql_query("SELECT * FROM incident_report_details ORDER BY incident_report_id DESC LIMIT 1");
							while($row = mysql_fetch_array($result))
								{
		echo  '<p align="center" > <strong align="right" style="color:red;"><font size="5">Thank you very much, the incident has been Recorded with Reference number SPW'.$row['incident_report_id'].'</font> </strong></p>';
				}
							?> 
				<p align="center" style="color:red;"><strong align="right">Do you wish to be contacted?.</strong></p>
				
					<p align="center" style="color:blue;"><strong align="right"> <a rel="facebox" href="contactincidence.php">YES</a> &nbsp;&nbsp;
					<a rel="facebox" href="no.php">NO</a> &nbsp;&nbsp;
					
													 

			</div>
  </div>

<!-- Footer -->
<div id="footer">
<footer class="w3-container w3-padding-32 w3-theme-d1 w3-center">
  <h4>Follow Us</h4>
  <a class="w3-btn-floating w3-teal" href="javascript:void(0)" title="Facebook: @SafePalapp"><i class="fa fa-facebook"></i></a>
  <a class="w3-btn-floating w3-teal" href="javascript:void(0)" title="Twitter: @SafePalapp "><i class="fa fa-twitter"></i></a>
  <a class="w3-btn-floating w3-teal w3-hide-small" href="javascript:void(0)" title="Linkedin: @SafePalapp"><i class="fa fa-linkedin"></i></a>
  <a class="w3-btn-floating w3-teal" href="https://play.google.com/apps/testing/com.unfpa.safepal" title="Google Play: @SafePalapp"><i class="fa fa-play"></i></a>
  <p>&#169;SafePal</p>

  <div style="position:relative;bottom:100px;z-index:1;" class="w3-tooltip w3-right">
    <span class="w3-text w3-padding w3-teal w3-hide-small">Go To Top</span>   
    <a class="w3-btn w3-theme" href="#myPage"><span class="w3-xlarge">
    <i class="fa fa-chevron-circle-up"></i></span></a>
  </div>
</footer>
</div>
<!-- Script For Side Navigation -->
<script>
function w3_open() {
    var x = document.getElementById("mySidenav");
    x.style.width = "300px";
    x.style.textAlign = "center";
    x.style.fontSize = "40px";
    x.style.paddingTop = "10%";
    x.style.display = "block";
}
function w3_close() {
    document.getElementById("mySidenav").style.display = "none";
}

// Used to toggle the menu on smaller screens when clicking on the menu button
function openNav() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>
<!--sa poip up-->
<link href="admin/src/report/facebox.css" media="screen" rel="stylesheet" type="text/css" />
   <script src="admin/lib/jquery.js" type="text/javascript"></script>
  <script src="admin/src/report/facebox.js" type="text/javascript"></script>
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox2]').facebox({
        loadingImage : 'src/loading.gif',
        closeImage   : 'src/closelabel.png'
      })
    })
  </script>
</body>
</html>
