<?php
    include('basefile/menu.php');
?>
                
<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">
    <div class="col-md-12">
                            
                            <form class="form-horizontal" method="POST" action="stock.php">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Stock</strong> Management</h3>
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>
                                </div>
                                
                                <div class="panel-body">                                                                        
                                    
                                    <div class="row">
                                        
                                        <div class="col-md-6">
                                            
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Item </label>
                                                <div class="col-md-9">                                                                                            
                                                    <select class="form-control select" name="item">
                                                        <?php 
                                                        include("basefile/dbConfig.php");
                                                        $sql= "SELECT * FROM itemname ";
                                                        $result = $db->query($sql);  
                                                        while($row = $result->fetch_assoc()) {
                                                    ?>
                                                        <option><?php echo $row['name'] ?></option>
                                                    <?php
                                                        }
                                                    ?>
                                                    </select>
                                                    <span class="help-block">Select item name here</span>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Item </label>
                                                <div class="col-md-9">                                                                                            
                                                    <select class="form-control select" name="brand">
                                                        <?php 
                                                        include("basefile/dbConfig.php");
                                                        $sql= "SELECT * FROM brand ";
                                                        $result = $db->query($sql);  
                                                        while($row = $result->fetch_assoc()) {
                                                    ?>
                                                        <option><?php echo $row['company'] ?></option>
                                                    <?php
                                                        }
                                                    ?>
                                                    </select>
                                                    <span class="help-block">Select item name here</span>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Pages</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="text" class="form-control" name="pages"/>
                                                    </div>                                            
                                                    <span class="help-block">Number of pages of the book</span>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Cost</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="text" class="form-control" name="cost"/>
                                                    </div>                                            
                                                    <span class="help-block">Cost amount of the product</span>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="col-md-6">
                                            
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Selling Price</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="text" class="form-control" name="price"/>
                                                    </div>                                            
                                                    <span class="help-block">Selling Price of the product</span>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Size</label>
                                                <div class="col-md-9">                                                                                            
                                                    <select class="form-control select" name="size">
                                                        <option>Option 1</option>
                                                        <option>Option 2</option>
                                                        <option>Option 3</option>
                                                        <option>Option 4</option>
                                                        <option>Option 5</option>
                                                    </select>
                                                    <span class="help-block">Size of the book</span>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Rule Type</label>
                                                <div class="col-md-9">                                                                                            
                                                    <select class="form-control select" name="rule">
                                                        <option>Option 1</option>
                                                        <option>Option 2</option>
                                                        <option>Option 3</option>
                                                        <option>Option 4</option>
                                                        <option>Option 5</option>
                                                    </select>
                                                    <span class="help-block">Rule Type of the book</span>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="col-md-3 control-label" >Type</label>
                                                <div class="col-md-9">                                                                                            
                                                    <select class="form-control select" name="ty">
                                                        <option>Option 1</option>
                                                        <option>Option 2</option>
                                                        <option>Option 3</option>
                                                        <option>Option 4</option>
                                                        <option>Option 5</option>
                                                    </select>
                                                    <span class="help-block">Type of the book</span>
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
                                            $name = $_POST['item'];
                                            $brand = $_POST['brand'];
                                            $pages = $_POST['pages'];
                                            $cost = $_POST['cost'];
                                            $price = $_POST['price'];
                                            $size = $_POST['size'];
                                            $rule = $_POST['rule'];
                                            $ty = $_POST['ty'];
                                            
                                            //query
                                            $sql= "INSERT INTO item(name,company,pages,cost,price,size,rule,type) 
                                            VALUES ('$name','$brand','$pages','$cost','$price','$size','$rule','$ty')";
                                            $result = $db->query($sql);
                                    
                                            if($result){
                                                echo'<script>';
                                                echo"alert('SUCCESS | Item Added')";
                                                echo'</script>';
                                            }
                                            else{
                                                echo'<script>';
                                                echo"alert('FAILED | Item Not Added')";
                                                echo'</script>';
                                            }
                                        }
                                    ?> 
                                </div>
                            </div>
                            </form>
                            
                        </div>
                    </div>           
        
   
</div>
<!-- END PAGE CONTENT WRAPPER -->                                
<?php
    include('basefile/footer.php');
?>





