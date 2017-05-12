<?php
	include_once('connectDB.php');

	//$pID = $_POST['txtpID'];
	$Product_Id = $_POST['txtDivImportProduct_Id'];
	//$Product_Name = $_POST['txtProduct_Name'];
	//$Product_Cost = $_POST['txtProduct_Cost'];
	//$Product_Price = $_POST['txtProduct_Price'];
	//$Product_Total = 0;

	$sql = "SELECT * FROM Product WHERE Product_Id = '$Product_Id'";

	$result = mysqli_query($dbConnect, $sql);

	if (mysqli_num_rows($result) > 0) {
		while($row = mysqli_fetch_assoc($result)) {
        	echo "".$row["Product_Name"].",".$row["Product_Cost"];
    	}
	}else {
		echo "no";
	}

	mysqli_close($dbConnect);

?>