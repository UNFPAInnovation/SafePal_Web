
<script type="text/javascript">
function validateForm()
{
var a=document.forms["name"]["name"].value;
if (a==null || a=="")
  {
  alert("Pls. Enter  name");
  return false;
  }
var b=document.forms["sex"]["sex"].value;
if (b==null || b=="")
  {
  alert("Pls. Enter sex");
  return false;
  }
}
<link href="./calendar/css/default/calendar.css" rel="stylesheet" type="text/css" />
<?php
// Load the calendar class
require('./calendar/tc_calendar.php');
?>
</script>
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

<form action="addexec5.php" method="post" enctype="multipart/form-data" name="addincidence" onsubmit="return validateForm()">

<a href="">Welcome to the instant Web reporter</a><br />
<table>
		  <tr><td>When is your birthday:<?php
		 
		  $myCalendar = new tc_calendar("date1", true);
		  $myCalendar->setIcon("./calendar/images/iconCalendar.gif");
		  $myCalendar->setDate(date('d'), date('m'), date('Y'));
		  $myCalendar->setPath("./calendar/");
		  $myCalendar->zindex = 150; //default 1
		  $myCalendar->setYearInterval(1995, date('Y'));
		  $myCalendar->dateAllow('1960-03-01', date('Y-m-d'));
		  //$myCalendar->autoSubmit(true, "calendar");
		  //$myCalendar->setDateFormat('l, dS \of F Y');
		  $myCalendar->disabledDay("sat");
		  $myCalendar->disabledDay("sun");
		  $myCalendar->setSpecificDate(array("2011-04-14", "2010-12-25"), 0, 'month');
		  $myCalendar->setSpecificDate(array("2011-04-01"), 0, 'year');
		  $myCalendar->setAlignment('right', 'bottom'); //optional
		  $myCalendar->writeScript();
		  ?></td> </tr>
		  <tr><td>What is your estimated age (**):<input name="age" type="text" class="ed" size="23px"/></td>
  </tr>
<tr><td>Are you a Boy or Girl:<select name="sex" class="ed">
 <option value="Male">Boy</option>
  <option value="Female">Girl</option></td> </tr>

<tr><td>Where did it happen:<input name="place" type="text" class="ed" size="23px"/></td>
  </tr>

  <tr>
<td>What happened to you:<select name="whathappened" class="ed" >
 <option value="Bad Touches">Bad Touches</option>
  <option value="Some one tried to rape me">Some one tried to rape me</option>
   <option value="I was raped">I was raped</option>
    <option value="I was defiled">I was defiled</option>
	 <option value="Other">Other</option>
  </select></td> </tr>
   <tr> <td>Tell us your story:<textarea name="story" class="ed">
</textarea></td>
  </tr>


<tr><td><input type="submit" name="Submit" value="Report incidence" id="button1" /></td></tr>
     
 </table>
</form>
