<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="robots" content="noindex, nofollow">

        <title>Hidden Panel - Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="<?php echo $this->url; ?>assets/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <style type="text/css">
            body{
                background-color:#f5f5f5;
            }
            .form-signin
            {
                max-width: 330px;
                padding: 15px;
                margin: 0 auto;
            }
            .form-signin .form-control
            {
                position: relative;
                font-size: 16px;
                height: auto;
                padding: 10px;
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
            }
            .form-signin .form-control:focus
            {
                z-index: 2;
                box-shadow: none;
            }
            .form-signin input[type="text"]
            {
                margin-bottom: -1px;
                border-bottom-left-radius: 0;
                border-bottom-right-radius: 0;
            }
            .form-signin input[type="password"]
            {
                margin-bottom: 10px;
                border-top-left-radius: 0;
                border-top-right-radius: 0;
                color: white;
            }
            .account-wall
            {
                margin-top: 80px;
                padding: 40px 0px 20px 0px;
                background-color: #ffffff;
                box-shadow: 0 2px 10px 0 rgba(0, 0, 0, 0.16);
            }
            .login-title
            {
                color: #555;
                font-size: 22px;
                font-weight: 400;
                display: block;
            }
            .profile-img
            {
                width: 96px;
                height: 96px;
                margin: 0 auto 10px;
                display: block;
                -moz-border-radius: 50%;
                -webkit-border-radius: 50%;
                border-radius: 50%;
            }


        </style>
        <script src="<?php echo $this->url; ?>assets/js/jquery.min.js"></script>
        <script src="<?php echo $this->url; ?>assets/js/bootstrap.min.js"></script>
        <script type="text/javascript">
            window.alert = function () {};
            var defaultCSS = document.getElementById('bootstrap-css');
            function changeCSS(css) {
                if (css)
                    $('head > link').filter(':first').replaceWith('<link rel="stylesheet" href="' + css + '" type="text/css" />');
                else
                    $('head > link').filter(':first').replaceWith(defaultCSS);
            }
            $(document).ready(function () {
                var iframe_height = parseInt($('html').height());
                window.parent.postMessage(iframe_height, 'https://bootsnipp.com');
            });
        </script>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-4 col-md-offset-4">
                    <div class="account-wall">
                        <div id="my-tab-content" class="tab-content">
							<?php
								if($_GET){
									if($_GET['s']=="w"){
										?>
										<div class="alert alert-danger fade in" align="center"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Username atau password salah</div>
										<?php
									}
								}
							?>

                            <div class="tab-pane active" id="login">
                                <form class="form-signin" action="login_act" method="post">
                                    <input type="text" class="form-control" name="username" style="border: none;" required autofocus>
                                    <input type="password" class="form-control" id="password" name="password" style="border: none;" required>
                                    <input type="checkbox" id="checkbox"> <label>Show Password</label>
                                    <input type="submit" class="btn btn-lg btn-default btn-block" value="Sign In" />
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">
			$(document).ready(function(){		
				$('#checkbox').click(function(){
					if($(this).is(':checked')){
						$('#password').attr('type','text');
						$('#password').attr('style','color: black; border: none');
					}else{
						$('#password').attr('type','password');
						$('#password').attr('style','color: white; border: none');
					}
				});
			});
        </script>
    </body>
</html>

