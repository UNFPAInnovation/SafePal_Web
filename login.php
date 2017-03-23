<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" href="images/safe.png" type="image/x-icon">
</head>
<title>SafePal</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body id="myPage">

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
  <img src="images/banner.jpg" alt="boat" style="width:100%;min-height:320px;max-height:480px;">
  <div class="w3-display-middle" style="height:300px;"> 

	
  </div>

</div>
    <div style="left: 550px; height: auto; top: 90px; width: 260px; position: absolute; z-index:4;" >
    	          			  
			  <div  style="left: 400px; height: auto; top: 23px; width: 260px; position: absolute; z-index:4;">
					
					<h2 class="accordion-header" style="height: 18px; margin-bottom: 15px; ">Login</h2>
					<br>
					<div style="margin-bottom: 15px;">
						<form action="loginHandler.php" method="post" style="margin-bottom:none;">
						<span style="margin-right: 11px;">Username: <input type="text" name="user" style="width: 190px; margin-left: 15px; border: 3px double #CCCCCC; padding:5px 10px;"/></span><br>
						<span style="margin-right: 11px;">Password: <input type="password" name="password" style="width: 190px; margin-left: 15px; border: 3px double #CCCCCC; padding:5px 10px;"/></span><br><br>
						<input type="submit" id="submit" value="login" style="height: 34px; margin-left: 15px; width: 191px; padding: 5px; border: 3px double rgb(204, 204, 204);" /><br><br>
			
				
						
						</form>
						
					</div>
				</div>
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

</body>
</html>
