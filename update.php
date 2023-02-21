<?php 
include "connect.php"; 
if (isset($_GET['id'])) {
    $id=$_GET['id'];
    $sql = "DELETE FROM `registration` WHERE `name`='$name'";
     $result = $con->query($sql);
     if ($result == TRUE) {
        echo "Record deleted successfully.";
    }else{
        echo "Error:" . $sql . "<br>" . $con->error;
    }
} 
?>
