
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
</script>
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



<a href="">Reassuring messages</a><br />
<marquee direction="up" behavior="scroll" scrollamount="5" onMouseOver="this.stop();" onMouseOut="this.start();">
					<div class="events_content">Know that the sexual violence wasn't your fault &nbsp;<a href="" class="more">read more..</a></div>
							<div class="events_content">You do not have to protect the perpetrator&nbsp;<a href="" class="more">read more...</a></div></div>
							<div class="events_content">It is critical that you seek medical care&nbsp;<a href="" class="more">read..</a></div>
					 		<div class="events_content">40% of rape survivors develop sexually transmitted diseases as a result of sexual assault
					          <a href="" class="more">read more...</a></div></div>
					  </marquee>


<table>


<tr><td><a rel="facebox" href="reportingincidenceforfriend.php"><input type="submit" name="Submit" value="Proceed and report this incidence please" id="button1" /></a></td></tr>
     
 </table>

