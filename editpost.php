<?php 
require_once 'db/connect.php';
if(isset($_POST['submit'])){
    //extract values from the $_POST array
    $id = $_POST['id'];
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $dob = $_POST['DOB'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $Speciality = $_POST['speciality'];

    //call crud function 
    $result = $crud->editAttendee($id, $fname, $lname, $dob, $email, $phone, $Speciality);
    //redirect to index.php 
    if($result){
        header("Location: viewrecords.php");
    }
    else {
        include 'includes/errormessage.php';
    }
}
else {
    include 'includes/errormessage.php';
}

?>