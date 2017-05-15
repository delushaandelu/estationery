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
                                <center>
                                <h2>Invoice ID : <?php
                                $cid = $_GET['ID'];
                                echo $cid;
                                ?></h2>
                                </center>
                                    <table class="table table-striped table-bordered">
															<thead>
																<tr>
																	<th class="center">Product ID</th>
																	<th>Item</th>
																	<th>Quantity</th>
																	<th class="hidden-xs">Company</th>
																	<th class="hidden-480">Price</th>
																	<th>Pages</th>
																	<th>Color</th>
																</tr>
															</thead>

															<tbody>
															<?php
																$cid = $_GET['ID'];
																include 'basefile/dbConfig.php';
																//get rows query
																$query = $db->query("SELECT order_items.product_id, order_items.quantity, item.name, item.company, item.price, item.pages, item.color
																FROM item
																INNER JOIN order_items ON item.id=order_items.product_id WHERE order_id=$cid; ");
																if($query->num_rows > 0){ 
																	while($row = $query->fetch_assoc()){
															?>
																<tr>
																	<td><?php echo $row["product_id"]; ?></td>
																	<td><?php echo $row["name"]; ?></td>
																	<td><?php echo $row["quantity"]; ?></td>
																	<td><?php echo $row["company"]; ?></td>
																	<td><?php echo $row["price"]; ?></td>
																	<td><?php echo $row["pages"]; ?></td>
																	<td><?php echo $row["color"]; ?></td>
																</tr>
															<?php
																	}
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





