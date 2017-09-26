<?php
include"all.data.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Custom post blog HTML</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
	<div class="row">
		<div class="col-sm-3">
		</div>
		<div class="col-sm-6">
			<form action="theme.php" method="post">
				<h2>Anime list: </h2>
				<select name="anime" class="form-control">
					<?php
					while($fetch = mysql_fetch_array($run)){
					?>
					<option value="<?php echo $fetch['id_list']; ?>"><?php echo $fetch['name_list']; ?></option>
					<?php
					}
					?>
				</select>
				<br>
				<hr>
				<input type="submit" name="submit" value="Select" class="form-control">
			</form>
		</div>
	</div>
</div>
