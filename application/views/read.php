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

		.frm {
			background-color: darkcyan;
			padding: 20px;
		}

		form-control {
			background-color: antiquewhite;
		}

        .frm-control
        {
            width: 100px;
        }

        .form-inline{
            padding:  40px 0 40px 0px;
        }

	</style>
</head>

<body>

	<div class="container">
		<h2>Qualification's</h2>
       <?php if(isset($data)){}
           
           
                
                
            
           
       ?>
		<form class="frm" action="<?= base_url('Welcome/updateform') ?>" method="POST">
			<table class="table table-responsive">
				<thead>

					<tr>
						<th> SR. No. </th>
						<th> Qualification <small>(e.g 10th, HSC/Diploma)</small> </th>
						<th> University / Board </th>
						<th> Department <small>Specilization</small> </th>
						<th> Percentage </th>
					</tr>

				</thead>

				<tbody>

					<?php 
                    // foreach($result_data as $row){ for($count=1;$count<=10;$count++) {
                        foreach($data as $row){
                        ?>

					<tr>
						<td class="text-center"><?php echo "";?></td>
						<td><input class="form-control" id="quali" name="quali[]" class="input" type="text" value="<?php echo $row->id;  ?>"> </td>
						<td><input class="form-control" id="uni_board" name="uni_board[]" class="input" type="text" value="<?php echo $row->uni_board;  ?>"> </td>
						<td> <input class="form-control" id="department" name="department[]" class="input" type="text" value="<?php echo $row->department; ?>"></td>
						<td> <input class="form-control" id="percentage" name="percentage[]" class="input" type="text" value="<?php echo $row->percentage;  ?>"> </td>
					</tr>

					<?php
                //  } }
                 ?>

				</tbody>

			</table>
			<button type="submit" class="btn btn-default">Submit</button>

		</form>
        <?php } ?>
	</div>

</body>

</html>
