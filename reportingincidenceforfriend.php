
<script type="text/javascript">
function validateForm()
{
var a=document.forms["addinc"]["story"].value;
if (a==null || a=="")
  {
  alert("Pls. Tell us the story");
  return false;
  }

}
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

<form action="addexec5.php" method="post" enctype="multipart/form-data" name="addinc" onsubmit="return validateForm()">

<a href="">Welcome to the instant Web reporter</a><br />
<table>
<tr><td>What is your relationship with the survivor:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="rel" class="ed">
 <option value="Male">Relative</option>
  <option value="Female">Friend</option>
   <option value="Female">Schoolmate</option>
    <option value="Female">Other</option>
  </td> </tr>
<tr><td>How old is He/She:<select name="age" class="ed">
 <option value="Male">Below 10</option>
  <option value="Female">Between 10-24</option>
   <option value="Female">Above 24</option>
     </td> </tr>
	 <tr><td>My Friend is a:<select name="sex" class="ed">
 <option value="Male">Boy</option>
  <option value="Female">Girl</option>
     </td> </tr>
  <tr>
<td>What happened to your freind:<select name="whathappened" class="ed" >
 <option value="Male">Bad Touches</option>
  <option value="Female">Some one tried to rape my friend</option>
   <option value="Female">My friend raped</option>
    <option value="Female">My friend was defiled</option>
	 <option value="Female">Other</option>
  </select></td> </tr>
   <tr> <td>Tell us the story:<textarea name="story" class="ed">
</textarea></td>
  </tr>

<tr><td><input type="submit" name="Submit" value="Report incidence" id="button1" /></td></tr>
     
 </table>
</form>
