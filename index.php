<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: results.php");
  }

?>

<?php include_once "header.php"; ?>
<body >
  <div class="d-flex">
 <div>
   <img src="logo.png" alt="" >
  <p class="text-white">Having Problem remembering your <br>results!? Store them Here!!</p>
  <a  id="start" onclick="chg()" style="position:absolute;margin:300px 0px 0px 110px;font-size:18px;border:0px"class="btn btn-dark">Get Started ></a>
 </div>
  <div class="wrapper" style="backdrop-filter: blur(2px);
backdrop-filter: brightness(60%);
backdrop-filter: contrast(40%);
backdrop-filter: drop-shadow(4px 4px 10px blue);
backdrop-filter: grayscale(30%);
backdrop-filter: hue-rotate(120deg);
backdrop-filter: invert(70%);
backdrop-filter: opacity(20%);
backdrop-filter: sepia(90%);
backdrop-filter: saturate(80%);">
    <section class="form signup">
      <header>Sign up</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="name-details">
            <div class="field input">
              <label>First Name</label>
              <input type="text" name="fname" placeholder="First name" required>
            </div>

            <div class="field input">
              <label>Last Name</label>
              <input type="text" name="lname" placeholder="Last name" required>
            </div>  
        </div>

        <div class="field input">
          <label>University Seat Number</label>
          <input type="text" name="usn" placeholder="Enter your USN" required>
        </div>

        <div class="field input">
          <label>Email Address</label>
          <input type="text" name="email" placeholder="Enter your email" required>
        </div>

        <div class="field input">
          <label>Password</label>
          <input type="password" name="password" placeholder="Enter new password" required>
          <i class="fas fa-eye"></i>
        </div>

        <div class="field button">
          <input type="submit" name="submit" value="Continue">
        </div>

      </form>
      <div class="link">Already signed up? <a href="login.php">Login now</a></div>
    </section>
  </div>
  </div>
  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/signup.js"></script>

</body>
</html>
<?php require "footer.php" ?>

<script>
  function chg()
  {
    document.getElementsByClassName("wrapper")[0].style.transform= "translateX(-65px)";
    document.getElementsByClassName("wrapper")[0].style.transition="all 1s ease";
    document.getElementsByClassName("wrapper")[0].style.background="linear-gradient(#F2BC79,white)";
    

  }
  </script>