<?php
// error_reporting(0);
//including the database connection file
include("etsystem.php");
//include_once("classes/Validation.php");
 
$crud = new Etstysem();
//$validation = new Validation();
 $id = $crud->escape_string($_GET['id']);
if(isset($_POST['Submit'])) {    
    $fname = $crud->escape_string($_POST['fname']);  
    $lname = $crud->escape_string($_POST['lname']); 
    // $candidate_id = rand(10,999999);
    $gender = $crud->escape_string($_POST['gender']);
    $dob = $crud->escape_string($_POST['d_o_b']);
    $address = $crud->escape_string($_POST['address1']."".$_POST['address2']."".$_POST['address3']);
    $mobile = $crud->escape_string($_POST['mobile']);
    
    $email = $crud->escape_string($_POST['email']);
    $img = $crud->escape_string($_POST['img']);
    $country = $crud->escape_string($_POST['country']);
    $state = $crud->escape_string($_POST['state']);
    $city = $crud->escape_string($_POST['city']);
   
    
   
    // checking empty fields
    //if($department_name != null) {
           
        //link to the previous page
      // echo 'Please provide proper department name.';
   // }    
    //else { 
        // if all the fields are filled (not empty) 
        
        //insert data to database    
        $result = $crud->execute("UPDATE `tbl_candidate_registration` SET `first_name`=$fname,`last_name`=$lname,`gender`=$gender,`d_o_b`=$dob,`address`=$address,`mobile`=$mobile,`email`=$email,`avatar`=$img,`country`=$country,`state`=$state,`city`=$city,],`last_login_date`=now(),`modified_date`=now() WHERE id = $id");

          echo '<script type="text/javascript">alert("You  have been sucessfully submitted...!");</script>';
          echo '<script type="text/javascript">window.location.assign("../manage-candidate.php");</script>';
         
        //display success message
        //echo "<font color='green'>Data added successfully.";
        //echo "<br/><a href='manage-department.php'>View Result</a>";
    //}
}
?>