<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>SafePal Dashboard</title>
<link rel="stylesheet" href="admin/febe/style.css" type="text/css" media="screen" charset="utf-8">
<link href="admin/src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="xres/css/style.css" />
<link rel="icon" type="image/png" href="xres/images/favicon.png" />
<!--[if IE 6]><style type="text/css"> * html img { behavior: url("xres/iepngfix.htc") }</style><![endif]-->
<script type="text/javascript" src="xres/js/saslideshow.js"></script>
<script type="text/javascript" src="xres/js/slideshow.js"></script>
<script src="js/jquery-1.5.min.js" type="text/javascript" charset="utf-8"></script>
<script src="vallenato/vallenato.js" type="text/javascript" charset="utf-8"></script>
<link rel="stylesheet" href="vallenato/vallenato.css" type="text/css" media="screen" charset="utf-8">

<!--sa calendar-->	
		<script type="text/javascript" src="js/datepicker.js"></script>
        <link href="css/datepicker.css" rel="stylesheet" type="text/css" />
		<script type="text/javascript">
		$("#slideshow > div:gt(0)").hide();

		setInterval(function() { 
		  $('#slideshow > div:first')
			.fadeOut(1000)
			.next()
			.fadeIn(1000)
			.end()
			.appendTo('#slideshow');
		},  3000);
	</script>

	
	

<link rel="stylesheet" href="admin/febe/style.css" type="text/css" media="screen" charset="utf-8">
<script src="admin/argiepolicarpio.js" type="text/javascript" charset="utf-8"></script>
<script src="admin/js/application.js" type="text/javascript" charset="utf-8"></script>	
<!--sa poip up-->
<link href="admin/src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
   <script src="admin/lib/jquery.js" type="text/javascript"></script>
  <script src="admin/src/facebox.js" type="text/javascript"></script>
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage : 'src/loading.gif',
        closeImage   : 'src/closelabel.png'
      })
    })
  </script>
	
	
	
</head>

<body>
<div id="wrapper">
	<div id="header">
    <h1><a href="login.php"><img src="xres/images/logoa.png" class="logo" alt="SafePal" style="margin-left:3.7%" /></a></h1>
        <ul id="mainnav">
	   
		
    	</ul>
	</div>
    <div id="content">
    	<div id="rotator">
              <ul>
                    <li class="show"><img src="xres/images/slides/newcolor.png" width="861" height="379"  alt="" /></li>
                    
                    <li><img src="xres/images/slides/newcolor.png" width="" height=""  alt="" /></li>
					
					
                    
              </ul>
			  
			  <div id="logo" style="left: 600px; height: auto; top: 23px; width: 260px; position: absolute; z-index:4;">
					
					<h2 class="accordion-header" style="height: 18px; margin-bottom: 15px; color: rgb(255, 255, 255); background: none repeat scroll 0px 0px rgb(53, 48, 48);">Login</h2>
					<div class="accordion-content" style="margin-bottom: 15px;">
						<form action="loginHandler.php" method="post" style="margin-bottom:none;">
						<span style="margin-right: 11px;">Username: <input type="text" name="user" style="width: 165px; margin-left: 15px; border: 3px double #CCCCCC; padding:5px 10px;"/></span><br>
						<span style="margin-right: 11px;">Password: <input type="password" name="password" style="width: 165px; margin-left: 15px; border: 3px double #CCCCCC; padding:5px 10px;"/></span><br><br>
						<input type="submit" id="submit" value="login" style="height: 34px; margin-left: 15px; width: 191px; padding: 5px; border: 3px double rgb(204, 204, 204);" /><br><br>
			
						<span style="margin-right: 11px;"><a href="index.php">Back to Home Page:</a></span><br><br>
						
						</form>
						
					</div>
				</div>
        </div>
		
    </div>
   

	<div id="footer">
		<h3><a href="login.php" style="color:#01a89e">SAFEPAL- An instant reliable reporting platform for sexual violance</a></h3>
		<br>
		<p style="color:#D71D5B">&copy; Copyright 2016 SAFEPAL | All Rights Reserved <br /></p>
	</div>
</div>
</body>
</html>
