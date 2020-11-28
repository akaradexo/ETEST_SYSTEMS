<?php include "includes/head-logo.php"; ?>
<?php include "includes/header.php"; ?>
<?php include "includes/sidebar.php"; ?>

<section role="main" class="content-body">
					<header class="page-header">
						<h2>Candidate List</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="index.html">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Table</span></li>
								<li><span>Canidate</span></li>
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
						
								<h2 class="panel-title">Candidate Table</h2>
							</header>
							<div class="panel-body">
								<div class="row">
									<div class="col-sm-6 col-md-9 d-inline">
										<div class="mb-md">
                                            <!-- <button id="addToTable" class="btn btn-primary">Add <i class="fa fa-plus"></i></button> -->
                                            <button type="button" class="btn btn-primary" data-toggle="modal" on-click="#" data-target="#exampleModalCenter">Add <i class="fa fa-plus"></i></button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">Add Candidate</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <form>
                                                            <section class="panel">
                                                                <header class="panel-heading">
                                                                    <div class="panel-actions">
                                                                        <a href="#" class="fa fa-caret-down"></a>
                                                                        <a href="#" class="fa fa-times"></a>
                                                                    </div>

                                                                    <h2 class="panel-title">Enter Candidate Details</h2>

                                                                    <!-- <p class="panel-subtitle">
                                                                        You can use placeholders instead of label like this example.
                                                                    </p> -->
                                                                </header>

                                                                    <div class="panel-body">
                                                                        <div class="row form-group">
                                                                            <div class="col-lg-6">
                                                                                <input type="text" name="firstName" placeholder="First Name" class="form-control">
                                                                            </div>

                                                                            <div class="mb-md hidden-lg hidden-xl"></div>

                                                                            <div class="col-lg-6">
                                                                                <input type="text" name="lastName" placeholder="Last Name" class="form-control">
                                                                            </div>                                                              
                                                                        </div>

                                                                        

                                                                        <div class="row form-group">
                                                                            <div class="col-lg-6">
                                                                                <input type="date" name="dob" placeholder="Date of Birth" class="form-control text-muted">
                                                                            </div>

                                                                            <div class="mb-md hidden-lg hidden-xl"></div>
                                                                            <div class="custom-file col-lg-6">
                                                                            <input type="file" class="custom-file-input" id="customFile">
                                                                            <label class="custom-file-label" for="customFile">Choose Avatar File <i class="fa fa-paperclip" aria-hidden="true"></i></label>
                                                                            </div>
                                                                            
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-lg-12">
                                                                                <textarea class="form-control" rows="5" placeholder="Address"></textarea>
                                                                            </div>
                                                                        </div>
                                                                        
                                                                        

                                                                        <div class="row form-group">
                                                                            <div class="col-lg-6">
                                                                                <input type="text" name="mob" placeholder="Contact Number" class="form-control">
                                                                            </div>

                                                                            <div class="mb-md hidden-lg hidden-xl"></div>

                                                                            <div class="col-lg-6">
                                                                                <input type="email" name="email" placeholder="Email" class="form-control">
                                                                            <div>
                                                                        </div>
                                                                        
                                                                        <div class="row form-group">
                                                                            <div class="col-lg-4">
                                                                                <input type="country" name="mob" placeholder="Country" class="form-control">
                                                                            </div>

                                                                            <div class="mb-md hidden-lg hidden-xl"></div>

                                                                            <div class="col-lg-4">
                                                                                <input type="state" name="email" placeholder="State" class="form-control">
                                                                            <div>
                                                                        </div>
                                                                        
                                                                        <div class="row form-group">
                                                                            <div class="col-lg-4">
                                                                                <input type="country" name="mob" placeholder="Country" class="form-control">
                                                                            </div>

                                                                            <div class="mb-md hidden-lg hidden-xl"></div>

                                                                            <div class="col-lg-4">
                                                                                <input type="state" name="email" placeholder="State" class="form-control">
                                                                            <div>
                                                                        </div>
                                                                        
                                                                    </div>   
                                                            </section>
                                                        </form>
                                                    </div>

                                                    <!-- <div class="col-md-6">
                                                        <section class="panel">
                                                            <header class="panel-heading">
                                                                <div class="panel-actions">
                                                                    <a href="#" class="fa fa-caret-down"></a>
                                                                    <a href="#" class="fa fa-times"></a>
                                                                </div>

                                                                <h2 class="panel-title">Multi-Column Form</h2>

                                                                <p class="panel-subtitle">
                                                                    This is an example of form with multiple block columns.
                                                                </p>
                                                            </header>
                                                            <div class="panel-body">
                                                                <div class="row">
                                                                    <div class="col-sm-6">
                                                                        <div class="form-group">
                                                                            <label class="control-label">First Name</label>
                                                                            <input type="text" name="firstname" class="form-control">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <div class="form-group">
                                                                            <label class="control-label">Last Name</label>
                                                                            <input type="text" name="lastname" class="form-control">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-sm-6">
                                                                        <div class="form-group">
                                                                            <label class="control-label">Email</label>
                                                                            <input type="email" name="email" class="form-control">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <div class="form-group">
                                                                            <label class="control-label">Website</label>
                                                                            <input type="url" name="website" class="form-control">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <footer class="panel-footer">
                                                                <button class="btn btn-primary">Submit Card</button>
                                                            </footer>
                                                        </section>
                                                    </div> -->
                                                </div>
                                                </div>
                                                <div class="modal-footer">

                                                    <button type="button" class="btn btn-primary">Submit</button>
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    
                                                </div>
                                                </div>
                                            </div>
                                            </div>
                                            <!-- end modal -->
										</div>
                                    </div>
                                    <div class="col-sm-4 col-md-3 float-right">
                                    <input class="form-control form-control-sm mr-5 w-75" type="text" placeholder="Search" aria-label="Search">
                                    <!-- <i class="fa fa-search" aria-hidden="true"></i> -->
                                    <!-- <div class="input-group md-form form-sm form-2 pl-0">
                                    <input class="form-control my-0 py-1 amber-border" type="text" placeholder="Search" aria-label="Search">
                                    <div class="input-group-append">
                                        <span class="input-group-text amber lighten-3" id="basic-text1"><i class="fas fa-search text-grey" aria-hidden="true"></i></span>
                                    </div>
                                    </div>-->
                                    </div> 
								</div>
								<table class="table table-bordered table-striped mb-none" id="datatable-editable">
									<thead>
										<tr>
											<th>Candidate Name</th>
                                            <th>Candidate ID</th>
                                            <th>Date of Birth</th>
                                            <th>Gender</th>
                                            <th>Mobile No.</th>
											<th>Status</th>
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
                                            <td></td>
                                            <td></td>
                                            <td></td>
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
                                            <td></td>
                                            <td></td>
                                            <td></td>
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
                                            <td></td>
                                            <td></td>
                                            <td></td>
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
