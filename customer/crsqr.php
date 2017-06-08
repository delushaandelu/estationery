<?php
	include('basefile/menu.php');
?>

<div class="row">
	<div class="col-xs-12">
		<!-- PAGE CONTENT BEGINS -->
<div class="container">
    <h2 class="list-group-item-heading">CR Square Rule Book</h2>
    <a href="viewCart.php" class="cart-link" title="View Cart"><i class="glyphicon glyphicon-shopping-cart"></i></a>
    <div id="products" class="row list-group">
        <?php
		include 'dbConfig.php';
        //get rows query
        $query = $db->query("SELECT * FROM item where name='CR Square Rule' ORDER BY id ");
        if($query->num_rows > 0){ 
            while($row = $query->fetch_assoc()){
        ?>
        <div class="item col-lg-4">
            <div class="thumbnail">
                <div class="caption">
                   
                    <h3 class="list-group-item-text"><?php echo $row["company"]; ?></h3>
                    <div class="row">
                        <div class="col-md-6">
                            
                            <h6><b><?php echo 'Pages : '.$row["pages"]; ?></b></h6>
                            <h6><b><?php echo 'Rs. '.$row["price"].' LKR'; ?></b></h6>
                        </div>
                        <div class="col-md-6">
                             <img src='<?php echo $row["img"]; ?>' height="40%" width="40%" style="background-attachment: fixed;" >
                            <a class="btn btn-success" href="cartAction.php?action=addToCart&id=<?php echo $row["id"]; ?>">Add to cart</a>
                        </div>.
                    </div>
                </div>
            </div>
        </div>
        <?php } }else{ ?>
        <p>Product(s) not found.....</p>
        <?php } ?>
    </div>
</div>
		<!-- PAGE CONTENT ENDS -->
	</div><!-- /.col -->
</div><!-- /.row -->

<?php
	include('basefile/footer.php');
?>