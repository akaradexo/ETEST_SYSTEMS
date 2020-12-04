<?php
error_reporting(0);
//including the database connection file
include("classes/etsystem.php");
//include_once("classes/Validation.php");

$crud = new Etstysem();
//$validation = new Validation();
 
if(isset($_POST['Submit'])) {    
    $notice_title = $crud->escape_string($_POST['notice_title']);  
    $notice_description = $crud->escape_string($_POST['notice_description']);  
    $notice_id = rand(10,999999);
   
    // checking empty fields
    //if($department_name != null) {
           
        //link to the previous page
      // echo 'Please provide proper department name.';
   // }    
    //else { 
        // if all the fields are filled (not empty) 

            
        //insert data to database    
        $result = $crud->execute("INSERT INTO  tbl_notice(notice_id,notice_title,notice_description,created_by,modified_by,created_date,modified_date,currentStatus) VALUES('$notice_id','$notice_title','$notice_description','$created_by','$modified_by',now(),now(),'y')");
        
          echo '<script type="text/javascript">alert("Data added successfully...!");</script>';
          echo '<script type="text/javascript">window.location.assign("manage-notice.php");</script>';
    //}
}
?>