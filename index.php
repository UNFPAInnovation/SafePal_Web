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
  <li><a href="#" class="w3-teal"><i class="fa fa-home w3-margin-right"></i>SafePal</a></li>
  <li class="w3-hide-small"><a href="#service" class="w3-hover-cyan">Service Providers</a></li>
  <li class="w3-hide-small"><a href="#footer" class="w3-hover-cyan">Follow Us</a></li>
  <li class="w3-hide-small w3-dropdown-hover">
    <a href="javascript:void(0);" title="Download">Download<i class="fa fa-caret-down"></i></a>     
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
	
	<h2><b><blink>CLICK BELOW TO REPORT AN INCIDENT</blink></b></h2>
	
	
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

<div class="mySlides fade">
  <div class="numbertext">1 / 4</div>
  <img src="images/slide1.png" alt="boat" style="width:100%;min-height:395px;max-height:395px;">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 4</div>
  <img src="images/slide2.png" alt="boat" style="width:100%;min-height:395px;max-height:395px;">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 4</div>
  <img src="images/slide3.png" alt="boat" style="width:100%;min-height:395px;max-height:395px;">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">4 / 4</div>
  <img src="images/slide4.png" alt="boat" style="width:100%;min-height:395px;max-height:395px;">
  <div class="text"></div>
</div>

</div>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span>
<span class="dot"></span>  
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex> slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 8000); // Change image every 2 seconds
}
</script>

</div>

<!-- Go to top Container -->
  <div style="position:relative;bottom:100px;z-index:1;" class="w3-tooltip w3-right">
    <span class="w3-text w3-padding w3-teal w3-hide-small">Go To Top</span>   
    <a class="w3-btn w3-theme" href="#myPage"><span class="w3-xlarge">
    <i class="fa fa-chevron-circle-up"></i></span></a>
  </div>

<!-- Service Providers -->
<div class="w3-row-padding w3-padding-32 w3-theme-l1" id="service">

<div class="w3-quarter">
<style> h5{text-align: justify;}
</style>
<h5><b>OUR PARTNERS ARE MORE THAN READY TO HELP YOU</b></h5>
<p align="justify">If you have been raped or sexually assaulted, the first thing you need to do is go somewhere you feel safe, such as the home of a close friend or family member. If you feel you're able to, you should consider telling someone you trust what has happened. You shouldn't feel ashamed or to blame for what has happened to you. People you can talk to or organizations you can contact if you have been raped or sexually assaulted are provided on this page</p>
</div>

<div class="w3-quarter">
<div class="w3-card-2 w3-white">
  <div class="w3-container">
 <p align="justify"><b>UNFPA</b>
<a href="http://www.unfpa.org/">Contact Us</a> </p>
  </div>
  
  <div class="w3-container">
  
 <p align="justify"><b>Action Aid International Uganda</b>, Plot 2514/2515, Kansanga, Gaba Road. P.O. Box: 676, Kampala, Uganda. Telephone: +256392220003/3</p>

  </div>
  <div class="w3-container">
  
 <p align="justify"><b>Reproductive Health Uganda</b>, Plot 2, Katego Road,Tufnell Drive, Off Kira Road,Opposite Uganda Museum, next to Mariandina, P.O. Box 10746 Katego Rd, Kampala, Uganda. Phone: +256 31 2207100</p>

  </div>

  <div class="w3-container">
 <p align="justify"><b>Naguru Teenage Center</b>
<a href="http://ntihc.org/">Contact Us</a> </p>
  </div>
 
  </div>
</div>

<div class="w3-quarter">
<div class="w3-card-2 w3-white">
    <div class="w3-container">
  <p align="justify"><b>Ugandan Association of Women Lawyers (FIDA-Uganda)</b>, Plot 54 Bukoto Street. P. O. Box 2157 Kampala, Uganda. (256) 41 530 848</p>
  </div>
 
 <div class="w3-container">
  <p align="justify"><b>Care International Uganda</b>, Mackinnon Rd, Kampala, Uganda. Phone:+256 31 2258100</p>
  </div>

  <div class="w3-container">
  <p align="justify"><b>International Rescue Committee (IRC)</b>, 7 Lower East Road Naguru, Kampala, 24672, Uganda. Phone +25641-4286212</p>
  </div> 
 
   <div class="w3-container">
 <p align="justify"><b>Ministry of Health Uganda</b>
<a href="http://health.go.ug/">Contact Us</a> </p>
  </div>
  
  </div>
</div>

<div class="w3-quarter">
<div class="w3-card-2 w3-white">
  
   <div class="w3-container">
  <p align="justify"><b>Raising VoicesRaising Voices</b>, Plot 16 Tufnell Drive, Kamwokya. PO Box 6770. Kampala, Uganda. +256 414 532 183 / +256 414 531 186 CEDOVIP</p>
  </div>

  <div class="w3-container">
  <p align="justify"><b>Hope After Rape (HAR)</b> Plot Number 1C Kiira Road, Kampala Uganda. P.O.Box 7621 Kampala - Uganda 256- 0414- 251201 / 233669.</p>
  </div> 
 
  <div class="w3-container"> 
 <p align="left"><b>RHU(Reach Hand Uganda)</b>
<a href="http://www.reachahand.org/">Contact Us</a> </p>
  </div>
 
 <div class="w3-container"> 
 <p align="left"><b>FIDA-Uganda</b>
<a href="http://www.fidauganda.org/">Contact Us</a> </p>
  </div>
  
  </div>
</div>

</div>

<!-- Go to top Container -->
  <div style="position:relative;bottom:100px;z-index:1;" class="w3-tooltip w3-right">
    <span class="w3-text w3-padding w3-teal w3-hide-small">Go To Top</span>   
    <a class="w3-btn w3-theme" href="#myPage"><span class="w3-xlarge">
    <i class="fa fa-chevron-circle-up"></i></span></a>
  </div>

<!-- Footer -->
<div id="footer">
<footer class="w3-container w3-padding-32 w3-theme-d1 w3-center">
  <h4>Follow Us</h4>
  <a class="w3-btn-floating w3-teal" href="https://facebook.com" target="_blank" title="Facebook: @SafePalapp"><i class="fa fa-facebook"></i></a>
  <a class="w3-btn-floating w3-teal" href="jhttps://twitter.com" target="_blank"  title="Twitter: @SafePalapp "><i class="fa fa-twitter"></i></a>
  <a class="w3-btn-floating w3-teal w3-hide-small" href="https://linked.com" target="_blank" title="Linkedin: @SafePalapp"><i class="fa fa-linkedin"></i></a>
  <a class="w3-btn-floating w3-teal" href="https://play.google.com/apps/testing/com.unfpa.safepal" target="_blank"  title="Google Play: @SafePalapp"><i class="fa fa-play"></i></a>
  <p>© Copyright 2017 - SafePal/UNFPA</p>

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
