<?php include"all.data.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Virtual Notes</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    .sidenav {
		min-height: 600px;
	}
	
	.title {
		font-size: 56px;
		font-weight: 500;
		letter-spacing: 10px;
		color: white;
	}
	
	.navbar-inverse {
		background-color: #3E3E4A;
		border-color: #3E3E4A;
	}
	
	footer {
		background-color: #3E3E4A;
	}
	
	.navbar-inverse .navbar-nav > li > a {
		color: white;
	}
	
	.image {
		border: 5px #ccc solid;
		border-radius: 5px;
	}
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>
</head>
<body>
<div style="background-color: #3E3E4A">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center">
				<h1 class="title">Virtual Notes</h1>
				<small style="color: #ccc; opacity: 0.5">Catatan virtual </small>
			</div>
		</div>
	</div>
</div>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">VN</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Projects</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-10 text-left"> 
		<div class="col-sm-12" align="right" style="margin-left: 20px; padding-top: 5px;"> <button type="button" class="btn btn-primary">Notes <span class="badge"><?php echo count($data); ?></span></button> <hr></div>
		<?php
			foreach($data as $post){
				$title = $post['title'];
				$description = substr($post['description'],0,540)."... <strong>Read More</strong>";
				echo'<div class="row">';
				echo'<div class="col-sm-10" style="margin-top: -10px;"><h1>'.$title.'</h1></div>';
				echo'<div class="col-sm-2" style="margin-top: 10px;"><font style="color: #ccc;">Author: '.$post['author'].'</font></div>';
				echo'</div>';
				foreach($post['image'] as $img){
					
				}
				if($img !=''){
					echo'<div class="col-sm-2"><img src="'.$img.'" class="img-thumbnail" alt="Cinque Terre" style="width: 180px; height: 100px;"></div>';
					echo'<div class="col-sm-10"><p>'.$description.'</p></div>';
				}else{
					echo'<div class="col-sm-2"><img src="assets/img/NoImage.png" class="img-thumbnail" alt="Cinque Terre" style="width: 180px; height: 100px;"></div>';
					echo'<div class="col-sm-10"><p>'.$description.'</p></div>';
				}
				echo'<div class="col-sm-12"><hr></div>';
			}
		?>
    </div>
    <div class="col-sm-2 sidenav">
      <div class="well">
        <p>ADS</p>
      </div>
      <div class="well">
        <p>ADS</p>
      </div>
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>
</body>
</html>
