
<script type="text/javascript">
function validateForm()
{
var a=document.forms["usergroup"]["usergroup"].value;
if (a==null || a=="")
  {
  alert("Pls. Enter the user group");
  return false;
  }

}
</script>


<!--sa input that accept number only-->
<SCRIPT language=Javascript>
      <!--
      function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

         return true;
      }
      //-->
   </SCRIPT>

<form action="addexec41.php" method="post" enctype="multipart/form-data" name="addproduct" onsubmit="return validateForm()">
Incidence Status Name<br />
  <input name="dname" type="text" class="ed" /><br />
  Description<br />
<textarea name="des" class="ed">
</textarea><br />

  <br />
 
    <input type="submit" name="Submit" value="save" id="button1" />
 
</form>
