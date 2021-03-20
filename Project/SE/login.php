<html>
<style>
body
{
	background-image: url(FCI_ar.png);
						 background-repeat: no-repeat ;
				 background-size: 800px;
				 background-position: center;
}
form {
    margin-left: 35%;
    margin-right:25%;
		display: inline-block;
    width: 50%%;
		color:#194E38 ;
}
input
{
  background-color:#9496D4 ;
   color:#194E38 ;
   font-size: 16;
}
.Register {background-color: #4CAF50; padding: 15px 100px;font-size: 16px; border-radius: 8px;transition-duration: 0.4s;width: 100%; }
.div{margin: auto; width: 50%;}


</style>
<head>

</head>
<body>

<form name="login" >
  <p>
Username<input type="text" name="userid"/>
Password<input type="password" name="pswrd"/>

<p> <input type="button" onclick="check(this.form)" value="Login"/> </p>
</p>

</form>
<script>
function check(form)
{
 if(form.userid.value == "user" && form.pswrd.value == "password")
  {
    window.open('Main1.php')
  }
 else
 {
   alert("Error Password or Username")
  }
}
</script>

</body>
</html>
