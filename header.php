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
  <style>
    
.nv:hover{
  /* border:2px solid #fff; */
  background:white;
  color:white;
  transform:translateY(5px);
  transition:all 0.5s ease;
  padding:20px 35px 20px 35px;
}
.nv{

  color:white;
}

/* responsive*/
@media(max-width: 767px){
  #none{
   display:none;
}
.navbar-brand{
  margin-left:70px;
}

}
/* @media(max-width: 574px){
  .footer-col{
    width: 100%;
}
} */
  </style>
</head>

<nav class="navbar navbar-expand-lg navbar-light bg-0">
  <div class="container" style="justify-content:space-between">
  <a class="navbar-brand fs-3 text-white " href="index.php">StoreMyResults</a>
      <div id="none">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ">
        <li class="nav-item">
          <a class="nv fs-6 btn  bg-dark" aria-current="page" href="index.php" style="margin-left:800px;border-radius:20px;padding:10px 20px 10px 20px; ">Home</a>
        </li> 
        <li class="nav-item">
          <a class="nv fs-6 btn bg-dark" aria-current="page" href="index.php" style="margin-left:30px;border-radius:20px 20px 20px 20px;padding:10px 20px 10px 20px;">About</a>
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
  </div>
</nav>