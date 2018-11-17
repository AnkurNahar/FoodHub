<?php
include 'data.php';
$sqlshop="SELECT * FROM shop";
$shops=mysqli_query($coni,$sqlshop);

?>
<html>
<head>
</head>
 
<body>
<h1>SHOPS</h1>
</br>
<div>
<table cellpadding="2" cellspacing="2" border="1"> 
<?php 
while($s = mysqli_fetch_object($shops)){ ?>
<tr>
<td>
<form action="shop.php" method="post">
<input type="hidden" name="id" value="<?php echo $shop->ShopID; ?>" />
<input type="submit" name="shop" value="<?php echo $shop->ShopName;?>" />
</form>
</td>
</tr> 

}
 ?>

</div>
</body>
</html>
