<!doctype html>
<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title>Manage Subject</title>
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
		<section class="body">

	<head>

    <title>department Tables | Okler Themes | Porto-Admin</title>

	</head>
	<body>
    <?php include "includes/header.php"; ?>
    <?php include "includes/sidebar.php"; ?>


				<section role="main" class="content-body">
					<header class="page-header">
						<h2>Subject Tables</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="index.html">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Tables</span></li>
								<li><span>Subject</span></li>
							</ol>
					
							<!-- <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a> -->

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
						
								<h1 class="panel-title">Subjects</h1>
							</header>
							<div class="panel-body">
                            <div class="col-sm-6">
							<!-- ---- -->
							
							<a class="mb-xs mt-xs mr-xs modal-sizes btn btn-primary" href="#modalMD">Add<i class="fa fa-plus"></i></a> 
							
									<div id="modalMD" class="modal-block modal-block-md mfp-hide">
										<section class="panel">
											<header class="panel-heading">
												<h2 class="panel-title">Add New Subjects</h2>
											</header>
											<div class="panel-body">
											<div class="form-group">
											<label class="col-md-5 control-label" for="inputSuccess">Select Department<span class="required">*</span></label>
												<div class="col-md-10">
													<select class="form-control mb-md">
														<option>----Select----</option>
														<option>Option 1</option>
														<option>Option 2</option>
														<option>Option 3</option>
													</select>
												</div>
											</div>

										    <div class="form-group">
											<label class="col-md-5 control-label" for="inputSuccess">Select Category<span class="required">*</span></label>
												<div class="col-md-10">
													<select class="form-control mb-md">
														<option>----Select----</option>
														<option>Option 1</option>
														<option>Option 2</option>
														<option>Option 3</option>
													</select>
												</div>
											</div>
											

										     <label class="col-md-5 control-label" for="inputSuccess">Subject Name<span class="required">*</span></label>
												<div class="col-md-10">
												<input class="form-control mb-md" type="text" placeholder="Enter your Subject Name here">
											
											<footer class="panel">
												<div class="row">
													<div class="col-md-20 text-right">
														<button class="btn btn-primary modal-confirm" style="margin:15px;">Submit</button>
														<button class="btn btn-default modal-dismiss" style="margin:15px;">Close</button>
													</div>
												</div>
											</footer>
										</section>
									</div>


							
			</div>				
				<div class="col-sm-12 col-md-6">
						<div id="datatable-default_filter" class="dataTables_filter">
							<label><input type="search" class="form-control" placeholder="Search" aria-controls="datatable-default"></label>
						</div>
				</div>
                   

								
								<table class="table table-bordered table-striped mb-none" id="datatable-editable">
									<thead>
										<tr>
											<th>Subject Name</th>
											<th>Subject Id</th>
											<th>Modified by</th>
											<th>Created by</th>
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
                                            <td>Win 95+</td>
                                            <td>Succesfull</td>
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
											<td>Win 95+</td>
                                            <td>Succesfull</td>
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
											<td>Win 95+</td>
                                            <td>Succesfull</td>
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
												Explorer 6
											</td>
											<td>Win 98+</td>
											<td>Win 98+</td>
                                            <td>Succesfull</td>
											<td class="actions">
												<a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
												<a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
												<a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
												<a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
											</td>
										</tr>
										<tr class="gradeA">
											<td>Trident</td>
											<td>Internet Explorer 7</td>
											<td>Win XP SP2+</td>
											<td>Win XP SP2+</td>
                                            <td>Succesfull</td>
											<td class="actions">
												<a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
												<a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
												<a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
												<a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
											</td>
										</tr>
										<tr class="gradeA">
											<td>Trident</td>
											<td>AOL browser (AOL desktop)</td>
											<td>Win XP</td>
											<td>Win XP</td>
                                            <td>Succesfull</td>
											<td class="actions">
												<a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
												<a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
												<a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
												<a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
											</td>
										</tr>
										<tr class="gradeA">
											<td>Gecko</td>
											<td>Firefox 1.0</td>
											<td>Win 98+ / OSX.2+</td>
											<td>Win 98+ / OSX.2+</td>
                                            <td>Succesfull</td>
											<td class="actions">
												<a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
												<a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
												<a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
												<a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
											</td>
										</tr>
										<tr class="gradeA">
											<td>Gecko</td>
											<td>Firefox 1.5</td>
											<td>Win 98+ / OSX.2+</td>
											<td>Win 98+ / OSX.2+</td>
                                            <td>Succesfull</td>
											<td class="actions">
												<a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
												<a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
												<a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
												<a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
											</td>
										</tr>
										<tr class="gradeA">
											<td>Gecko</td>
											<td>Firefox 2.0</td>
											<td>Win 98+ / OSX.2+</td>
											<td>Win 98+ / OSX.2+</td>
                                            <td>Succesfull</td>
											<td class="actions">
												<a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
												<a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
												<a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
												<a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
											</td>
										</tr>
										<tr class="gradeA">
											<td>Gecko</td>
											<td>Firefox 3.0</td>
											<td>Win 2k+ / OSX.3+</td>
											<td>Win 2k+ / OSX.3+</td>
                                            <td>Succesfull</td>
											<td class="actions">
												<a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
												<a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
												<a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
												<a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
											</td>
										</tr>
										<tr class="gradeA">
											<td>Gecko</td>
											<td>Camino 1.0</td>
											<td>OSX.2+</td>
											<td>OSX.2+</td>
                                            <td>Succesfull</td>
											<td class="actions">
												<a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
												<a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
												<a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
												<a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
											</td>
										</tr>
										<tr class="gradeA">
											<td>Gecko</td>
											<td>Camino 1.5</td>
											<td>OSX.3+</td>
											<td>OSX.3+</td>
                                            <td>Succesfull</td>
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
		
		<!-- Theme Base, Components and Settings -->
		<script src="assets/javascripts/theme.js"></script>
		
		<!-- Theme Custom -->
		<script src="assets/javascripts/theme.custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="assets/javascripts/theme.init.js"></script>


		<!-- Examples -->
		<script src="assets/javascripts/ui-elements/examples.modals.js"></script>
	
		<script src="assets/javascripts/tables/examples.datatables.editable.js"></script>
	</body>
</html>