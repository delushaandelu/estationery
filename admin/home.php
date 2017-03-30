<?php
    include('basefile/menu.php');
?>

                
<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">
    <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                    
                    <!-- START WIDGETS -->                    
                    <div class="row">
                        <div class="col-md-3">
                            
                            <!-- START WIDGET SLIDER -->
                            <div class="widget widget-default widget-carousel">
                                <div class="owl-carousel" id="owl-example">
                                    <div>                                    
                                        <div class="widget-title">Total Items</div>                                                                        
                                        <div class="widget-subtitle">Today</div>
                                        <div class="widget-int">
                                            <?php
                                            include("basefile/dbConfig.php");
                                            $sql= "SELECT * FROM item ";
                                            $result = $db->query($sql);
                                            $num_rows = mysqli_num_rows($result);
                                            echo "$num_rows";
                                            ?>
                                        </div>
                                    </div>
                                    
                                </div>                            
                                                           
                            </div>         
                            <!-- END WIDGET SLIDER -->
                            
                        </div>
                        <div class="col-md-3">
                            
                            <!-- START WIDGET MESSAGES -->
                            <div class="widget widget-default widget-item-icon">
                                <div class="widget-item-left">
                                    <span class="fa fa-envelope"></span>
                                </div>                             
                                <div class="widget-data">
                                    <div class="widget-int num-count">
                                        <?php
                                            include("basefile/dbConfig.php");
                                            $sql= "SELECT * FROM orders where delivery='Pending'";
                                            $result = $db->query($sql);
                                            $num_rows = mysqli_num_rows($result);
                                            echo "$num_rows";
                                        ?>
                                    </div>
                                    <div class="widget-title">New Orders</div>
                                    <div class="widget-subtitle">In your application</div>
                                </div>      
                                <div class="widget-controls">                                
                                    <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
                                </div>
                            </div>                            
                            <!-- END WIDGET MESSAGES -->
                            
                        </div>
                        <div class="col-md-3">
                            
                            <!-- START WIDGET REGISTRED -->
                            <div class="widget widget-default widget-item-icon" >
                                <div class="widget-item-left">
                                    <span class="fa fa-user"></span>
                                </div>
                                <div class="widget-data">
                                    <div class="widget-int num-count">
                                        <?php
                                            include("basefile/dbConfig.php");
                                            $sql= "SELECT * FROM user ";
                                            $result = $db->query($sql);
                                            $num_rows = mysqli_num_rows($result);
                                            echo "$num_rows";
                                        ?>
                                    </div>
                                    <div class="widget-title">Registred users</div>
                                    <div class="widget-subtitle">On your Application</div>
                                </div>
                                <div class="widget-controls">                                
                                    <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
                                </div>                            
                            </div>                            
                            <!-- END WIDGET REGISTRED -->
                            
                        </div>
                        <div class="col-md-3">
                            
                            <!-- START WIDGET CLOCK -->
                            <div class="widget widget-info widget-padding-sm">
                                <div class="widget-big-int plugin-clock">00:00</div>                            
                                <div class="widget-subtitle plugin-date">Loading...</div>
                                <div class="widget-controls">                                
                                    <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="left" title="Remove Widget"><span class="fa fa-times"></span></a>
                                </div>                            
                                <div class="widget-buttons widget-c3">
                                    <div class="col">
                                        <a href="#"><span class="fa fa-clock-o"></span></a>
                                    </div>
                                    <div class="col">
                                        <a href="#"><span class="fa fa-bell"></span></a>
                                    </div>
                                    <div class="col">
                                        <a href="#"><span class="fa fa-calendar"></span></a>
                                    </div>
                                </div>                            
                            </div>                        
                            <!-- END WIDGET CLOCK -->
                            
                        </div>
                    </div>
                    <!-- END WIDGETS -->                    
    
</div>
<!-- END PAGE CONTENT WRAPPER -->       
</br></br>                
<!-- PAGE CONTENT WRAPPER -->
                <div class="col-md-1">
                </div>
                    <center>
                    <!-- START WIDGETS -->                    
                    <div class="row">
                        <div class="col-md-3">
                            
                            <!-- START WIDGET SLIDER -->
                           <!-- START WIDGET MESSAGES -->
                            <div class="widget widget-default widget-item-icon" >
                                <div class="widget-item-left">
                                    <span class="fa fa-envelope"></span>
                                </div>                             
                                <div class="widget-data">
                                    <div class="widget-int num-count">
                                        <?php
                                            include("basefile/dbConfig.php");
                                            $sql= "SELECT * FROM orders where delivery='On Delivery'";
                                            $result = $db->query($sql);
                                            $num_rows = mysqli_num_rows($result);
                                            echo "$num_rows";
                                        ?>
                                    </div>
                                    <div class="widget-title">Delivery Process Orders</div>
                                    <div class="widget-subtitle">In your application</div>
                                </div>      
                                <div class="widget-controls">                                
                                    <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
                                </div>
                            </div>                            
                            <!-- END WIDGET MESSAGES -->

                            <!-- END WIDGET SLIDER -->
                            
                        </div>
                        <div class="col-md-3">
                            
                            <!-- START WIDGET MESSAGES -->
                            <div class="widget widget-default widget-item-icon">
                                <div class="widget-item-left">
                                    <span class="fa fa-envelope"></span>
                                </div>                             
                                <div class="widget-data">
                                    <div class="widget-int num-count">
                                        <?php
                                            include("basefile/dbConfig.php");
                                            $sql= "SELECT * FROM orders where delivery='Received'";
                                            $result = $db->query($sql);
                                            $num_rows = mysqli_num_rows($result);
                                            echo "$num_rows";
                                        ?>
                                    </div>
                                    <div class="widget-title">Completed Orders</div>
                                    <div class="widget-subtitle">In your application</div>
                                </div>      
                                <div class="widget-controls">                                
                                    <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
                                </div>
                            </div>                            
                            <!-- END WIDGET MESSAGES -->
                            
                        </div>
                        <div class="col-md-3">
                            
                            <!-- START WIDGET REGISTRED -->
                            <div class="widget widget-default widget-item-icon" >
                                <div class="widget-item-left">
                                    <span class="fa fa-user"></span>
                                </div>
                                <div class="widget-data">
                                    <div class="widget-int num-count">
                                        <?php
                                            include("basefile/dbConfig.php");
                                            $sql= "SELECT * FROM admin ";
                                            $result = $db->query($sql);
                                            $num_rows = mysqli_num_rows($result);
                                            echo "$num_rows";
                                        ?>
                                    </div>
                                    <div class="widget-title">Admin users</div>
                                    <div class="widget-subtitle">On your Application</div>
                                </div>
                                <div class="widget-controls">                                
                                    <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
                                </div>                            
                            </div>                            
                            <!-- END WIDGET REGISTRED -->
                            </center>
                        </div>
                        

<!-- END PAGE CONTENT WRAPPER -->                                
<?php
    include('basefile/footer.php');
?>





