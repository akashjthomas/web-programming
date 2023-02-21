<html lang="en">
<head>

<title>Document</title>
</head>
<body>
<?php
echo "Default Order"."<br>";
$s=array("Akhila","","Akash","Aswin","Roof","Akku","Althaf");
print_r($s);
asort($s);
echo "<br><br>"."Ascending Order"."<br>";
print_r($s);
arsort($s);
echo "<br><br>"."Decending Order"."<br>";
print_r($s);
?>
</body>
</html>

