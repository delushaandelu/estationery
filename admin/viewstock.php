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
                                                <th>ID</th>
                                                <th>NAME</th>  
                                                <th>COMPANY</th> 
                                                <th>PAGES</th>
                                                <th>COST</th>
                                                <th>PRICE</th>
                                                <th>SIZE</th>
                                                <th>PURPOSE</th>
                                                <th>SNAME</th>
                                                <th>TYPE</th>
                                                <th>COLOR</th>
                                                <th>ACTION</th>                                             
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                            include("basefile/dbConfig.php");
                                        
                                            $sql= "SELECT * FROM ITEM ";
                                            $result = $db->query($sql);  
                                            while($row = $result->fetch_assoc()) {
                                        ?>
                                            <tr>
                                                <td><?php echo $row['id'] ?></td>
                                                <td><?php echo $row['name'] ?></td>
                                                <td><?php echo $row['company'] ?></td>
                                                <td><?php echo $row['pages'] ?></td>
                                                <td><?php echo $row['cost'] ?></td>
                                                <td><?php echo $row['price'] ?></td>
                                                <td><?php echo $row['size'] ?></td>
                                                <td><?php echo $row['purpose'] ?></td>
                                                <td><?php echo $row['sname'] ?></td>
                                                <td><?php echo $row['type'] ?></td>
                                                <td><?php echo $row['color'] ?></td>
                                                <td><button class="btn btn-primary"><i class="fa fa-trash-o" aria-hidden="true" onclick="location.href='viewstock.php?id=<?php echo $row['id'] ?>'"></i></button></td>
                                            </tr>
                                           <?php
                                            }
                                           ?>
                                        </tbody>
                                    </table>
                                    <?php
                                    if(isset($_GET['id'])){
                                        $id = $_GET['id'];
                                        $sql= "delete from item where id = '$id'";
                                        mysqli_query($db,$sql);
                                        echo'<script>';
                                        echo"alert('Success | Record Deleted Successfully!')";
                                        echo'</script>';
                                    }
                                    ?>
                                </div>
                                </div>
    
</div>
<!-- END PAGE CONTENT WRAPPER -->                                
<?php
    include('basefile/footer.php');
?>





