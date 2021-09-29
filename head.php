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
  .nv1:hover,
  .nv2:hover,
  .nv3:hover{
  /* border:2px solid #fff; */
  background:white;
  color:black;
  transform:translateY(5px);
  transition:all 0.5s ease;
  /* padding:20px 35px 20px 35px; */
}
.nv1{
  background: rgba(247, 230, 230, 0.2);
  color:white;
  margin-left:700px;border-radius:20px;padding:10px 20px 10px 20px; 
}
.nv2,.nv3{
  background: rgba(247, 230, 230, 0.2);
  color:white;
  margin-left:30px;border-radius:20px;padding:10px 20px 10px 20px; 
}
body{
  background-image:linear-gradient(green,white);
}

@media(max-width: 767px){
 .nv1,.nv3{
  margin-left:0px;padding:10px 18px 10px  18px;border-radius:5px; 
 }
 .nav-item{
   padding:5px;
 }
 .nv2{
  margin-left:0px;padding:10px 40px 10px 40px;border-radius:5px;
 }
 .nv3{
  padding:10px 30px 10px 30px
 }
 .nv1,.nv2,.nv3{
   margin-left:30%;
   background:none;
   border-bottom: 1px solid #f2f2f2;
 }
 .nv1:hover,
  .nv2:hover,
  .nv3:hover{
  /* border:2px solid #fff; */
  background:none;
  color:black;
  transform:translateY(5px);
  transition:all 0.5s ease;
  /* padding:20px 35px 20px 35px; */
}
img{
  display:none;
}
.cr-class{
 display:block;
}
.cr1{
  width:338px;margin:30px 5px 0px -14px;
}
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
    <a class="navbar-brand fs-3" href="index.php">Hello</a>
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
  <a class="navbar-brand fs-3 text-white" href="index.php">StoreMyResults</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ">
        <li class="nav-item">
          <a class="nv1 fs-6 btn  " aria-current="page" href="results.php">My results</a>
        </li> 
        <li class="nav-item">
          <a class="nv2 fs-6 btn" aria-current="page" href="create.php" >Add</a>
        </li>
        <li class="nav-item">
          <a  onclick="return confirm('Are you sure you want to logout?')" class="nv3 fs-6 btn " aria-current="page" href="logout.php" >Logout</a>
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
