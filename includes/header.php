<?php
//This file contain session file code that start/resumes a session
//By having it is in the header file, it will be inlided on evry page, allowing session capability to be used on evry across the website'
include_once 'includes/session.php'

?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>New-site - <?php echo $title ?> </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">


  <link rel="stylesheet" href="css/site.css" />
</head>

<body>
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark  bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">IT-Confrence</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <div class="navbar-nav mr-auto">
            <a class="nav-item nav-link active" href="index.php">Home <span class="sr-only"> </span></a>
            <a class="nav-item nav-link" href="viewrecords.php"> View Attendees </a>
          </div>
          <div class="collapse navbar-collapse" id="navbarNav">
            <div class="navbar-nav ml-auto">
              <a class="nav-item nav-link active" href="login.php">Login <span class="sr-only"> </span></a>
            </div>
          </div>
    </nav>
    <br/>