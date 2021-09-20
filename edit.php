<?php
require 'php/config.php';
$id = $_GET['id'];
$sql = mysqli_query($conn,"SELECT * FROM result WHERE id='{$id}'");
$p=mysqli_fetch_assoc($sql);
if (isset($_POST["sem"]) && isset($_POST["name"]) && isset($_POST["marks"]))
{
    $name= $_POST["name"];
    $sem=$_POST["sem"];
    $marks=$_POST["marks"];
    $sql = mysqli_query($conn,"UPDATE result SET subject = '{$name}', sem='{$sem}',marks='{$marks}' WHERE id='{$id}'");
    if ($sql) {
        
        header("Location: results.php");
    }
}



?>
<?php require 'head.php' ?>
<div class="d-flex">
 <div>
   <img src="logo.png" alt="" width="50" style="position:absolute;margin:-60px 0px 0px 55px;">
 </div>
<div class="container">
    <div class="card mt-3">
        <div class="card-header">
            <h2>
                Update Record
            </h2>
        </div>
        <div class="card-body">
            <div class="form-group">
				<form method="POST">
					<div class="table-responsive">
						<table class="table " id="dynamic_field">
							<tr>
								<td><input type="number" value=<?php echo $p['sem']; ?> name="sem" class="form-control name_list" /></td>
								<td><input type="text"  value=<?php echo $p['subject']; ?>   name="name" class="form-control name_list" /></td>
								<td><input type="text"  value=<?php echo $p['marks']; ?>   name="marks"  class="form-control name_list" /></td>
							</tr>
						</table>
						<input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" />
					</div>
				</form>
			</div>
        </div>
    </div>
</div>

