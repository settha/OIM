<?php
	include_once('connectDB.php');

	if (isset($_POST['txtDivImportProduct_Name'])){
		$Product_Name = $_POST['txtDivImportProduct_Name'];
	}
	if (isset($_POST['txtDivExportProduct_Name'])) {
		$Product_Name = $_POST['txtDivExportProduct_Name'];
	}

	//$pID = $_POST['txtpID'];
	//$Product_Name = $_POST['txtDivImportProduct_Name'];
	//$Product_Name = $_POST['txtProduct_Name'];
	//$Product_Cost = $_POST['txtProduct_Cost'];
	//$Product_Price = $_POST['txtProduct_Price'];
	//$Product_Total = 0;

	$sql = "SELECT * FROM Product WHERE Product_Name = '$Product_Name'";

	$result = mysqli_query($dbConnect, $sql);

	if (mysqli_num_rows($result) > 0) {
		while($row = mysqli_fetch_assoc($result)) {
        	echo "".$row["Product_Id"].",".$row["Product_Cost"];
    	}
	}else {
		echo "no";
	}

	mysqli_close($dbConnect);

?>