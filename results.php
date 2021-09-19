<?php 
include_once 'php/config.php';
session_start();
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(-1);
$sql= mysqli_query($conn,"SELECT * FROM result where unique_id = '{$_SESSION['unique_id']}' ORDER BY sem");
$row = mysqli_fetch_all($sql,MYSQLI_ASSOC);
?>
<?php require 'head.php'; ?>
<div class="container" id="results">
    <div class="card mt-5 ">
        <div id="res">
         <div class="card-header ">
            <h2>3VC18CS104</h2>
          
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
                        <td><?= $p['sem']; ?></td>
                        <td><?= $p['subject']; ?></td>
                        <td><?= $p['marks']; ?></td>
                        <td>
                            <a href="edit.php?id=<?= $p['id'] ?>" class="btn btn-info">Edit</a>
                            <a onclick="return confirm('Are you sure you want to delete this record?')" href="delete.php?id=<?= $p["id"] ?>" class="btn btn-danger">Delete</a>

                        </td>
                    </tr>
                <?php endforeach; ?>
                </table>
         </div>
                </div>
                <button class="btn btn-success"  style="width:160px;margin-left:1100px;margin-bottom:10px" onclick="generatePDF()">Download PDF <i class="bi bi-file-earmark-arrow-down-fill"></i></button>
               
        </div>
    </div>
</div>

<script src="https://raw.githack.com/eKoopmans/html2pdf/master/dist/html2pdf.bundle.js"></script>
<!-- <script src="javascript/downlaod.js"></script> -->

<script>
function generatePDF()
    {
        
        html2pdf()
        .from(document.getElementById("res"))
        .save();
    }
</script>


