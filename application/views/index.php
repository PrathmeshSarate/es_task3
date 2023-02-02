<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>ES TASK 3</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

	<style>
		table,
		th,
		td {
			border: 1px solid white;
			/* border-collapse: collapse; */
			color: white;
		}

		form {
			background-color: darkcyan;
			padding: 20px;
		}

		.form-control {
			background-color: antiquewhite;
		}

	</style>
</head>

<body>

	<div class="container">
		<h2>Qualification's</h2>
    
    <form class="form-inline" action="<?php echo base_url('Welcome/get_update_id'); ?>" method="post">
            <input class="form-control frm-control" id="id" name="id" class="input" type="text" placeholder="Enter ID e.g. 246" required> 
            <button type="submit" class="btn btn-info">Get Data</button>            
        </form>

		<form class="frm" action="<?= base_url('Welcome/saveform') ?>" method="POST">
			<table class="table table-responsive">
				<thead>

					<tr>
						<th> SR. No. </th>
						<th> Qualification <small>(e.g 10th, HSC/Diploma)</small> </th>
						<th> University / Board </th>
						<th> Department <small>Specilization</small> </th>
						<th> Percentage </th>
						<th> Delete </th>
					</tr>

				</thead>

				<tbody class="table_body">
					<tr>
						<td class="text-center">1</td>
						<td><input class="form-control" id="quali" name="quali[]" class="input" type="text"> </td>
						<td><input class="form-control" id="uni_board" name="uni_board[]" class="input" type="text"> </td>
						<td> <input class="form-control" id="department" name="department[]" class="input" type="text"></td>
						<td> <input class="form-control" id="percentage" name="percentage[]" class="input" type="text"> </td>
						<td>Can't Delete</td>
					</tr>
				</tbody>

			</table>
			<button class="add_form_field btn btn-success is-primary">Add New Field &nbsp;
						<span style="font-size:16px; font-weight:bold;">+</span>
				</button>
			<button type="submit" class="btn btn-default">Submit</button>

		</form>
	</div>
<script>
	$(document).ready(function () {
			var no = 1;
			var wrapper = $(".table_body");
			var add_button = $(".add_form_field");			
			
			$(add_button).click(function (e) {
				// if(no%2==0){
				// x='dimgray';
				// }else{
				// 	x='lightslategrey';
				// }
				console.log(no);
				no++;
				e.preventDefault();
					$(wrapper).append(
						'<tr><td class="text-center">'+no+'</td><td><input class="form-control" id="quali" name="quali[]" class="input" type="text"> </td><td><input class="form-control" id="uni_board" name="uni_board[]" class="input" type="text"></td><td> <input class="form-control" id="department" name="department[]" class="input" type="text"></td><td> <input class="form-control" id="percentage" name="percentage[]" class="input" type="text"></td><td><a href="#" class="btn btn-danger delete">Delete</a></td></tr>'
						); //add input box
					
				
			});

			$(wrapper).on("click", ".delete", function (e) {
				e.preventDefault();
				$(this).parent('tr').remove();
				
			})

			
		});
</script>
</body>

</html>
