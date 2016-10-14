
<script type="text/javascript">
function validateForm()
{
var a=document.forms["fname"]["fname"].value;
if (a==null || a=="")
  {
  alert("Pls. Enter name");
  return false;
  }

}
</script>


<form action="addexec3.php" method="post" enctype="multipart/form-data" name="addproduct" onsubmit="return validateForm()">
CSO Name<br />
  <input name="name" type="text" class="ed" /><br />
District<br />
    <input name="dist" type="text" id="rate" class="ed" /><br />
Village<br />
    <input name="villa" type="text" id="qty" class="ed"/><br />
Phone Number<br />
    <input name="phone" type="text" id="qty" class="ed"/><br />			
Status<br />
    <input name="status" type="text" id="qty" class="ed"/><br />
    
 
    <input type="submit" name="Submit" value="save" id="button1" />
 
</form>
