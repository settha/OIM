 <?php
  include_once('connectDB.php');

// Query to get the usable locations
    $Product_Id = $_GET['term'];

    $sql = "SELECT * FROM Product WHERE Product_Id LIKE '%$Product_Id%'";
    $result = mysqli_query($dbConnect, $sql);            

    $Product_IdList = array();
    while($row = mysqli_fetch_assoc($result)){
        $list = $row['Product_Id'];
        array_push($Product_IdList, $list);
    }
    $json = json_encode($Product_IdList);
    echo $json;
  
  // if(isset($_POST["query"])) {  
  //   $output = '';  
  //   $sql = "SELECT * FROM Product WHERE Product_Id LIKE '%".$_POST["query"]."%'";  
  //   $result = mysqli_query($dbConnect, $sql);  
  //   $output = '<ul class="list-unstyled">';  
  //   if(mysqli_num_rows($result) > 0) {  
  //     while($row = mysqli_fetch_array($result)) {  
  //       $output .= '<li>'.$row["Product_Id"].'</li>';  
  //     }  
  //   }else {  
  //     $output .= '<li>Country Not Found</li>';  
  //   }  
  //   $output .= '</ul>';  
  //   echo $output;  
  // }  
 ?>  