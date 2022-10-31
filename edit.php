<?php
$title = 'Edit Record';
require_once 'includes/header.php';
require_once 'includes/auth_check.php';
require_once 'db/connect.php';

$results = $crud->getSpecialties();

if (isset($_GET['id'])) {
    include 'includes/errormessage.php';
  //  header("Location: viewrcords.php"); 
} else {
    $id = $_GET['id'];
    $attendee = $crud->getAttendeeDetailes($id); 
    
}

?>
 
    <h1 class="text-center">Edit Record</h1>

    <form method="post" action="editpost.php">
        <input type="hidden" name="id" value="<?php echo $attendee['attendee_id'] ?>" />
        <div class="col-md-6">
            <label for="firstname" class="form-label">First Name</label>
            <input type="text" name="firstname" class="form-control" value="<?php echo $attendee['firstname'] ?>" id="firstname">

        </div>
        <div class="col-md-6">
            <label for="lastname" class="form-label">Last Name</label>
            <input type="text" class="form-control" value="<?php echo $attendee['lastname'] ?>" id="lastname" name="lastname">
        </div>
        <div class="col-md-6">
            <label for="DOB" class="form-label">Date Of Birth</label>
            <input type="date" class="form-control" value="<?php echo $attendee['dateofbirth'] ?>" id="DOB" name="DOB">
        </div>
        <div class="col-md-6">
            <label for="speciality" class="form-label">Area Of Expertise </label>
            <select class="form-select" id="speciality" value="<?php echo $attendee['speciality_id'] ?> "  name="speciality">
                <?php while ($r = $results->fetch(PDO::FETCH_ASSOC)) { ?>
                    <option value="<?php echo $r['speciality_id'] ?>" <?php if($r['speciality_id'] == $attendee['speciality_id']) echo 'selected' ?>>
                        <?php echo $r['name']; ?>
                   </option>
                <?php } ?>
            </select>
        </div>

        <div class="col-md-6">
            <label for="phone" class="form-label">Phone no:</label>
            <input type="text" class="form-control" value="<?php echo $attendee['contactnumber'] ?>" id="phone" name="phone">
        </div>

        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Email</label>
            <input type="email" class="form-control" id="inputEmail4" value="<?php echo $attendee['emailadd'] ?>" name="email">
        </div>
        <br>


        <div class="col-12">
            <button type="submit" name="submit" class="btn btn-dark" style="color: white;">Save Changes </button>
        </div>
    </form>


<br>
<br>
<br>
<br>
<br>
<?php require_once 'includes/footer.php'; ?>