<?php
	include_once('connectDB.php');

	if (isset($_POST['txtDivAddProduct_Id'])){
		$Product_Id = $_POST['txtDivAddProduct_Id'];
	}
	if (isset($_POST['txtDivEditProduct_Id'])) {
		$Product_Id = $_POST['txtDivEditProduct_Id'];
	}
	//$pID = $_POST['txtpID'];
	//$Product_Id = $_POST['txtDivAddProduct_Id'];
	//$Product_Name = $_POST['txtProduct_Name'];
	//$Product_Cost = $_POST['txtProduct_Cost'];
	//$Product_Price = $_POST['txtProduct_Price'];
	//$Product_Total = 0;

	$sql = "SELECT Product_Id FROM Product WHERE Product_Id = '$Product_Id'";

	$result = mysqli_query($dbConnect, $sql);

	if (mysqli_num_rows($result) > 0) {
		while($row = mysqli_fetch_assoc($result)) {
        	echo "". $row["Product_Id"]."";
    	}
	} 

	mysqli_close($dbConnect);

?>