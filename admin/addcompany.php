<?php
    include('basefile/menu.php');
?>
                
<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">
    <div class="row">
                        <div class="col-md-12">
                            
                            <form class="form-horizontal" method="POST" action="addcompany.php">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Add</strong> Stationery Info</h3>
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>
                                </div>
                               
                                <div class="panel-body">                                                                        
                                    
                                    <div class="row">
                                        
                                        <div class="col-md-6">
                                            
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Company Name</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="text" name="name" class="form-control"/>
                                                    </div>                                            
                                                    <span class="help-block">Add the name of the item</span>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Email</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="text" name="email" class="form-control"/>
                                                    </div>                                            
                                                    <span class="help-block">Email address of the company</span>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Telephone Number</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="text" name="num" class="form-control"/>
                                                    </div>                                            
                                                    <span class="help-block">Company Telephone Number</span>
                                                </div>
                                            </div>
                                            
                                            
                                        </div>
                                        
                                        
                                    </div>

                                </div>
                                <div class="panel-footer">
                                    <button class="btn btn-default">Clear Form</button>                                    
                                    <button class="btn btn-primary pull-right" name="submit">Submit</button>
                                    <?php
                                        if(isset($_POST["submit"])){
                                            include('basefile/dbConfig.php');
                                            $name = $_POST['name'];
                                            $email = $_POST['email'];
                                            $num = $_POST['num'];
                                            //query
                                            $sql= "INSERT INTO brand(company,email,contect,status) VALUES ('$name','$email','$num','1')";
                                            $result = $db->query($sql);
                                    
                                            if($result){
                                                echo'<script>';
                                                echo"alert('SUCCESS | Company Added')";
                                                echo'</script>';
                                            }
                                            else{
                                                echo'<script>';
                                                echo"alert('FAILED | Company Not Added')";
                                                echo'</script>';
                                            }
                                        }
                                    ?> 
                                </div>
                            </div>
                            </form>
                            
                        </div>
                    </div>           
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
                                                <th>EMAIL</th>            
                                                <th>TELEPHONE</th>  
                                                <th>ACTION</th>                                    
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                            include("basefile/dbConfig.php");
                                        
                                            $sql= "SELECT * FROM brand ";
                                            $result = $db->query($sql);  
                                            while($row = $result->fetch_assoc()) {
                                        ?>
                                            <tr>
                                                <td><?php echo $row['id'] ?></td>
                                                <td><?php echo $row['company'] ?></td>
                                                <td><?php echo $row['email'] ?></td>
                                                <td><?php echo $row['contect'] ?></td>
                                                <td><button class="btn btn-primary"><i class="fa fa-trash-o" aria-hidden="true" onclick="location.href='addcompany.php?id=<?php echo $row['id'] ?>'"></i></button></td>
                                            </tr>
                                           <?php
                                            }
                                           ?>
                                        </tbody>
                                    </table>
                                    <?php
                                    if(isset($_GET['id'])){
                                        $id = $_GET['id'];
                                        $sql= "delete from brand where id = '$id'";
                                        mysqli_query($db,$sql);
                                        echo'<script>';
                                        echo"alert('Success | Record Deleted Successfully!')";
                                        echo'</script>';
                                    }
                                    ?>
                                </div>
   
</div>
<!-- END PAGE CONTENT WRAPPER -->                                
<?php
    include('basefile/footer.php');
?>





