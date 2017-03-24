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
                                    <h3 class="panel-title">Manage Customers</h3>
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
                                                <th>FULLNAME</th>  
                                                <th>EMAIL</th> 
                                                <th>ADDRESS</th>
                                                <th>NIC</th>
                                                <th>TELE</th>
                                                <th>USERNAME</th>    
                                                <th>STATUS</th>      
                                                <th>ACTION</th>                                     
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                            include("basefile/dbConfig.php");
                                        
                                            $sql= "SELECT * FROM user ";
                                            $result = $db->query($sql);  
                                            while($row = $result->fetch_assoc()) {
                                        ?>
                                            <tr>
                                                <td><?php echo $row['id'] ?></td>
                                                <td><?php echo $row['fullname'] ?></td>
                                                <td><?php echo $row['email'] ?></td>
                                                <td><?php echo $row['address'] ?></td>
                                                <td><?php echo $row['nic'] ?></td>
                                                <td><?php echo $row['tele'] ?></td>
                                                <td><?php echo $row['username'] ?></td>
                                                <td><?php echo $row['status'] ?></td>
                                                <td><button class="btn btn-primary"><i class="fa fa-trash-o" aria-hidden="true" onclick="location.href='manageuser.php?id=<?php echo $row['id'] ?>'"></i></button></td>
                                            </tr>
                                           <?php
                                            }
                                           ?>
                                        </tbody>
                                    </table>
                                    <?php
                                    if(isset($_GET['id'])){
                                        $id = $_GET['id'];
                                        $sql= "delete from user where id = '$id'";
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





