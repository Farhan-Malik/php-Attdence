<?php 
  require_once 'db/connect.php';
  if(!$_GET['id']){
    include 'includes/errormessage.php';
    header("Location: viewrcords.php"); 

  }else{
    //GET ID Values
    $id = $_GET['id'];

    //Call delete functions
    $result = $crud->deleteAttendee($id);
    //Redirect to list 
    if($result)
    {
        header("Location: viewrecords.php");
    }
    else{
        echo '';
    }
  }
?>