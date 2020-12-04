<?php
	//error_reporting(0);
    include_once("classes/etsystem.php");
    $crud = new Etstysem();
	$query = "SELECT * FROM  tbl_client_package ORDER BY id DESC";
	$results = $crud->getData($query);
?>
<?php
	include "includes/head-logo.php";
	include "includes/header.php"; 
	include "includes/sidebar.php";  
?>
      <section class="body">
      <section role="main" class="content-body">
         <header class="page-header">
            <h2>Manage Packages</h2>
            <div class="right-wrapper pull-right">
               <ol class="breadcrumbs">
                  <li>
                     <a href="dashboard.php">
                     <i class="fa fa-home"></i>
                     </a>
                  </li>
                  <li><span>Dashboard</span></li>
                  <li><span>Packages</span></li>
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
               <h2 class="panel-title my-4">Packages List</h2>
            </header>
            <div class="panel-body">
               <div class="row">
                  <div class="col-sm-6 col-md-9 d-inline">
                     <div class="mb-md">
                        <a class="mb-xs mt-xs mr-xs modal-sizes btn btn-primary" href="#modallg">Add<i class="fa fa-plus"></i></a> 
                        <!-- Modal -->
                        <div id="modallg" class="modal-block modal-block-LG mfp-hide ">
                           <section class="panel">
                              <header class="panel-heading">
                                 <h2 class="panel-title">Add Packages</h2>
                              </header>
                              <div class="panel-body">
                                 <div class="modal-wrapper">
                                    <form class="form-horizontal form-bordered" method="get">
                                    <div class="panel-body">
                                       <div class="form-group">
                                          <div class="col-sm-12">
                                             <label>Notice Title</label>
                                             <input type="text" class="form-control"  id="inputGroupFile01">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="panel-body">
                                       <div class="form-group">
                                          <div class="col-md-12 col-sm-12 col-lg-12">
                                             <label >Notice Description</label>
                                             <textarea name="content" data-plugin-markdown-editor rows="6"></textarea>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="panel-body">
                                       <div class="form-group">
                                          <div class="col-md-6 col-sm-6 col-lg-6">
                                             <label >Upload</label>
                                             <input type="file" class="custom-file-input" id="inputGroupFile01">
                                          </div>
                                          <div class="col-md-6 col-sm-6 col-lg-6">
                                             <button class="btn btn-primary modal-confirm" style="margin-right:15px;">Submit</button>
                                             <button class="btn btn-default modal-dismiss">Close</button>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                        </div>
                        <!-- end modal -->
                     </div>
                  </div>
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
          
               </tbody>
               </table>
               <!-- </div> -->
            </div>
            </section>
            <!-- end: page -->
         </section>
         <!-- end: page -->
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
      <!-- Vendor -->
     <?php include "includes/footer.php"; ?>
     	