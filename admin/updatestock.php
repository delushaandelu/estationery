<?php
    include('basefile/menu.php');
    $id = $_GET['id'];
?>
                
<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">
    <div class="col-md-12">
                            
                            <form class="form-horizontal" method="POST" >
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
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <?php 
                                                            include("basefile/dbConfig.php");
                                                        
                                                            $sql= "SELECT * FROM ITEM WHERE id=$id ";
                                                            $result = $db->query($sql); 
                                                            $row = $result->fetch_assoc();
                                                        ?>
                                                        <input type="text" class="form-control" name="item" value="<?php echo $row['name'] ?>"/>
                                                    </div>  
                                                    <span class="help-block">Select item name here</span>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Company </label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="text" class="form-control" name="brand" value="<?php echo $row['company'] ?>" />
                                                    </div>  
                                                    <span class="help-block">Select item name here</span>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Pages</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="text" class="form-control" name="pages" value="<?php echo $row['pages'] ?>"/>
                                                    </div>                                            
                                                    <span class="help-block">Number of pages of the book</span>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Cost</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="text" class="form-control" name="cost" value="<?php echo $row['cost'] ?>"/>
                                                    </div>                                            
                                                    <span class="help-block">Cost amount of the product</span>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Purpose</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil" ></span></span>
                                                        <input type="text" class="form-control" name="pur" value="<?php echo $row['purpose'] ?>"/>
                                                    </div>  
                                                    <span class="help-block">Size of the book</span>
                                                </div>
                                            </div>      

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Item Name</label>
                                                <div class="col-md-9">                                                                                            
                                                    <input type="text" class="form-control" name="sname" value="<?php echo $row['sname'] ?>"/>
                                                    <span class="help-block">Name of the item..(If the item is Activity used item)</span>
                                                </div>
                                            </div>       
                                            
                                        </div>
                                        <div class="col-md-6">
                                            
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Selling Price</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="text" class="form-control" name="price" value="<?php echo $row['price'] ?>"/>
                                                    </div>                                            
                                                    <span class="help-block">Selling Price of the product</span>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Size</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="text" class="form-control" name="size" value="<?php echo $row['size'] ?>"/>
                                                    </div>  
                                                </div>
                                            </div>                                            
                                            
                                            <div class="form-group">
                                                <label class="col-md-3 control-label" >Type</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="text" class="form-control" name="ty" value="<?php echo $row['pages'] ?>"/>
                                                    </div>  
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Color</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="text" class="form-control" name="color" value="<?php echo $row['color'] ?>"/>
                                                    </div>                                            
                                                    <span class="help-block">Color of the Product</span>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Image</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="text" class="form-control" name="img" value="<?php echo $row['img'] ?>"/>
                                                    </div>                                            
                                                    <span class="help-block">Copy paste the link of the image from GOOGLE</span>
                                                </div>
                                            </div>
                                            
                                            
                                        </div>
                                        
                                    </div>

                                </div>
                                <div class="panel-footer">
                                    <button class="btn btn-default">Clear Form</button>                                    
                                    <button class="btn btn-primary pull-right" name="submit">UPDATE</button>
                                    <?php
                                        if(isset($_POST["submit"])){
                                            $id = $_GET['id'];
                                            include('basefile/dbConfig.php');
                                            $name = $_POST['item'];
                                            $brand = $_POST['brand'];
                                            $pages = $_POST['pages'];
                                            $cost = $_POST['cost'];
                                            $sname = $_POST['sname'];
                                            $pur = $_POST['pur'];
                                            $price = $_POST['price'];
                                            $size = $_POST['size'];
                                            $ty = $_POST['ty'];
                                            $color = $_POST['color'];
                                            $img =$_POST['img'];
                                            
                                            //query
                                            $sql = "UPDATE item SET name='$name', company='$brand', pages='$pages', cost='$cost', sname='$sname', purpose='$pur', price='$price', size='$size', type='$ty', color='$color', img='$img'   WHERE id='$id' ";
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





