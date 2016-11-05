
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

<p align="center" style="color:red;"><strong align="right">SafePal web Reporter</strong></p>
<table>
		

   <tr> <td>Why dont you wish to be contacted?:<textarea name="story" class="ed">
</textarea></td>
  </tr>


<tr><td><input type="submit" name="Submit" value="Submit" id="button1" /></td></tr>
     
 </table>
</form>
