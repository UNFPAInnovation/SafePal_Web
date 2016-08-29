
<script type="text/javascript">
function validateForm()
{
var a=document.forms["username"]["username"].value;
if (a==null || a=="")
  {
  alert("Pls. Enter the user name");
  return false;
  }
var b=document.forms["password"]["password"].value;
if (b==null || b=="")
  {
  alert("Pls. Enter password");
  return false;
  }
}
</script>


<form action="loginHandler.php" method="post" style="margin-bottom:none;">
<a href="">Log into SafePal</a><br /><br />

<span style="margin-right: 11px;">Username: <input type="text" name="user" style="width: 165px; margin-left: 15px; border: 3px double #CCCCCC; padding:5px 10px;"/></span><br>
<span style="margin-right: 11px;">Password: <input type="password" name="password" style="width: 165px; margin-left: 17px; border: 3px double #CCCCCC; padding:5px 10px;"/></span><br>
<span style="margin-right: 21px;&nbsp;"><input type="submit" id="submit" value="login" style="width: 165px; margin-left: 79px; border: 3px double #CCCCCC; padding:5px 10px;"/></span><br><br>
</form>
