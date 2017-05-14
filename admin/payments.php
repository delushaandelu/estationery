<?php
    include('basefile/menu.php');
?>
                
<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">
    
    <div class="col-xs-12">
										<h3 class="header smaller lighter blue">Received Payments</h3>

										<div class="clearfix">
											<div class="pull-right tableTools-container"></div>
										</div>
										<div class="table-header">
											Manage Payments
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
														<th>Payment ID</th>
														<th>TXNID</th>
														<th class="hidden-480">Payment Amount</th>

														<th>
															
															Payment Status
														</th>
														<th class="hidden-480">Order ID</th>
                                                        <th class="hidden-480"><i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>Payment Date Time</th>

														<th></th>
													</tr>
												</thead>

												<tbody>

												<?php
													include 'basefile/dbConfig.php';
													//get rows query
													$query = $db->query("SELECT * FROM payments ");
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
														<td><?php echo $row["txnid"]; ?></td>
														<td class="hidden-480"><?php echo "PND ".$row["payment_amount"]; ?></td>
														<td><?php echo $row["payment_status"]; ?></td>

														<td class="hidden-480">
															<?php echo $row["itemid"]; ?>
														</td>
                                                        <td class="hidden-480">
															<span class="label label-sm label-warning"><?php echo $row["createdtime"]; ?></span>
														</td>

														<td>
															<div class="hidden-sm hidden-xs action-buttons">
																<a class="blue" onclick="location.href='view.php?ID=<?php echo $row['id'] ?>'" >
																	<i class="ace-icon fa fa-search-plus bigger-130"></i>
																</a>

																<a class="green" onclick="location.href='mngorders.php?ID=<?php echo $row['id'] ?>'" >
																	<i class="fa fa-check-square" aria-hidden="true"></i>
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
</div>
<!-- END PAGE CONTENT WRAPPER -->                                
<?php
    include('basefile/footer.php');
?>





