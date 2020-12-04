<?php
	//error_reporting(0);
    include_once("classes/etsystem.php");
    $crud = new Etstysem();
	$query = "SELECT * FROM    tbl_client_registration ORDER BY id DESC";
	$results = $crud->getData($query);
?>
<?php
	include "includes/head-logo.php";
	include "includes/header.php"; 
	include "includes/sidebar.php";  
?>

				<section role="main" class="content-body">
					<header class="page-header">
						<h2>Manage Client </h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="dashboard.php">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Dashboard</span></li>
								<li><span>Client</span></li>
							</ol>
					
							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
						</div>
					</header>
					<form method="post" action="">
                      <div class="row">
                      	<div class="form-group">
						<label class="col-sm-2 control-label">Client Name<span class="required">*</span></label>
						<div class="col-sm-6">
							<input type="text" name="name" class="form-control" placeholder="..." required/>
						</div>
						<div class="col-sm-2">
							<input type="file" name="file" class="form-control" placeholder="..." required/>
						</div>
						<div class="col-sm-2">
							<input type="Submit" name="name" class="btn btn-primary" />
						</div>
					</div>
					<div class="form-group"> &nbsp;</div>
				</div>
				</form>
					<!-- start: page -->
                    <section class="panel">

                    	

							<header class="panel-heading">
								<div class="panel-actions">
									<a href="#" class="fa fa-caret-down"></a>
									<a href="#" class="fa fa-times"></a>
								</div>
						
								<h2 class="panel-title">Client List</h2>
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
											<th>Client Id</th>
											<th>Client Name</th>
											<th>Logo</th>
											<th>Status</th>
											<th>Actions</th>
										</tr>
									</thead>
									<tbody>
										<?php foreach ($results as $key => $row) { ?>
											
										<tr class="gradeX">
											<td><?php echo $row['client_id']; ?></td>
											<td><?php echo $row['client_name']; ?></td>
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
							<button id="dialogConfirm" class="btn btn-primary">Confirm</button>
							<button id="dialogCancel" class="btn btn-default">Cancel</button>
						</div>
					</div>
				</footer>
			</section>
		</div>

<?php include "includes/footer.php"; ?>
     	