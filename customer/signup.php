<?php
if(isset($_POST["reg"])){
    include('basefile/dbConfig.php');
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $nic = $_POST['nic'];
    $tele = $_POST['tele'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    //query
    $sql="INSERT INTO user (fullname,email,address,nic,tele,username,password,status) 
    VALUES ('$fullname','$email','$address','$nic','$tele','$username','$password','Active')";
    $result = $db->query($sql);

    if($result){
        echo'<script>';
        echo"alert('SUCCESS | User Information Added')";
        echo'</script>';
        header("location:index.php");
    }
    else{
        echo'<script>';
        echo"alert('FAILED | User Information Not Added')";
        echo'</script>';
    }
}
?> 