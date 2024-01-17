<?php 
include('config.php');

// print_r($_POST);

$userid = $_POST['user_id'];
$proid = $_POST['pro_id'];
$pname = $_POST['pname'];
$pprice = $_POST['pprice'];

$insert="INSERT INTO `cart` (`cart_id`, `pro_name`, `Pro_price`, `user_id`, `pro_id`) VALUES (NULL, '$pname', '$pprice', '$userid', '$proid')
";
$result=mysqli_query($connection, $insert);
if($result){
    echo "cart added successfully";
}else{
    echo "failed to add category";
}


?>