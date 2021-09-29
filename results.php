<?php 
include_once 'php/config.php';
session_start();
 if(!isset($_SESSION['unique_id'])){
     header("location : error.php");
     echo "<script>alert('username or password incorrect')</script>";
 }
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(-1);
$sql= mysqli_query($conn,"SELECT * FROM result where unique_id = '{$_SESSION['unique_id']}' ORDER BY sem");
$row = mysqli_fetch_all($sql,MYSQLI_ASSOC);
$sql2=mysqli_query($conn,"SELECT * from students WHERE unique_id = '{$_SESSION['unique_id']}'");
$row1=mysqli_fetch_assoc($sql2);
?>
<?php require 'head.php'; ?>

<div class="d-flex"  >
 <div>
   <img src="logo.png" alt="" width="50" style="position:absolute;margin:-60px 0px 0px 55px;">
 </div>
 <h3 id="d"  style="position:absolute;margin:5px 0px 0px 110px;font-weight:300" class="text-white">Hello <span class="text-warning"><?php echo $row1['fname'];?></span>!!</h3>
<div class="container" id="results">
    <div class="card mt-5 my-5 border border-dark cr1" >
        <div id="res">
         <div class="card-header bg-dark text-white">
            <h2><?php echo $row1['usn']?></h2>
          
         </div>
         <div class="card-body">
            <table class="table">
                <tr>
                    <th>Sem</th>
                    <th>Subject Name</th>
                    <th>Marks</th>
                    <th>Action</th>
                </tr>
                <?php foreach($row as $p): ?>
                    <tr>
                        <td ><?= $p['sem']; ?></td>
                        <td ><?= $p['subject']; ?></td>
                        <td ><?= $p['marks']; ?></td>
                        <td>
                            <a href="edit.php?id=<?= $p['id'] ?>" class="text-primary fs-3"><i class="bi bi-pencil-square p-lg-2"></i></a> 
                            <a  onclick="return confirm('Are you sure you want to delete this record?')" href="delete.php?id=<?= $p["id"] ?>" class="text-danger fs-3" ><i class="bi bi-trash"></i></a>

                        </td>
                    </tr>
                <?php endforeach; ?>
                </table>
         </div>
                </div>
                <button class="btn btn-success m-2"  style="width:160px;margin-bottom:10px" onclick="generatePDF()">Download PDF <i class="bi bi-file-earmark-arrow-down-fill"></i></button>
               
        </div>
    </div>
</div>

<script src="https://raw.githack.com/eKoopmans/html2pdf/master/dist/html2pdf.bundle.js"></script>
<!-- <script src="javascript/downlaod.js"></script> -->

<script>
function generatePDF()
    {
        var opt = {
             margin:       1,
            filename:     'results.pdf',
        };
        html2pdf().set(opt)
        .from(document.getElementById("res"))
        .save();
    }
</script>


