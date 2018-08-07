<?php
	extract($_REQUEST);
	if(isset($create))
	{
		header("");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Crud</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"/>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1 class="display-4 text-center text-info">Crud App</h1>
				<hr>
			</div>
		</div>
		
		<div class="row text-center">
			
			<form method="post">
				<div class="form-group">
					<div class="col-md-3">
					<a name="create" href="create.php" class="btn btn-outline-secondary">Create</a>
					</div>
					<div class="col-md-3">
						<a name="read" href="read.php" class="btn btn-outline-secondary">Read</a>
					</div>
					<div class="col-md-3">
						<a name="update" href="update.php" class="btn btn-outline-secondary">Update</a>
					</div>
					<div class="col-md-3">
						<a name="delete" href="delete.php" class="btn btn-outline-secondary">Delete</a>
					</div>
				</div>
			</form>
			
		</div>
	</div>
</body>
</html>