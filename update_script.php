<?php 

include 'dbh.php';
$O=$_POST['O'];
$sql1="UPDATE orders SET Status='Delivered' WHERE OrderNum='$O'";
$result1=mysqli_query($conn,$sql1);

header('Location:adminP6.php');
?>