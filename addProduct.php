<?php
	include_once('connectDB.php');

	$Product_Id = $_POST['txtProduct_Id'];
	$Product_Name = $_POST['txtProduct_Name'];
	$Product_Cost = $_POST['txtProduct_Cost'];
	$Product_Price = $_POST['txtProduct_Price'];
	$Product_Total = 0;

	$sql = "INSERT INTO Product 
	VALUES ('$Product_Id', '$Product_Name', '$Product_Cost', '$Product_Price', '$Product_Total')";

	if (mysqli_query($dbConnect, $sql)) {
	    echo "ทำการเพิ่มข้อมูลเสร็จสิ้น";
	} else {
	    echo "ข้อผิดพลาด: " . $sql . "<br>" . mysqli_error($conn);
	}

	mysqli_close($dbConnect);

?>