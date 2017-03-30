<?php
    include('basefile/menu.php');
?>
                
<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">
    
    <div class="row">
									<div class="col-xs-12">
										<h3 class="header smaller lighter blue">Received Purchase Orders</h3>

										<div class="clearfix">
											<div class="pull-right tableTools-container"></div>
										</div>
										<div class="table-header">
											Manage Received Purchase Orders
										</div>

										<!-- div.table-responsive -->

										<!-- div.dataTables_borderWrap -->
										<div>
											<table id="dynamic-table" class="table table-striped table-bordered table-hover">
												<thead>
													<tr>
														<th class="center">
															<label class="pos-rel">
																<input type="checkbox" class="ace" />
																<span class="lbl"></span>
															</label>
														</th>
														<th>Order ID</th>
														<th>Price</th>
														<th class="hidden-480">Ordered Date</th>

														<th>
															<i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>
															Modified Date
														</th>
														<th class="hidden-480">Delivery Status</th>

														<th></th>
													</tr>
												</thead>

												<tbody>

												<?php
													
													include 'basefile/dbConfig.php';
													//get rows query
													$query = $db->query("SELECT * FROM orders where delivery='Received' ");
													if($query->num_rows > 0){ 
														while($row = $query->fetch_assoc()){
												?>
													<tr>
														<td class="center">
															<label class="pos-rel">
																<input type="checkbox" class="ace" />
																<span class="lbl"></span>
															</label>
														</td>

														<td>
															<a href="#"><?php echo $row["id"]; ?></a>
														</td>
														<td><?php echo 'Rs. '.$row["total_price"]; ?></td>
														<td class="hidden-480"><?php echo $row["created"]; ?></td>
														<td><?php echo $row["modified"]; ?></td>

														<td class="hidden-480">
															<span class="label label-sm label-warning"><?php echo $row["delivery"]; ?></span>
														</td>

														<td>
															<div class="hidden-sm hidden-xs action-buttons">
																<a class="blue" onclick="location.href='view.php?ID=<?php echo $row['id'] ?>'">
																	<i class="ace-icon fa fa-search-plus bigger-130"></i>
																</a>
															
																<a class="red" href="#">
																	<i class="ace-icon fa fa-trash-o bigger-130"></i>
																</a>
															</div>

															<div class="hidden-md hidden-lg">
																<div class="inline pos-rel">
																	<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
																		<i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
																	</button>

																	<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
																		<li>
																			<a href="#" class="tooltip-info" data-rel="tooltip" title="View">
																				<span class="blue">
																					<i class="ace-icon fa fa-search-plus bigger-120"></i>
																				</span>
																			</a>
																		</li>

																		<li>
																			<a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
																				<span class="green">
																					<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																				</span>
																			</a>
																		</li>

																		<li>
																			<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																				<span class="red">
																					<i class="ace-icon fa fa-trash-o bigger-120"></i>
																				</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
														</td>
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

		<!-- PAGE CONTENT ENDS -->
	</div><!-- /.col -->
</div><!-- /.row -->

</div>
<!-- END PAGE CONTENT WRAPPER -->                                
<?php
    include('basefile/footer.php');
?>





