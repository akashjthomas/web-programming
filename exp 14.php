<html>
<body style="background-color:lightgray; align:center;">
<?php
if(isset($_POST["S"])){
function elecricityBill(){
$u=$_POST["unit"];
if($u<=50)
  $cal=$u*3.50;
elseif($u>50 and $u<=150)
$cal=$u*4;
elseif($u>150 and $u<=250)
$cal=$u*5.2;
else
	$cal=$u*6.50;
echo $cal;
}
}
?>
<center>
<h1>Electricity Bill</h1>
<form action="#" method="post">
<table>

<tr>
<td>Enter the number of Units Consumed: </td>
<td><input type="text" name="unit">
</td>
</tr>

<tr>
<td></td>
<td><input type="SUBMIT" name="S" value="Electricity Bill">
</td>
</tr>

<tr>
<td></td>
<td colspan="2">The Amount to be paid is: <?php elecricityBill() ?> Rupees
</td>
</tr>
</table>
</form>
</center>
</body>
</html>
