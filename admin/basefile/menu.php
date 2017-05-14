<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title>E-Stationery Admin</title>            
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
        <!-- START PAGE CONTAINER -->
        <div class="page-container">
            
            <!-- START PAGE SIDEBAR -->
            <div class="page-sidebar">
                <!-- START X-NAVIGATION -->
                <ul class="x-navigation">
                    <li class="xn-logo">
                        <a href="index.html">ADMIN
                        </a>
                        <a href="#" class="x-navigation-control"></a>
                    </li>
                    
                    <li class="xn-title"><center>Welcome <?php
                                                session_start();
                                                echo $_SESSION['fname'];
                                            ?></center></li>
                    <li class="active">
                        <a href="home.php"><span class="fa fa-desktop"></span> <span class="xn-text">Home</span></a>                        
                    </li>                    
                    <li class="xn-openable">
                        <a href="additem.php"><span class="fa fa-files-o"></span> <span class="xn-text">Add Item Name</span></a>
                        
                    </li>
                    <li class="xn-openable">
                        <a href="addcompany.php"><span class="fa fa-file-text-o"></span> <span class="xn-text">Add Company</span></a>
                    </li>
                        
                    <li class="xn-openable">
                        <a href="stock.php"><span class="fa fa-pencil"></span> <span class="xn-text">Add Stock</span></a>
                    </li>
                    <li class="xn-openable">
                        <a href="viewstock.php"><span class="fa fa-pencil"></span> <span class="xn-text">View Stock</span></a>
                    </li>
                    <li class="xn-openable">
                        <a href="mngorders.php"><span class="fa fa-pencil"></span> <span class="xn-text">Manage Orders</span></a>
                    </li>
                    <li class="xn-openable">
                        <a href="delorder.php"><span class="fa fa-pencil"></span> <span class="xn-text">Delivery</span></a>
                    </li>
                    <li class="xn-openable">
                        <a href="received.php"><span class="fa fa-pencil"></span> <span class="xn-text">Recevied Orders</span></a>
                    </li>
                    <li class="xn-openable">
                        <a href="manageadmin.php"><span class="fa fa-pencil"></span> <span class="xn-text">Manage Admin</span></a>
                    </li>
                    <li class="xn-openable">
                        <a href="manageuser.php"><span class="fa fa-pencil"></span> <span class="xn-text">Manage Users</span></a>
                    </li>
                    <li class="xn-openable">
                        <a href="payments.php"><span class="fa fa-pencil"></span> <span class="xn-text">Payments</span></a>
                    </li>
                    <li class="xn-openable">
                        <a href="index.php"><span class="fa fa-pencil"></span> <span class="xn-text">LogOut</span></a>
                    </li>
                    
                </ul>
                <!-- END X-NAVIGATION -->
            </div>
            <!-- END PAGE SIDEBAR -->
            
            <!-- PAGE CONTENT -->
            <div class="page-content">
                
                <!-- START X-NAVIGATION VERTICAL -->
                <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
                    <!-- TOGGLE NAVIGATION -->
                    <li class="xn-icon-button">
                        <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
                    </li>
                    <!-- END TOGGLE NAVIGATION -->
                    <!-- SEARCH -->
                    <li class="xn-search">
                        <form role="form">
                            <input type="text" name="search" placeholder="Search..."/>
                        </form>
                    </li>   
                    <!-- END SEARCH -->
                    <!-- SIGN OUT -->
                    <li class="xn-icon-button pull-right">
                        <a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span></a>                        
                    </li> 
                    <!-- END SIGN OUT -->
                    <!-- MESSAGES -->
                    <li class="xn-icon-button pull-right">
                        <a href="#"><span class="fa fa-comments"></span></a>
                        <div class="informer informer-danger">4</div>
                        <div class="panel panel-primary animated zoomIn xn-drop-left xn-panel-dragging">
                            <div class="panel-heading">
                                <h3 class="panel-title"><span class="fa fa-comments"></span> Messages</h3>                                
                                <div class="pull-right">
                                    <span class="label label-danger">4 new</span>
                                </div>
                            </div>
                               
                        </div>                        
                    </li>
                    <!-- END MESSAGES -->
                    <!-- TASKS -->
                    <li class="xn-icon-button pull-right">
                        <a href="#"><span class="fa fa-tasks"></span></a>
                        <div class="informer informer-warning">3</div>
                        <div class="panel panel-primary animated zoomIn xn-drop-left xn-panel-dragging">
                            <div class="panel-heading">
                                <h3 class="panel-title"><span class="fa fa-tasks"></span> Tasks</h3>                                
                                <div class="pull-right">
                                    <span class="label label-warning">3 active</span>
                                </div>
                            </div>
                            
                                      
                            <div class="panel-footer text-center">
                                <a href="pages-tasks.html">Show all tasks</a>
                            </div>                            
                        </div>                        
                    </li>
                    <!-- END TASKS -->
                </ul>
                <!-- END X-NAVIGATION VERTICAL -->                     

                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>                    
                    <li class="active">Dashboard</li>
                </ul>
                <!-- END BREADCRUMB -->                       