<?php
    session_start();
    if(isset($_POST['log'])){
        require ('basefile/dbConfig.php');
        $username = $_POST['user'];
        $password = $_POST['pass'];
        ///session creating
        $_SESSION['user'] = $username;
        
        $res1 =  mysqli_fetch_assoc(mysqli_query($db,"select fullname from user where username = '$username' "));
        $_SESSION['fname']= $res1['fullname'];                     

        $res2 =  mysqli_fetch_assoc(mysqli_query($db,"select id from user where username = '$username' "));
        $_SESSION['cs_id']= $res2['id'];

        $res3 =  mysqli_fetch_assoc(mysqli_query($db,"select email from user where username = '$username' "));
        $_SESSION['email']= $res3['email'];       

        $result = mysqli_query($db, 'select * from user where username="'.$username.'" and password="'.$password.'"  ');
        if (mysqli_num_rows($result)==1){

            //$cst_id = $_SESSION['csid'];
            
            //$cst_name = $_SESSION['fname'];
            
            //$log = "INSERT INTO log(id, name, logtime) VALUES('$cst_id','$cst_name', 'sda')";

            //if (mysqli_query($con,$log) === TRUE) {
                header('location: home.php');

                //}else{
                //echo "<script>";
                //echo "alert('ERROR| Log Time ERROR! Login Again!')";
                //echo "</script>";
                //}
        }else
           header('location: index.php');
           
    }
?>