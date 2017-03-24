<!DOCTYPE html>
<html lang="en" class="body-full-height">
    <head>        
        <!-- META SECTION -->
        <title>Joli Admin - Responsive Bootstrap Admin Template</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="css/theme-default.css"/>
        <!-- EOF CSS INCLUDE -->                                    
    </head>
    <body>
        
        <div class="login-container">
        
            <div class="login-box animated fadeInDown">
                <div class="login-body">
                    <div class="login-title"><strong>Welcome</strong>, e-Stationery Administration</div>
                    <form action="index.php" class="form-horizontal" method="post">
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="text" class="form-control" placeholder="Username" name="username">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="password" class="form-control" placeholder="Password" name="password">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">
                            <a href="#" class="btn btn-link btn-block">Forgot your password?</a>
                        </div>
                        <div class="col-md-6">
                            <button name="signin" class="btn btn-info btn-block">Log In</button>
                        </div>
                    </div>
                    <?php
                        session_start();
                        if(isset($_POST['signin'])){
                            require ('basefile/dbConfig.php');
                            $username = $_POST['username'];
                            $password = $_POST['password'];
                        
                            $_SESSION['username'] = $username;
                            
                            $res1 =  mysqli_fetch_assoc(mysqli_query($db,"select fullname from admin where username = '$username' "));
                            $_SESSION['fname']= $res1['fullname'];                          
                        
                            $result = mysqli_query($db, 'select * from admin where username="'.$username.'" and password="'.$password.'"  ');
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
                                echo "<script>";
                                echo "alert('ERROR| Your are not an authoriezed user! Check your information again')";
                                echo "</script>";
                        }
                        ?>
                    </form>
                </div>
                <div class="login-footer">
                    <div class="pull-left">
                        &copy; UOC Faculty Of Management
                    </div>
                    <div class="pull-right">
                        <a href="#">About</a> |
                        <a href="#">Privacy</a> |
                        <a href="#">Contact Us</a>
                    </div>
                </div>
            </div>
            
        </div>
        
    </body>
</html>






