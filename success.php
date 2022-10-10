<?php
$title = 'Success';
require_once 'includes/header.php';
require_once 'db/connect.php';

if(isset($_POST['submit'])){
  //extract values from the $_POST array
  $fname = $_POST['firstname'];
  $lname = $_POST['lastname'];
  $dob = $_POST['DOB'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $Speciality = $_POST['speciality'];

  // Call function to insert and track if success or not 
  $issucces = $crud->insertAttendees($fname, $lname, $dob, $email, $phone, $Speciality);

  if($issucces){
    include 'includes/successmessage.php';
  }
  else{
    include 'includes/errormessage.php';
  }
}

?>


<!-- // This Get Method
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">
      <?php // echo $_GET ['Firstname'] . ' ' . $_GET ['Lastname']; ?>
    </h5>
    <h6 class="card-subtitle mb-2 text-muted">
      Area Of Expertise: <?php // echo $_GET['SP']; ?>
    </h6>
    <p class="card-text">
      Date Of Birth: <?php // echo $_GET['DOB']; ?>
    </p>
    <p class="card-text">
      Email Address: <?php // echo $_GET['Email']; ?>
    </p>
    <p class="card-text">
      Contact Number: <?php // echo $_GET['phone']; ?>
    </p>

  </div>
</div>
-->




<?php
  echo $_POST['firstname'];
  echo $_POST['lastname'];
  echo $_POST['DOB'];
  echo $_POST['speciality'];
  echo $_POST['email'];
  echo $_POST['phone'];


?>





<br>
<br>
<br>
<br>
<br>
<?php require_once 'includes/footer.php'; ?>