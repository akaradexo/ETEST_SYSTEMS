<!doctype html>
<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title>Manage Subject Info</title>
		<meta name="keywords" content="HTML5 Admin Template" />
		<meta name="description" content="Porto Admin - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.css" />
		<link rel="stylesheet" href="assets/vendor/magnific-popup/magnific-popup.css" />
		<link rel="stylesheet" href="assets/vendor/bootstrap-datepicker/css/datepicker3.css" />

		<!-- Specific Page Vendor CSS -->
		<link rel="stylesheet" href="assets/vendor/select2/select2.css" />
		<link rel="stylesheet" href="assets/vendor/pnotify/pnotify.custom.css" />
		<link rel="stylesheet" href="assets/vendor/jquery-datatables-bs3/assets/css/datatables.css" />

		<!-- Theme CSS -->
		<link rel="stylesheet" href="assets/stylesheets/theme.css" />

		<!-- Skin CSS -->
		<link rel="stylesheet" href="assets/stylesheets/skins/default.css" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="assets/stylesheets/theme-custom.css">

		<!-- Head Libs -->
		<script src="assets/vendor/modernizr/modernizr.js"></script>

	</head>
	<body>
		<?php include "includes/header.php"; ?>	
		<?php include "includes/sidebar.php"; ?>

		<section class="body">

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
												<label class="col-md-3 control-label" style="margin:0px -25px;" for="inputSuccess">Select Subject</label>
												<div class="col-md-6">
													
													<select class="form-control mb-md" style="margin:0 70px;">
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
															<label class="col-md-3 control-label">Subject Description</label>
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
                             <br>
                                <div class="input-group mb-3" style="margin:0 80px;">
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
														<button class="btn btn-primary modal-confirm" style="margin-right:15px;">Submit</button>
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
                                    <!-- <div class="col-sm-4 col-md-3 float-right">
                                    	<input class="form-control form-control-sm mr-5 w-75" type="text" placeholder="Search" aria-label="Search">
								  	</div> -->
								
							</div>
						
                <table class="table table-bordered table-striped mb-none" id="datatable-editable">
							<thead>
								<tr>
									<th>Subject Id</th>
									<th>Subject Name</th>
                                    <th>Subject Info</th>
                                    <th>Images</th>
                                    <th>Created Date</th>
                                    <th>Current Status</th>
									<th>Actions</th>
								</tr>
							</thead>
							<tbody>
								<tr class="gradeX">
									<td>1</td>
									<td>AB CD
									</td>
                                    <td>Science</td>
                                    <td><img src="assets/images/etestlogo.jpg" height="40" width="80"/></td>
                                    <td>28 Nov 2020</td>
                                    <td class="text-danger">INACTIVE</td>
									<td class="actions">
										<a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
										<a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
										<a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
										<a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
									</td>
                                </tr>
                                
                                <tr class="gradeX">
									<td>2</td>
									<td>XY XY
									</td>
                                    <td>Math</td>
                                    <td><img src="assets/images/kavinlogo.jpg" height="40" width="80"/></td>
                                    <td>28 Nov 2020</td>
                                    <td class="text-success">ACTIVE</td>
									<td class="actions">
										<a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
										<a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
										<a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
										<a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
									</td>
                                </tr>
                                
                                <tr class="gradeX">
									<td>3</td>
									<td>MN OP
									</td>
                                    <td>Biology</td>
                                   <td><img src="assets/images/etestlogo.jpg" height="40" width="80"/></td>
                                    <td>28 Nov 2020</td>
                                    <td class="text-success">ACTIVE</td>
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
				<!-- end: page -->
			</section>
		</div>

		<!-- <aside id="sidebar-right" class="sidebar-right">
			<div class="nano">
				<div class="nano-content">
					<a href="#" class="mobile-close visible-xs">
						Collapse <i class="fa fa-chevron-right"></i>
					</a>

					<div class="sidebar-right-wrapper">

						<div class="sidebar-widget widget-calendar">
							<h6>Upcoming Tasks</h6>
							<div data-plugin-datepicker data-plugin-skin="dark"></div>

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
	</section> -->

	<!-- <div id="dialog" class="modal-block mfp-hide">
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
	</div> -->

<!-- Vendor -->
	<script src="assets/vendor/jquery/jquery.js"></script>
	<script src="assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.js"></script>
	<script src="assets/vendor/nanoscroller/nanoscroller.js"></script>
	<script src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
	<script src="assets/vendor/magnific-popup/magnific-popup.js"></script>
	<script src="assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>

	<!-- Specific Page Vendor -->
	<script src="assets/vendor/select2/select2.js"></script>
		<script src="assets/vendor/jquery-datatables/media/js/jquery.dataTables.js"></script>
		<script src="assets/vendor/jquery-datatables-bs3/assets/js/datatables.js"></script>
		<script src="assets/vendor/pnotify/pnotify.custom.js"></script>
		<script src="assets/vendor/select2/select2.js"></script>
		<script src="assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>
		
		<script src="assets/vendor/jquery-maskedinput/jquery.maskedinput.js"></script>
		<script src="assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>
		<script src="assets/vendor/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
		<script src="assets/vendor/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
		<script src="assets/vendor/fuelux/js/spinner.js"></script>
		<script src="assets/vendor/dropzone/dropzone.js"></script>
		<script src="assets/vendor/bootstrap-markdown/js/markdown.js"></script>
		<script src="assets/vendor/bootstrap-markdown/js/to-markdown.js"></script>
		<script src="assets/vendor/bootstrap-markdown/js/bootstrap-markdown.js"></script>
		<script src="assets/vendor/codemirror/lib/codemirror.js"></script>
		<script src="assets/vendor/codemirror/addon/selection/active-line.js"></script>
		<script src="assets/vendor/codemirror/addon/edit/matchbrackets.js"></script>
		<script src="assets/vendor/codemirror/mode/javascript/javascript.js"></script>
		<script src="assets/vendor/codemirror/mode/xml/xml.js"></script>
		<script src="assets/vendor/codemirror/mode/htmlmixed/htmlmixed.js"></script>
		<script src="assets/vendor/codemirror/mode/css/css.js"></script>
		<script src="assets/vendor/summernote/summernote.js"></script>
		<script src="assets/vendor/bootstrap-maxlength/bootstrap-maxlength.js"></script>
		<script src="assets/vendor/ios7-switch/ios7-switch.js"></script>

	<!-- Theme Base, Components and Settings -->
	<script src="assets/javascripts/theme.js"></script>

	<!-- Theme Custom -->
	<script src="assets/javascripts/theme.custom.js"></script>

	<!-- Theme Initialization Files -->
	<script src="assets/javascripts/theme.init.js"></script>


	<!-- Examples -->
	<script src="assets/javascripts/tables/examples.datatables.editable.js"></script>
	<!-- <script src="assets/javascripts/ui-elements/examples.modals.js"></script> -->
	<script src="assets/javascripts/forms/examples.advanced.form.js" /></script>
	<script src="assets/javascripts/ui-elements/examples.modals.js"></script>
	
		<script src="assets/javascripts/tables/examples.datatables.editable.js"></script>
</body>

</html>