<?php
if(isset($_GET['reg'])){
include('basefile/dbConfig.php');
   $fullname = $_POST['fullname'];
//    $email = $_POST['email'];
//    $address = $_POST['address'];
//    $nic = $_POST['nic'];
//    $tele = $_POST['tele'];
//    $username = $_POST['username'];
//    $password = $_POST['password'];
   
    $sql="INSERT INTO user (fullname,status) VALUES ('$fullname', '1')";
    

if (mysqli_query($db, $sql) === TRUE) {
        // echo'<script>';
        // echo"alert('We will give your account authentication soon! Thank you')";
        // echo'</script>';
        header('location:index.php');
    } else {

        echo'<script>';
        echo"alert('Error in Submition')";
        echo'</script>';
        
    }

    mysqli_close($db);
}
    ?>