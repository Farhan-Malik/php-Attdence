<?php
$title = 'Index';
require_once 'includes/header.php';
require_once 'db/connect.php';

$results = $crud->getSpecialties();
?>

<h1 class="text-center">Registration for IT Confrence </h1>

<form method="post" action="success.php">
  <div class="col-md-6">
    <label for="firstname" class="form-label">First Name</label>
    <input required type="text" name="firstname" class="form-control" id="firstname">

  </div>
  <div class="col-md-6">
    <label for="lastname" class="form-label">Last Name</label>
    <input required type="text" class="form-control" id="lastname" name="lastname">
  </div>
  <div class="col-md-6">
    <label for="DOB" class="form-label">Date Of Birth</label>
    <input required type="date" class="form-control" id="DOB" name="DOB">
  </div>
  <div class="col-md-6">
    <label for="speciality" class="form-label">Area Of Expertise </label>
    <select class="form-select" id="speciality" name="speciality">
      <?php while ($r = $results->fetch(PDO::FETCH_ASSOC)) { ?>
        <option value="<?php echo $r['speciality_id'] ?>"><?php echo $r['name']; ?></option>
      <?php } ?>
    </select>
  </div>

  <div class="col-md-6">
    <label for="phone" class="form-label">Phone no:</label>
    <input required type="text" class="form-control" id="phone" name="phone">
  </div>

  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Email</label>
    <input required type="email" class="form-control" id="inputEmail4" name="email">
  </div>
  <br>


  <div class="col-12">
    <button type="submit" name="submit" class="btn btn-dark" style="color: white;">Submit </button>
  </div>
</form>
<br>

<?php require_once 'includes/footer.php'; ?>