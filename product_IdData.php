 <?php
  include_once('connectDB.php');

    // Query to get the usable locations
    $Product_Id = $_GET['term'];

    $sql = "SELECT * FROM Product WHERE Product_Id LIKE '%$Product_Id%'";
    $result = mysqli_query($dbConnect, $sql);            

    while($row = mysqli_fetch_assoc($result)){
      $return_arr[] = array('label' => $row['Product_Id'],
                            'Product_Id' => $row['Product_Id'],
                            'Product_Name' => $row['Product_Name'],
                            'Product_Cost' =>  $row['Product_Cost']);
    }
    if (mysqli_num_rows($result) == 0) {
       $return_arr[] = array('label' => "ไม่พบรหัสสินค้า " .$Product_Id);
    }
      echo json_encode($return_arr);
 ?>  