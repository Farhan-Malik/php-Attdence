<?php
$title = 'Index';
require_once 'includes/header.php';
require_once 'db/connect.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $result = $crud->getAttendeeDetailes($id);
} else{
    echo "<h1 class='text-danger'>Please check details and try again</h1>";
}

?>
<div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">
            <?php echo $result['firstname'] . ' ' . $result['lastname']; ?>
        </h5>
        <h6 class="card-subtitle mb-2 text-muted">
            Area Of Expertise: <?php echo $result['speciality']; ?>
        </h6>
        <p class="card-text">
            Date Of Birth: <?php echo $result['dateofbirth']; ?>
        </p>
        <p class="card-text">
            Email Address: <?php echo $result['emailadd']; ?>
        </p>
        <p class="card-text">
            Contact Number: <?php echo $result['contactnumber']; ?>
        </p>

    </div>
</div>  
<br/>
    <a href="viewrecords.php" class="btn btn-dark" style="color: white;">Back to list</a>
    <a href="view.php?id=<?php echo $result['attendee_id'] ?>" class="btn btn-dark" style="color: white;">Edit</a>
    <a onclick="return confirm('Are you sure you want to delete this record?');" 
     href="delete.php?id=<?php echo $result['attendee_id'] ?>" class="btn btn-danger" style="color: black;">Delete</a>


<br>
<br>
<br>
<br>
<br>
<?php require_once 'includes/footer.php'; ?>