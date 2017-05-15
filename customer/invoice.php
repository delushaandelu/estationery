<?php
	include('basefile/menu.php');
?>

<div class="row">
	<div class="col-xs-12">
		<!-- PAGE CONTENT BEGINS -->
<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<div class="space-6"></div>

								<div class="row">
									<div class="col-sm-10 col-sm-offset-1">
										<div class="widget-box transparent">
											<div class="widget-header widget-header-large">
												<h3 class="widget-title grey lighter">
													<i class="ace-icon fa fa-leaf green"></i>
													Customer Invoice
												</h3>

												<div class="widget-toolbar no-border invoice-info">
													<span class="invoice-info-label">Invoice:</span>
													<span class="red"><?php
													$cid = $_GET['ID'];
													echo $cid;
													?></span>

													<br />
													<span class="invoice-info-label">Date:</span>
													<span class="blue"><?php
													echo date("Y/m/d");
													?></span>
												</div>

												<div class="widget-toolbar hidden-480">
													<a href="#">
														<i class="ace-icon fa fa-print"></i>
													</a>
												</div>
											</div>

											<div class="widget-body">
												<div class="widget-main padding-24">
													<div class="row">
														<div class="col-sm-6">
															<div class="row">
																<div class="col-xs-11 label label-lg label-info arrowed-in arrowed-right">
																	<b>Company Info</b>
																</div>
															</div>

															<div>
																<ul class="list-unstyled spaced">
																	<li>
																		<i class="ace-icon fa fa-caret-right blue"></i>University of Colombo
																	</li>

																	<li>
																		<i class="ace-icon fa fa-caret-right blue"></i>Faculty Of Management & Finance
																	</li>

																	<li>
																		<i class="ace-icon fa fa-caret-right blue"></i>Colombo
																	</li>

																	<li>
																		<i class="ace-icon fa fa-caret-right blue"></i>
Phone:
																		<b class="red">011-9684636</b>
																	</li>

																	<li class="divider"></li>

																	<li>
																		<i class="ace-icon fa fa-caret-right blue"></i>
																		Paymant Info : <strong>Paid</strong>
																	</li>
																</ul>
															</div>
														</div><!-- /.col -->

														<div class="col-sm-6">
															<div class="row">
																<div class="col-xs-11 label label-lg label-success arrowed-in arrowed-right">
																	<b>Customer Info</b>
																</div>
															</div>

															<div>
																<ul class="list-unstyled  spaced">
																	<li>
																		<i class="ace-icon fa fa-caret-right green"></i>Name : <?php
																		echo $_SESSION['fname'] ?>
																	</li>

																	<li>
																		<i class="ace-icon fa fa-caret-right green"></i>Email : <?php
																		echo $_SESSION['email'] ?>
																	</li>

																	<li>
																		<i class="ace-icon fa fa-caret-right green"></i>Address : <?php
																		echo $_SESSION['address'] ?>
																	</li>

																	

																	<li>
																		<i class="ace-icon fa fa-caret-right green"></i>
																		Contact Info : <?php
																		echo $_SESSION['tele'] ?>
																	</li>
																</ul>
															</div>
														</div><!-- /.col -->
													</div><!-- /.row -->

													<div class="space"></div>

													<div>
														<table class="table table-striped table-bordered">
															<thead>
																<tr>
																	<th class="center">Product ID</th>
																	<th>Item</th>
																	<th class="hidden-xs">Company</th>
																	<th class="hidden-480">Price</th>
																	<th>Pages</th>
																	<th>Color</th>
																</tr>
															</thead>

															<tbody>
															<?php
																$cid = $_GET['ID'];
																include 'dbConfig.php';
																//get rows query
																$query = $db->query("SELECT order_items.product_id, item.name, item.company, item.price, item.pages, item.color
																FROM item
																INNER JOIN order_items ON item.id=order_items.product_id WHERE order_id=$cid; ");
																if($query->num_rows > 0){ 
																	while($row = $query->fetch_assoc()){
															?>
																<tr>
																	<td><?php echo $row["product_id"]; ?></td>
																	<td><?php echo $row["name"]; ?></td>
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

													<div class="hr hr8 hr-double hr-dotted"></div>

													<div class="row">
														<div class="col-sm-5 pull-right">
															<h4 class="pull-right">
																Total amount :
																<span class="red">
																<?php
																$xid = $_GET['ID'];
																include 'dbConfig.php';
																$query = $db->query("SELECT total_price FROM orders where id='$xid");
																echo $query;
																?>
																</span>
															</h4>
														</div>
														<div class="col-sm-7 pull-left"> Extra Information </div>
													</div>

													<div class="space-6"></div>
													<div class="well">
														Thank you for choosing Ace Company products.
				We believe you will be satisfied by our services.
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
		<!-- PAGE CONTENT ENDS -->
	</div><!-- /.col -->
</div><!-- /.row -->

<?php
	include('basefile/footer.php');
?>