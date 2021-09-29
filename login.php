<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: results.php");
  }
?>

<?php include_once "header.php"; ?>
<body>
<div class="d-flex">
 <div>
   <img src="logo.png" alt="" >
  <!-- <p style="position:absolute;margin:200px 0px 0px 110px;font-size:30px">Having Problem remembering your <br>results!? Store them Here!!</p> -->
  <!-- <a  style="position:absolute;margin:300px 0px 0px 110px;font-size:18px; background: rgba(247, 230, 230, 0.2);border:0px"class="btn btn-light">Get Started ></a> -->
 </div>
  <div class="wrapper" >
    <section class="form login">
      <header>Login</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="field input">
          <label>Email Address</label>
          <input type="text" name="email" placeholder="Enter your email" required>
        </div>
        <div class="field input">
          <label>Password</label>
          <input type="password" name="password" placeholder="Enter your password" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Continue">
        </div>
      </form>
      <div class="link">Not yet signed up? <a href="index.php">Signup now</a></div>
    </section>
  </div>
  </div>
  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/login.js"></script>

</body>
</html>

<?php require "footer.php" ?>
