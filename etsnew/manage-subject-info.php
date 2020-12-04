<?php
	//error_reporting(0);
    include_once("classes/etsystem.php");
    $crud = new Etstysem();
	$query = "SELECT * FROM  tbl_subject_info ORDER BY id DESC";
	$results = $crud->getData($query);
?>
<?php
	include "includes/head-logo.php";
	include "includes/header.php"; 
	include "includes/sidebar.php";  
?>
 <!-- Modal -->
                                        		<div id="modallg" class="modal-block modal-block-LG mfp-hide ">
										<section class="panel">
											<header class="panel-heading">
												<h2 class="panel-title">Add New Subject</h2>
											</header>
											<div class="panel-body">
												<div class="modal-wrapper">
													



											
										<form class="form-horizontal form-bordered" method="get">
											
						
									<div class="panel-body">
										<div class="form-group">
											<label class="col-sm-2 col-lg-2 col-md-5 control-label">Select Subject</label>
											<div class="col-sm-7">
                                              
												<select id="company" class="form-control" required>
													<option value="">--Select--</option>
													<option value="apple">option1</option>
													<option value="google">option2</option>
													<option value="microsoft">option3</option>
													<option value="yahoo">option4</option>
												</select>
											</div>
                                        </div>
                                    </div>
                                    <label class="col-sm-2 col-lg-2 col-md-9 control-label">Subject Description</label>
												<div class="panel-body">
                                                     
													<form class="form-horizontal form-bordered">
                                                       
														<div class="form-group">
															
												<div class="col-md-9 col-sm-3 col-lg-9">
                                                    
													<textarea name="content" data-plugin-markdown-editor rows="9">### Hello there
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
                                                    <br>
                                                    <br>
                                                    <br>
                                </div>
                             </form>
                          <br>
                                <div class="input-group mb-3" style="margin:0 30px;">
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
				<section role="main" class="content-body">
					<header class="page-header">
						<h2>Manage Subjects Info  </h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="dashboard.php">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Dashboard</span></li>
								<li><span>Subjects Info </span></li>
							</ol>
					
							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
						</div>
					</header>
				
					<!-- start: page -->
                    <section class="panel">

                    					

							<header class="panel-heading">
								<div class="panel-actions">
									   <button type="button" class="btn btn-primary" data-toggle="modal" on-click="#modallg" data-target="#exampleModalCenter">Add <i class="fa fa-plus"></i></button>
									<a href="#" class="fa fa-caret-down"></a>
									<a href="#" class="fa fa-times"></a>
								</div>
						
								<h2 class="panel-title">Subjects Info List</h2>
							</header>
							<div class="panel-body">
                            <div class="col-sm-6">

							<!-- ---- -->
							<!-- ----- -->
							
			</div>				
				<div class="col-sm-12 col-md-6">
						
				</div>
                   

								
								<table class="table table-bordered table-striped mb-none" id="datatable-editable">
									<thead>
										<tr>
											<th>Subjects Id</th>
											<th>Subjects Name</th>
											<th>Subject Info</th>
											<th>Create Date</th>
											<th>Status</th>
											<th>Actions</th>
										</tr>
									</thead>
									<tbody>
										<?php foreach ($results as $key => $row) { ?>
											
										<tr class="gradeX">
											<td><?php echo $row['subject_id']; ?></td>
											<td><?php echo $row['subject_name']; ?></td>
                                            <td><?php echo $row['created_date']; ?></td>
                                            <td><?php if($row['currentStatus']=='y'){ ?>
                                             <a href="#modalMD"><input type="button" name="name" class="btn btn-success" value="Active" /></a>
                                            <?php } ?>
											 <?php if($row['currentStatus']=='n'){ ?>
                                             <a href="#modalMD"><input type="button" name="name" class="btn btn-danger"  value="Inactive" /></a>
                                            <?php } ?>
                                            </td>
											<td class="actions">
												<a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
												<a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
											</td>
										</tr>
										<?php } ?>
										
									</tbody>
								</table>
							</div>
						</section>
					<!-- end: page -->
				</section>
			</div>

		</section>

		<div id="modalMD" class="modal-block mfp-hide">
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
							<button id="dialogConfirm" class="btn btn-success">Yes</button>
							<button id="dialogCancel" class="btn btn-danger">No</button>
						</div>
					</div>
				</footer>
			</section>
		</div>

<?php include "includes/footer.php"; ?>
     	