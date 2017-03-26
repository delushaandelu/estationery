<?php
    include('basefile/menu.php');
?>
                
<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">
 <div class="row">
                        <div class="col-md-12">

                            <!-- START DEFAULT DATATABLE -->
                            <div class="panel panel-default">
                                <div class="panel-heading">                                
                                    <h3 class="panel-title">Default</h3>
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                                        <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>                                
                                </div>
                                <div class="panel-body">
                                    <table class="table datatable">
                                        <thead>
                                            <tr>
                                                <th>Product ID</th>
                                                <th>QTY</th>                                          
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                            include("basefile/dbConfig.php");
                                            $id = $_GET['ID'];   
                                            $sql= "SELECT * FROM order_items where order_id = '$id' ";
                                            $result = $db->query($sql);  
                                            while($row = $result->fetch_assoc()) {
                                        ?>
                                            <tr>
                                                <td><?php echo $row['product_id'] ?></td>
                                                <td><?php echo $row['quantity'] ?></td>
                                            </tr>
                                           <?php
                                            }
                                           ?>
                                        </tbody>
                                    </table>
                                </div>
                                </div>
    
</div>
<!-- END PAGE CONTENT WRAPPER -->                                
<?php
    include('basefile/footer.php');
?>





