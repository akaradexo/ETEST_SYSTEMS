<?php
// error_reporting(0);
//including the database connection file
include("etsystem.php");
//include_once("classes/Validation.php");
 
$crud = new Etstysem();
//$validation = new Validation();
 
if(isset($_POST['Submit'])) {    
    $categoryname = $crud->escape_string($_POST['categoryname']); 
    $departmentname = $crud->escape_string($_POST['departmentname']); 
    $category_id = rand(10,999999);
    
   
    // checking empty fields
    //if($department_name != null) {
           
        //link to the previous page
      // echo 'Please provide proper department name.';
   // }    
    //else { 
        // if all the fields are filled (not empty) 
            
        //insert data to database    
        $result = $crud->execute("INSERT INTO tbl_category( category_id, category_name,department_name, created_by, modified_by, created_date, modified_date, currentStatus) VALUES( $category_id, $categoryname, $departmentname $email, $email, now(), now(), `y`)");

          echo '<script type="text/javascript">alert("You  have been sucessfully submitted...!");</script>';
          echo '<script type="text/javascript">window.location.assign("../manage-candidate.php");</script>';
         
        //display success message
        //echo "<font color='green'>Data added successfully.";
        //echo "<br/><a href='manage-department.php'>View Result</a>";
    //}
}
?>