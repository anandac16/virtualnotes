	<!DOCTYPE html>
	<html lang="en">
	<head>
	  <title><?php echo $this->title; ?></title>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="<?php echo $this->url; ?>assets/css/bootstrap.min.css">
	  <link rel="stylesheet" href="<?php echo $this->url; ?>assets/css/bootstrap.min2.css">
	  <script src="<?php echo $this->url; ?>assets/js/jquery.min.js"></script>
	  <script src="<?php echo $this->url; ?>assets/js/bootstrap.min.js"></script>
	  <style>
	    /* Remove the navbar's default margin-bottom and rounded borders */ 
	    .navbar {
	      margin-bottom: 0;
	      border-radius: 0;
	    }
	    
	    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
	    
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
		
		a:hover {
			text-decoration: none;
		}
		
		#tombolScrollTop
		{
			cursor: pointer;
			position:fixed;
			left:75%;
			bottom:50px;
			border:3px solid #585858;
			background-color:white;
			color:#585858;
			border-radius:100%;
			height:90px;
			width:90px;
			font-size:15px;
			display:none;
		}
		
		#xclose
		{
			cursor: pointer;
			position:fixed;
			left:85%;
			bottom:120px;
			border:3px solid #585858;
			background-color:white;
			color:#585858;
			height:24px;
			width:24px;
			font-size:12px;
			display:none;
		}
		
		.fixed-header {
		  position: fixed;
		  top:0; left:0;
		  width: 100%; 
		}
	    
		nav {
		  width:100%;
		  background: #292f36;
		  postion:fixed;
		  z-index:10;
		}

		nav ul { 
		  list-style-type: none;
		  margin: 0 auto;
		  padding-left:0;
		  text-align:right;
		  width: 960px; 
		  max-width: 100%;
		}
		nav ul li { 
		  display: inline-block; 
		  line-height: 60px;
		  margin-left: 10px;
		}
		nav ul li a {
		  text-decoration: none; 
		  color: #a9abae;
		}

	    /* On small screens, set height to 'auto' for sidenav and grid */
	    @media screen and (max-width: 767px) {
	      .sidenav {
	        height: auto;
	        padding: 15px;
	      }
	      .row.content {min-height:480px;} 
	    }
	  </style>
	</head>
	<body>
	<div id="fb-root"></div>
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v2.10&appId=254700921665214";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
	
	<div style="background-color: #3E3E4A">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 text-center">
					<a href="<?php echo $this->url; ?>"><h1 class="title">Virtual Notes</h1></a>
					<small style="color: #ccc; opacity: 0.5">Catatan virtual </small>
				</div>
			</div>
		</div>
	</div>
	
