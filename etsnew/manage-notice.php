<?php
	//error_reporting(0);
    include_once("classes/etsystem.php");
    $crud = new Etstysem();
	$query = "SELECT * FROM  tbl_notice ORDER BY id DESC";
	$results = $crud->getData($query);

   if(!empty($_GET['id'])) {

      //getting id of the data from url
      $noticeId = $crud->escape_string($_GET['id']);
       
      //deleting the row from table
      //$result = $crud->execute("DELETE FROM users WHERE id=$id");
      $result = $crud->delete($noticeId, 'tbl_notice');
       
     header("location:manage-notice.php");
      # code...
   }
?>
<?php
	include "includes/head-logo.php";
	include "includes/header.php"; 
	include "includes/sidebar.php";  
?>
      <section class="body">
      <section role="main" class="content-body">
         <header class="page-header">
            <h2>Manage Notice</h2>
            <div class="right-wrapper pull-right">
               <ol class="breadcrumbs">
                  <li>
                     <a href="dashboard.php">
                     <i class="fa fa-home"></i>
                     </a>
                  </li>
                  <li><span>Dashboard</span></li>
                  <li><span>Notice</span></li>
               </ol>
               <span>&nbsp</span>
               <span>&nbsp</span>
            </div>
         </header>
         <!-- start: page -->
         <section class="panel">
            <header class="panel-heading">
              <!-- <div class="row"> -->
              <div class="col-md-9"> <h2 class="panel-title my-4">Notice List </h2></div> 
               <div class="col-sm-6 col-md-3 float-right">  
                  <a class="mb-xs mt-xs mr-xs modal-sizes btn btn-primary" href="#modallg">Add<i class="fa fa-plus"></i></a> 
               </div>
              <!-- </div> -->
            </header>
            <div class="panel-body">
               <div class="row">
                  <div class="col-sm-6 col-md-9 d-inline">
                     <div class="mb-md">
                    
                        <!-- Modal -->
                        
                        <div id="modallg" class="modal-block modal-block-LG mfp-hide ">
                           <section class="panel">
                              <header class="panel-heading">
                                 <h2 class="panel-title">Add Notice</h2>
                              </header>
                              <div class="panel-body">
                                 <div class="modal-wrapper">
                                    <form class="form-horizontal form-bordered" method="post" action="notice_code.php">
                                    <div class="panel-body">
                                       <div class="form-group">
                                          <div class="col-sm-12">
                                             <label>Notice Title</label>
                                             <input type="text" class="form-control"  name="notice_title" id="notice_title" required="required">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="panel-body">
                                       <div class="form-group">
                                          <div class="col-md-12 col-sm-12 col-lg-12">
                                             <label >Notice Description</label>
                                             <textarea name="notice_description" data-plugin-markdown-editor rows="6" required="required"></textarea>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="panel-body">
                                       <div class="form-group">
                                         
                                          <div class="col-md-6 col-sm-6 col-lg-6">
                                             <button type="Submit" name="Submit" class="btn btn-primary" style="margin-right:15px;">Submit</button>
                                             <button class="btn btn-default modal-dismiss">Close</button>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                        </div>
                        </form>
                        <!-- end modal -->
                     </div>
                  </div>
               </div>
              	<table class="table table-bordered table-striped mb-none" id="datatable-editable">
               <thead>
               <tr>
               <th>Sr. No.</th>
               <th>Notice Id</th>
               <th>Notice Title</th>
               <th>Notice Description</th>
               <th>Created Date</th>
               <th>Current Status</th>
               <th>Actions</th>
               </tr>
               </thead>
               <tbody>
              <?php $i =1; foreach ($results as $key => $row) { ?>
                                 
                              <tr class="gradeX">
                                 <td><?php echo $i++; ?></td>
                                 <td><?php echo $row['notice_id']; ?></td>
                                 <td><?php echo $row['notice_title']; ?></td>
                                 <td><?php echo substr($row['notice_description'],0,100); ?></td>
                                <td><?php echo $row['created_date']; ?></td>
                                <td><?php if($row['currentStatus']=='y'){ ?>
                                 <a href="#modalMD"><input type="button" name="name" class="btn btn-success" value="Active" /></a>
                                <?php } ?>
                                 <?php if($row['currentStatus']=='n'){ ?>
                                 <a href="#modalMD"><input type="button" name="name" class="btn btn-danger"  value="Inactive" /></a>
                                <?php } ?>
                                </td>
                                 <td class="actions">
                                    <a href="edit.php?id=<?php echo $row['id']; ?>" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
                                    <a href="manage-notice.php?id=<?php echo $row['id']; ?>" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                 </td>
                              </tr>
                              <?php } ?>
                              
          
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
     	