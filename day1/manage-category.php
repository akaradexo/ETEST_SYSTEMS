<?php include "includes/head-logo.php"; ?>
    <?php include "includes/header.php"; ?>
    <?php include "includes/sidebar.php"; ?>

				<section role="main" class="content-body">
					<header class="page-header">
						<h2>Manage Category</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="index.html">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Tables</span></li>
								<li><span>Category</span></li>
							</ol>
					
							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
						</div>
					</header>

					<!-- start: page -->
                    <section class="panel">
							<header class="panel-heading">
								<div class="panel-actions">
									<a href="#" class="fa fa-caret-down"></a>
									<a href="#" class="fa fa-times"></a>
								</div>
						
								<h2 class="panel-title">Category List</h2>
							</header>
							<div class="panel-body">
                            <div class="col-sm-6">
							<!-- ---- -->
							
							<a class="mb-xs mt-xs mr-xs modal-sizes btn btn-primary" href="#modalMD">Add <i class="fa fa-plus"></i></a> 
							
									<div id="modalMD" class="modal-block modal-block-md mfp-hide">
										<section class="panel">
											<header class="panel-heading">
												<h2 class="panel-title">Add Categories</h2>
											</header>
											<div class="panel-body">
											<form id="demo-form" class="form-horizontal mb-lg" novalidate="novalidate">
													<div class="form-group mt-lg">
														<label class="col-sm-3 control-label">Category Name<span class="required">*</span></label>
														<div class="col-sm-9">
															<input type="text" name="name" class="form-control" placeholder="" required/>
														</div>
													</div>
													<div class="form-group mt-lg">
														<label class="col-sm-3 control-label">Select Department<span class="required">*</span></label>
														<div class="col-sm-9">
															<select name="" id="" required>
  																<option value="">1</option>
  																<option value="">2</option>
  																<option value="">3</option>
  																<option value="">4</option>
															</select>
														</div>
													</div>
												</form>
											</div>
											<footer class="panel-footer">
												<div class="row">
													<div class="col-md-12 text-right">
													
														<button class="btn btn-primary modal-confirm">Submit</button>
														<button class="btn btn-default modal-dismiss">Close</button>
														
													</div>	
												</div>
											</footer>
										</section>
									</div>


							<!-- ----- -->
							
			</div>				
				<div class="col-sm-12 col-md-6">
						<div id="datatable-default_filter" class="dataTables_filter">
							<label><input type="search" class="form-control" placeholder="Search" aria-controls="datatable-default"></label>
						</div>
				</div>
                   

								
								<table class="table table-bordered table-striped mb-none" id="datatable-editable">
									<thead>
										<tr>
											<th>Sr. No.</th>
											<th>Name</th>
											<th>Department</th>
											<th>Created Date</th>
											<th>Status</th>
											<th>Actions</th>
										</tr>
									</thead>
									<tbody>
										<tr class="gradeX">
											<td>1</td>
											<td>Trident</td>
											<td>Internet
												Explorer 4.0
											</td>
                                            <td>Win 95+</td>
                                            <td>ACTIVE</td>
											<td class="actions">
												<a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
												<a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
												<a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
												<a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
											</td>
										</tr>
										<tr class="gradeC">
											<td>2</td>
											<td>Trident</td>
											<td>Internet
												Explorer 5.0
											</td>
											<td>Win 95+</td>
                                            <td>INACTIVE</td>
											<td class="actions">
												<a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
												<a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
												<a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
												<a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
											</td>
										</tr>
										<tr class="gradeA">
											<td>3</td>
											<td>Trident</td>
											<td>Internet
												Explorer 5.5
											</td>
											<td>Win 95+</td>
                                            <td>ACTIVE</td>
											<td class="actions">
												<a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
												<a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
												<a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
												<a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
											</td>
										</tr>
										<tr class="gradeA">
											<td>4</td>
											<td>Trident</td>
											<td>Internet
												Explorer 6
											</td>
											<td>Win 98+</td>
                                            <td>INACTIVE</td>
											<td class="actions">
												<a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
												<a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
												<a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
												<a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
											</td>
										</tr>
										<tr class="gradeA">
											<td>5</td>
											<td>Trident</td>
											<td>Internet Explorer 7</td>
											<td>Win XP SP2+</td>
                                            <td>INACTIVE</td>
											<td class="actions">
												<a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
												<a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
												<a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
												<a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
											</td>
										</tr>
										<tr class="gradeA">
											<td>6</td>
											<td>Trident</td>
											<td>AOL browser (AOL desktop)</td>
											<td>Win XP</td>
                                            <td>ACTIVE</td>
											<td class="actions">
												<a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
												<a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
												<a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
												<a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
											</td>
										</tr>
										<tr class="gradeA">
											<td>7</td>
											<td>Gecko</td>
											<td>Firefox 1.0</td>
											<td>Win 98+ / OSX.2+</td>
                                            <td>INACTIVE</td>
											<td class="actions">
												<a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
												<a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
												<a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
												<a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
											</td>
										</tr>
										<tr class="gradeA">
											<td>8</td>
											<td>Gecko</td>
											<td>Firefox 1.5</td>
											<td>Win 98+ / OSX.2+</td>
                                            <td>INACTIVE</td>
											<td class="actions">
												<a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
												<a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
												<a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
												<a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
											</td>
										</tr>
										<tr class="gradeA">
											<td>9</td>
											<td>Gecko</td>
											<td>Firefox 2.0</td>
											<td>Win 98+ / OSX.2+</td>
                                            <td>ACTIVE</td>
											<td class="actions">
												<a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
												<a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
												<a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
												<a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
											</td>
										</tr>
										<tr class="gradeA">
											<td>10</td>
											<td>Gecko</td>
											<td>Firefox 3.0</td>
											<td>Win 2k+ / OSX.3+</td>
                                            <td>ACTIVE</td>
											<td class="actions">
												<a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
												<a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
												<a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
												<a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
											</td>
										</tr>
										<tr class="gradeA">
											<td>11</td>
											<td>Gecko</td>
											<td>Camino 1.0</td>
											<td>OSX.2+</td>
                                            <td>INACTIVE</td>
											<td class="actions">
												<a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
												<a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
												<a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
												<a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
											</td>
										</tr>
										<tr class="gradeA">
											<td>12</td>
											<td>Gecko</td>
											<td>Camino 1.5</td>
											<td>OSX.3+</td>
                                            <td>ACTIVE</td>
											<td class="actions">
												<a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
												<a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
												<a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
												<a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
											</td>
										</tr>
									
										
										
										
									</tbody>
								</table>
							</div>
						</section>
					<!-- end: page -->
				</section>
			</div>

			<aside id="sidebar-right" class="sidebar-right">
				<div class="nano">
					<div class="nano-content">
						<a href="#" class="mobile-close visible-xs">
							Collapse <i class="fa fa-chevron-right"></i>
						</a>
			
						<div class="sidebar-right-wrapper">
			
							<div class="sidebar-widget widget-calendar">
								<h6>Upcoming Tasks</h6>
								<div data-plugin-datepicker data-plugin-skin="dark" ></div>
			
								<ul>
									<li>
										<time datetime="2014-04-19T00:00+00:00">04/19/2014</time>
										<span>Company Meeting</span>
									</li>
								</ul>
							</div>
			
							<div class="sidebar-widget widget-friends">
								<h6>Friends</h6>
								<ul>
									<li class="status-online">
										<figure class="profile-picture">
											<img src="assets/images/!sample-user.jpg" alt="Joseph Doe" class="img-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Joseph Doe Junior</span>
											<span class="title">Hey, how are you?</span>
										</div>
									</li>
									<li class="status-online">
										<figure class="profile-picture">
											<img src="assets/images/!sample-user.jpg" alt="Joseph Doe" class="img-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Joseph Doe Junior</span>
											<span class="title">Hey, how are you?</span>
										</div>
									</li>
									<li class="status-offline">
										<figure class="profile-picture">
											<img src="assets/images/!sample-user.jpg" alt="Joseph Doe" class="img-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Joseph Doe Junior</span>
											<span class="title">Hey, how are you?</span>
										</div>
									</li>
									<li class="status-offline">
										<figure class="profile-picture">
											<img src="assets/images/!sample-user.jpg" alt="Joseph Doe" class="img-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Joseph Doe Junior</span>
											<span class="title">Hey, how are you?</span>
										</div>
									</li>
								</ul>
							</div>
			
						</div>
					</div>
				</div>
			</aside>
		</section>

		<div id="dialog" class="modal-block mfp-hide">
			<section class="panel">
				<header class="panel-heading">
					<h2 class="panel-title">Are you sure?</h2>
				</header>
				<div class="panel-body">
					<div class="modal-wrapper">
						<div class="modal-text">
							<p>Are you sure that you want to delete this row?</p>
						</div>
					</div>
				</div>
				<footer class="panel-footer">
					<div class="row">
						<div class="col-md-12 text-right">
							<button id="dialogConfirm" class="btn btn-primary">Confirm</button>
							<button id="dialogCancel" class="btn btn-default">Cancel</button>
						</div>
					</div>
				</footer>
			</section>
		</div>

	
<?php include "includes/footer.php"; ?>   	