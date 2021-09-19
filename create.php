<?php 
require "php/config.php";
// $message='';
// if(isset ($_POST['name']) && isset($_POST['email']))
// {
//     $name= $_POST['name'];
//     $email= $_POST['email'];
//     $sql = "INSERT INTO people(name, email) VALUES(:name, :email)";
//     $stmt=$conn->prepare($sql);
//     if ($stmt->execute([':name' => $name, ':email' => $email]))
//     {
//         $message='Data inserted successfully';
//         // header('Location: index.php');
//     }
// }




?>

<?php include_once 'head.php' ?>


<div class="container">
 <div class="card mt-5 w-lg-75 w-sm-100 float-left">
   <div class="card-header">
       <h2>Create a Record</h2>
   </div>
   <div class="card-body">
 
   <div class="form-group">
				<form name="add_name" id="add_name">
					<div class="table-responsive">
						<table class="table " id="dynamic_field">
							<tr>
								<td><input type="number" name="sem[]" placeholder="Enter Semester" class="form-control name_list" /></td>
								<td><input type="text" name="name[]" placeholder="Enter Subject name" class="form-control name_list" /></td>
								<td><input type="text" name="marks[]" placeholder="Enter Marks " class="form-control name_list" /></td>
								<td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>
							</tr>
						</table>
						<input type="button" name="submit" id="submit" class="btn btn-info" value="Submit" />
					</div>
				</form>
			</div>
   </div>
 </div>

</div>

<script>
$(document).ready(function(){
	var i=1;
	$('#add').click(function(){
		i++;
		$('#dynamic_field').append('<tr id="row'+i+'"><td><input type="number" name="sem[]" placeholder="Enter Semester" class="form-control name_list" /></td><td><input type="text" name="name[]" placeholder="Enter Subject name" class="form-control name_list" /></td><td><input type="text" name="marks[]" placeholder="Enter Marks " class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
	});
	
	$(document).on('click', '.btn_remove', function(){
		var button_id = $(this).attr("id"); 
		$('#row'+button_id+'').remove();
	});
	
	$('#submit').click(function(){		
		$.ajax({
			url:"php/create.php",
			method:"POST",
			data:$('#add_name').serialize(),
			success:function(data)
			{
				alert(data);
				$('#add_name')[0].reset();
			}
		});
	});
	
});


</script>

