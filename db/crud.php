<?php
class crud
{
  private $db;

  function __construct($connect)
  {
    $this->db = $connect;
  }
  // funtion to insert a new record into the attendee databse 
  public function insertAttendees($fname, $lname, $dob, $email, $phone, $speciality)
  {
    try {
      $sql = "INSERT INTO attendee (firstname,lastname,dateofbirth,emailadd,contactnumber,speciality_id) VALUES (:fname,:lname,:dob,:email,:phone,:speciality)";
      //prepare the sql statement for execution
      $stmt = $this->db->prepare($sql);
      // bind all placeholders to this actual values
      $stmt->bindparam(':fname', $fname);
      $stmt->bindparam(':lname', $lname);
      $stmt->bindparam(':dob', $dob);
      $stmt->bindparam(':email', $email);
      $stmt->bindparam(':phone', $phone);
      $stmt->bindparam(':speciality', $speciality);

      // execute statement 
      $stmt->execute();
      return true;
    } catch (PDOException $e) {
      echo $e->getMessage();
      return false;
    }
  }
  public function editAttendee($id, $fname, $lname, $dob, $email, $phone, $speciality)
  {
    try {
      $sql = "UPDATE  `attendee` SET `firstname`=:fname,`lastname`=:lname,`dateofbirth`=:dob,`emailadd`=:email,`contactnumber`=:phone,`speciality_id`=:specaility 
      WHERE attendee_id = :id ";
      $stmt = $this->db->prepare($sql);
      // bind all placeholders to this actual values

      $stmt->bindparam(':fname', $fname);
      $stmt->bindparam(':lname', $lname);
      $stmt->bindparam(':dob', $dob);
      $stmt->bindparam(':email', $email);
      $stmt->bindparam(':phone', $phone);
      $stmt->bindparam(':speciality', $speciality);
      $stmt->bindparam(':id', $id);

      // execute statement 
      $stmt->execute();
      return true;
    } catch (PDOException $e) {
      echo $e->getMessage();
      return false;
    }
  }

  public function getAttendees()
  {
    try {
      $sql = "SELECT * FROM `attendee` ";
      $result = $this->db->query($sql);
      return $result;
    } catch (PDOException $e) {
      echo $e->getMessage();
      return false;
    }
  }

  public function getAttendeeDetailes($id)
  {
    try {
      $sql = "select * from attendee where attendee_id = :id";
      $stmt = $this->db->prepare($sql);
      $stmt->bindparam(':id', $id);
      $stmt->execute();
      $result = $stmt->fetch();
      return $result;
    } catch (PDOException $e) {
      echo $e->getMessage();
      return false;
    }
  }
  public function deleteAttendee($id)
  {
    try {
      $sql = "delete from attendee where attendee_id = :id";
      $stmt = $this->db->prepare($sql);
      $stmt->bindparam(':id', $id);
      $stmt->execute();
      return true;
    } catch (PDOException $e) {
      echo $e->getMessage();
      return false;
    }
  }

  public function getSpecialties()
  {
    try {
      $sql = "SELECT * FROM `specialitys`";
      $result = $this->db->query($sql);
      return $result;
    } catch (PDOException $e) {
      echo $e->getMessage();
      return false;
    }
  }
  public function getSpecialtyById($id)
  {
    try {
      $sql = "SELECT * FROM `specialties` where specialty_id = :id";
      $stmt = $this->db->prepare($sql);
      $stmt->bindparam(':id', $id);
      $stmt->execute();
      $result = $stmt->fetch();
      return $result;
    } catch (PDOException $e) {
      echo $e->getMessage();
      return false;
    }
  }
}
