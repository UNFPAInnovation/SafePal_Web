
<script type="text/javascript">
function validateForm()
{
var a=document.forms["addincidence"]["age"].value;
if (a==null || a=="")
  {
  alert("Pls. Enter  your age");
  return false;
  }
var c=document.forms["addincidence"]["place"].value;
if (c==null || c=="")
  {
  alert("Pls. Enter place of incidence");
  return false;
  }
  var e=document.forms["addincidence"]["story"].value;
if (e==null || e=="")
  {
  alert("Pls. Briefly Tell us the story");
  return false;
  }
}
  </script>
<link href="./calendar/css/default/calendar.css" rel="stylesheet" type="text/css" />
<?php
// Load the calendar class
require('./calendar/tc_calendar.php');
?>
</script>
<!--sa poip up-->

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

<form action="reportnow.php" method="post" enctype="multipart/form-data" name="addincidence" onsubmit="return validateForm()">

<p align="center" style="color:red;"><strong align="right">SafePal web Reporter</strong></p>
<table>
		  <tr><td>When is your birthday:
		  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		  &nbsp;&nbsp;
		  <?php
		 
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
		  <tr><td>What is your estimated age (**):&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		  
		  <input name="age" type="text" class="ed" size="23px"/></td>
  </tr>
<tr><td>Are you a Boy or Girl:&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <select name="sex" class="ed">
 <option value="Male">Boy</option>
  <option value="Female">Girl</option></td> </tr>

<tr><td>In what location did the incident happen?:&nbsp;&nbsp;
 <select name="place" class="ed" >
			<?php
			include('connect.php');
			$result = mysql_query("SELECT * from locations");
			while ($row = mysql_fetch_array($result)){?>
			<option value="<?php echo $row['loc_name']?>"><?php echo $row['loc_name']?></option>
			<?php 
			}			
			?>
			</select></td>
  </tr>

  <tr>
<td>What happened to you:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<select name="whathappened" class="ed" >
 <option value="Bad Touches">Bad Touches</option>
  <option value="Some one tried to rape me">Some one tried to rape me</option>
   <option value="I was raped">I was raped</option>
    <option value="I was defiled">I was defiled</option>
	 <option value="Other">Other</option>
  </select></td> </tr>
   <tr> <td>Tell us your story:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   <textarea name="story" class="ed">
</textarea></td>
  </tr>


<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<input type="submit" name="Submit" value="Report incidence" id="button1" /></td></tr>
     
 </table>
</form>
