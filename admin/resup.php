<?php																
include("basefile/dbConfig.php");
$id = $_GET['ID'];   
$sql = "UPDATE orders SET delivery='Received' WHERE id='$id' ";
if ($db->query($sql) === TRUE) {
    header('location:received.php');
} else {
    echo "<script>";
    echo "alert('Error | Status Updated Failed')";
    echo "</script>";
}
?>

