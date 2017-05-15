 <?php
  include_once('connectDB.php');

    // Query to get the usable locations
    $Product_Name = $_GET['term'];

    $sql = "SELECT * FROM Product WHERE Product_Name LIKE '%$Product_Name%'";
    $result = mysqli_query($dbConnect, $sql);            

    while($row = mysqli_fetch_assoc($result)){
      $return_arr[] = array('label' => $row['Product_Name'],
                            'Product_Id' => $row['Product_Id'],
                            'Product_Name' => $row['Product_Name'],
                            'Product_Cost' =>  $row['Product_Cost']);
    }
    if (mysqli_num_rows($result) == 0) {
       $return_arr[] = array('label' => "ไม่พบชื่อสินค้า " .$Product_Name);
    }
      echo json_encode($return_arr);
 ?>  