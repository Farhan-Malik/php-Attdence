<?php
$title = 'View Records';

//require_once 'includes/auth_check.php';
require_once 'includes/header.php';
require_once 'db/connect.php';

$results = $crud->getAttendees();

?>


<table class="table table-hover table-striped ">
    <tr>
        <th>#</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email Address</th>
        <th>Speciality</th>
        <th>Actions</th>
    </tr>
    <?php while ($r = $results->fetch(PDO::FETCH_ASSOC)) { ?>
        <tr>
            <td><?php echo $r['attendee_id'] ?></td>
            <td><?php echo $r['firstname'] ?></td>
            <td><?php echo $r['lastname'] ?></td>
            <td><?php echo $r['emailadd'] ?></td>
            <td><?php echo $r['name'] ?></td>
            <td>
                <a href="view.php?id=<?php echo $r['attendee_id'] ?>" class="btn btn-dark" style="color: white;">View</a>
                <a href="edit.php?id=<?php echo $r['attendee_id'] ?>" class="btn btn-secondary" style="color: white;">Edit</a>
                <a onclick="return confirm('Are you sure you want to delete this record?');" 
                href="delete.php?id=<?php echo $r['attendee_id'] ?>" class="btn btn-danger" style="color: black;">Delete</a>

            </td>
        </tr>
    <?php } ?>

</table>


<br>
<br>
<br>
<br>
<br>
<?php require_once 'includes/footer.php'; ?>