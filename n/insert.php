<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Tambah custom baru</h2>
  <form class="form-horizontal" action="" method="post">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Anime name:</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" id="anime_name" placeholder="Enter Name" name="anime_name">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" name="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
</div>

</body>
</html>
<?php
if(isset($_POST['submit'])){
	include"db.connect.php";
	$anime_name = $_POST['anime_name'];
	$sql = "SELECT name_list FROM list where name_list='$anime_name'";
	$run = mysql_query($sql);
	$row = mysql_num_rows($run);
	if($row>=1){
		echo"<script>alert('Anime name sudah ada');</script>";
	}else{
		$custom_name = strtolower(str_replace(' ','-',$anime_name));
		$sql = "INSERT INTO list (name_list,custom_name) VALUES ('$anime_name','$custom_name')";
		$run = mysql_query($sql);
		if($run){
			echo"<script>alert('Berhasil menambah list');</script>";
			header('location: index.php');
		}else{
			echo"<script>alert('Gagal menambah list');</script>";
			header('location: index.php');
		}
	}
}






