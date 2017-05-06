<?php
	include_once('connectDB.php');

	$Product_Id = $_POST['txtEditProduct_Id'];
	$Product_Name = $_POST['txtEditProduct_Name'];
	$Product_Cost = $_POST['txtEditProduct_Cost'];
	$Product_Price = $_POST['txtEditProduct_Price'];
	//$Product_Total = 0;

	$sql = "UPDATE Product SET Product_Name ='$Product_Name', Product_Cost = '$Product_Cost', Product_Price = '$Product_Price' WHERE Product_Id = '$Product_Id'";

	if (mysqli_query($dbConnect, $sql)) {
	    echo "ทำการแก้ไขข้อมูลเสร็จสิ้น";
	} else {
	    echo "ข้อผผิดพลาด: " . $sql . "<br>" . mysqli_error($conn);
	}

	mysqli_close($dbConnect);

?>