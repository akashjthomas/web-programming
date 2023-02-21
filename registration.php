<html>
<?php
$con=mysqli_connect("localhost","root","","project");
if(mysqli_select_db($con,"project"))
{
	echo 'connection success';
}
else
{
	echo 'connection failed';
}
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$confirmpassword=$_POST['confirmpassword'];
$address=$_POST['address'];
$sql="INSERT INTO `registration`(`name`, `email`, `password`, `confirmpassword`,  `address`) VALUES ('$name','$email','$pass','$confirmpassword','$address')";

$result=$con->query($sql);
if($result==TRUE)
{
	echo "inserted succesfully";
}

}
$sql="select * from registration";
$result=$con->query($sql);
?>
<br>
<br>

<form name="myform" onsubmit=validate()  method="POST">
<h2><center>REGISTRATION FORM</center></h2>
Name:<br>
<input type="text" name="name"><br>
Email:<br>
<input type="email" name="email" value=" "><br>
Password:<br>
<input type="password" name="pass" value=""><br>
Comfirm Password:<br>
<input type="password" name="confirmpassword" value=""><br>

Address:<br>
<input type="address" name="address" value=""><br>



<br><input type="submit"  name="submit" value="submit"><br><br>
<button><a href="view.php">view</a></button>

</form>
</html>
