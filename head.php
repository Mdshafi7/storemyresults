<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>StoreMyResults</title>
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
<script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<style>
  .nv:hover{
  /* border:2px solid #fff; */
  background:white;
  color:black;
  transform:translateY(5px);
  transition:all 0.5s ease;
  padding:20px 35px 20px 35px;
}
.nv{
  background: rgba(247, 230, 230, 0.2);
  color:white;
}
</style>
</head>

<?php
    require 'php/config.php';
    session_start();
    $sql=mysqli_query($conn,"SELECT * FROM students WHERE unique_id = '{$_SESSION['unique_id']}'");
    $result = mysqli_fetch_assoc($sql);
?>

<body style="display:block">
    <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand fs-3" href="index.php">Hello <?php echo $result['fname']." ".$result['lname']. " !"?></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarSupportedContent">
      <ul class="navbar-nav float-right">
        <li class="nav-item">
          <a class="nav-link fs-4" aria-current="page" href="results.php">Home</a>
        </li> 
        <li class="nav-item">
        <a class="nav-link active fs-4" href="create.php">Add</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active fs-4 btn btn-danger text-white" href="logout.php">logout</a>
      </li>
      </ul>
      
    </div>
  </div>
</nav> -->

<nav class="navbar navbar-expand-lg navbar-light bg-0">
  <div class="container" style="justify-content:space-between">
  <a class="navbar-brand fs-3 " href="index.php">StoreMyResults</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ">
        <li class="nav-item">
          <a class="nv fs-6 btn bg-dark " aria-current="page" href="results.php" style="margin-left:700px;border-radius:20px;padding:10px 20px 10px 20px; ">My results</a>
        </li> 
        <li class="nav-item">
          <a class="nv fs-6 btn bg-dark" aria-current="page" href="create.php" style="margin-left:30px;border-radius:20px 20px 20px 20px;padding:10px 20px 10px 20px;">Add</a>
        </li>
        <li class="nav-item">
          <a class="nv fs-6 btn bg-dark" aria-current="page" href="logout.php" style="margin-left:30px;border-radius:20px 20px 20px 20px;padding:10px 20px 10px 20px;">Logout</a>
        </li>
        <!-- <li class="nav-item">
        <a class="nav-link fs-4" href="create.php">Add</a>
      </li> -->
      <!-- <li class="nav-item">
        <a class="nav-link active fs-4 btn btn-danger text-white" href="logout.php">logout</a>
      </li> -->
      </ul>
      
    </div>
  </div>
</nav>
