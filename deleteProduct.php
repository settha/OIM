<?php
	include_once('connectDB.php');

	$pID = $_POST['txtDeletepID'];
	//$Product_Id = $_POST['txtDeleteProduct_Id'];
	//$Product_Name = $_POST['txtDeleteProduct_Name'];
	//$Product_Cost = $_POST['txtDeleteProduct_Cost'];
	//$Product_Price = $_POST['txtDeleteProduct_Price'];
	//$Product_Total = 0;

	$sql = "DELETE FROM Product WHERE pID = '$pID'";

	if (mysqli_query($dbConnect, $sql)) {
	    echo "ทำการลบข้อมูลเสร็จสิ้น";
	} else {
	    echo "ข้อผิดพลาด: " . $sql . "<br>" . mysqli_error($conn);
	}

	mysqli_close($dbConnect);

?>