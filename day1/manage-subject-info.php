<?php include "includes/head-logo.php"; ?>	
<?php include "includes/header.php"; ?>	
<?php include "includes/sidebar.php"; ?>

	<section role="main" class="content-body">
					<header class="page-header">
						<h2>Subject Info</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="index.html">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Subject</span></li>
								<li><span>Subject Info</span></li>
							</ol>
							<span>&nbsp</span>
							<span>&nbsp</span>
							
						</div>
					</header>

					<!-- start: page -->
						<section class="panel">
							<header class="panel-heading">
								<div class="panel-actions">
									<a href="#" class="fa fa-caret-down"></a>
									<a href="#" class="fa fa-times"></a>
								</div>
						
								<h2 class="panel-title my-4">Subject Info List</h2>
							</header>
							<div class="panel-body">
								<div class="row">
									<div class="col-sm-6 col-md-9 d-inline">
										<div class="mb-md">
                                         
											<!-- <button type="button" class="btn btn-primary" data-toggle="modal" on-click="#" data-target="#exampleModalCenter">Add <i class="fa fa-plus"></i></button> -->
											
											<a class="mb-xs mt-xs mr-xs modal-sizes btn btn-primary" href="#modalLG">Add<i class="fa fa-plus"></i></a> 
												
											
											
											

                                            <!-- Modal -->
                                        		<div id="modalLG" class="modal-block modal-block-lg mfp-hide">
										<section class="panel">
											<header class="panel-heading">
												<h2 class="panel-title">Add New Subject</h2>
											</header>
											<div class="panel-body">
												<div class="modal-wrapper">
													



											
										<form class="form-horizontal form-bordered" method="get">
											
						
											<div class="form-group has-secondary">
												<label class="col-md-3 control-label" for="inputSuccess"><b>Select Subject</b></label>
												<div class="col-md-6">
													
													<select class="form-control mb-md">
														<option>--Select--</option>
														<option>Option 1</option>
														<option>Option 2</option>
														<option>Option 3</option>
													</select>
												</div>
												
													

											</div>




											<div class="panel-body">
										<form class="form-horizontal form-bordered">
											<div class="form-group">
												<label class="col-md-3 control-label"><b>Subject Description</b></label>
												<div class="col-md-9">
													<textarea name="content" data-plugin-markdown-editor rows="10">### Hello there
						How are you?
						
						I have bellow task for you :
						
						Select from this text...
						Click the bold on THIS WORD and make THESE ONE italic
						Link GOOGLE to google.com
						Test to insert image (and try to tab after write the image description)
						Test Preview
						And ending here... Click "List"
						
						Enjoy!</textarea>
												</div>
											</div>
						</div>
						</form>
							<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text">Upload</span>
  </div>
  <div class="custom-file">
    <input type="file" class="custom-file-input" id="inputGroupFile01">
   
  </div>
</div>		
																					
											
                                               <footer class="panel">
												<div class="row">
													<div class="col-md-12 text-right">
														<button class="btn btn-primary modal-confirm">Submit</button>
														<button class="btn btn-default modal-dismiss">Close</button>
													</div>
												</div>
											</footer>
                                                </div>
                                            </div>
                                            </div>
                                            <!-- end modal -->
										</div>
                                    </div>
                                    <div class="col-sm-4 col-md-3 float-right">
                                    	<input class="form-control form-control-sm mr-5 w-75" type="text" placeholder="Search" aria-label="Search">
								  	</div>
								
							</div>
								<table class="table table-bordered table-striped mb-none" id="datatable-editable">
									<thead>
										<tr>
											<th>Subject Id</th>
											<th>Subject Name</th>
											<th>Subject Info</th>
											<th>Images</th>
											<th>Date Registered</th>
											<th>Current Status</th>
											<th>Actions</th>
										</tr>
									</thead>
									<tbody>
										<tr class="gradeX">
											<td>Trident</td>
											<td>Internet
												Explorer 4.0
											</td>
                                            <td>Win 95+</td>
											<td><img src="assets/images/kavinlogo.jpg" width="50" height="100"></td>
											<td>28 Nov 2020</td>
                                            <td type="text" class="text-success">ACTIVE</td>
											<td class="actions">
												<a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
												<a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
												<a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
												<a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
											</td>
										</tr>
										<tr class="gradeC">
											<td>Trident</td>
											<td>Internet
												Explorer 5.0
											</td>
                                            <td>Win 95+</td>
											<td><img src="assets/images/kavinlogo.jpg" width="50" height="100"></td>
											<td>29 Nov 2020</td>
                                            <td type="text" class="text-danger">INACTIVE</td>
											<td class="actions">
												<a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
												<a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
												<a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
												<a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
											</td>
										</tr>
										<tr class="gradeA">
											<td>Trident</td>
											<td>Internet
												Explorer 5.5
											</td>
                                            <td>Win 95+</td>
											<td><img src="assets/images/etestlogo.jpg" width="50" height="100"></td>
											<td>30 Nov 2020</td>
                                            <td type="text" class="text-danger">INACTIVE</td>
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