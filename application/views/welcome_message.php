	<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	?>
	<div class="container-fluid text-center">    
	  <div class="row content sidenav">
	    <div class="col-sm-9 text-left" style="background-color: white;"> 
			<div class="row" style="padding-top: 5px;">
				<div class="col-sm-4" style="padding-top: 5px"><div class="form-group has-feedback">
					<form action="<?php echo $this->url.'page/search'; ?>" method="post">
					<input type="text" class="form-control" name="search" placeholder="Search" />
					<a href="#"><i class="glyphicon glyphicon-search form-control-feedback"></i></a>
					</form>
					</div>
				</div>
				<div class="col-sm-6">&nbsp;</div>
				<div class="col-sm-2" align="right"> <button type="button" class="btn btn-primary">Notes <span class="badge"><?php echo count($notes); ?></span></button> <hr></div>
			</div>
			<?php 
			switch($menu){ 
				case'home': 
				?>
					<?php
					if(count($notes)!=0){
						foreach($notes as $post){
							$title = $post->title;
							$img = 'data:image/jpeg;base64,'.base64_encode(file_get_contents($this->url.'assets/img/'.$post->image));
							$description = substr(htmlentities($post->description),0,540).'... <a href="'.$url.'page/notes/'.$post->url.'"><strong>Read More</strong></a>';
							echo'<div class="row">';
							echo'<div class="col-sm-10" style="margin-top: -10px;"><a href="'.$this->url.'page/notes/'.$post->url.'"><h1>'.$title.'</h1></a></div>';
							echo'</div>';
	
							if($post->image!=''){
								echo'<div class="col-sm-2"><img src="'.$img.'" class="img-thumbnail" alt="Cinque Terre" style="width: 180px; height: 100px;"></div>';
								echo'<div class="col-sm-10" align="justify"><article><p>'.$description.'</p></article></div>';
							}else{
								echo'<div class="col-sm-2"><img src="'.$this->url.'assets/img/NoImage.png" class="img-thumbnail" alt="Cinque Terre" style="width: 180px; height: 100px;"></div>';
								echo'<div class="col-sm-10" align="justify"><article><p>'.$description.'</p></article></div>';
							}
							echo'<div class="col-sm-12"><span class="label label-default">'.$post->admin.'</span> <span class="label label-default">'.$post->date.'</span></div>';
							echo'<div class="col-sm-12"><hr></div>';
						}
					}else{
						echo'<div class="col-sm-12 text-center"><h1>Tidak ada catatan.</h1></div>';
					}
					?>
			<?php
				break;
				case 'notes':
			?>
				<?php
				if(count($notes)!=0){
						foreach($notes as $post){
							$title = $post->title;
							$img = 'data:image/jpeg;base64,'.base64_encode(file_get_contents($this->url.'assets/img/'.$post->image));
							$description = $post->description;
							echo'<div class="row">';
							echo'<div class="col-sm-10" style="margin-top: -10px;"><a href="'.$this->url.'page/notes/'.$post->url.'"><h1>'.$title.'</h1></a></div>';
							//echo'<div class="col-sm-2" style="margin-top: 10px;"><span class="label label-default">'.$post['author'].'</span></div>';
							echo'</div>';
	
							if($post->image!=''){
								echo'<div class="col-sm-12 text-center"><img title="'.$post->title.'" src="'.$img.'" class="img-thumbnail" alt="Cinque Terre" style="width: 450px; height: 300px;"></div>';
								echo'<div class="col-sm-12" align="justify"><article><p>'.$description.'</p></article></div>';
							}else{
								echo'<div class="col-sm-12" align="justify"><article><p><span style="font-weight:400;">'.$description.'</span></p></article></div>';
							}
							echo'<div class="col-sm-12"><span class="label label-default">'.$post->admin.'</span> <span class="label label-default">'.$post->date.'</span></div>';
							echo'<div class="col-sm-12">&nbsp;</div>';
						}
						$data_href = $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
						echo'<div class="col-sm-12"><div class="fb-comments" data-order-by="reverse_time" data-width="100%" data-href="'.$data_href.'" data-numposts="3"></div></div>';
					}else{
						echo'<div class="col-sm-12 text-center"><h1>Tidak ada catatan.</h1></div>';
					}
				?>
				<?php
					break;
				case'search':
				?>
					<?php
					if(count($notes)!=0){
						foreach($notes as $post){
							$title = $post->title;
							$img = 'data:image/jpeg;base64,'.base64_encode(file_get_contents($this->url.'assets/img/'.$post->image));
							$description = substr(htmlentities($post->description),0,540).'... <a href="'.$url.'page/notes/'.$post->url.'"><strong>Read More</strong></a>';
							echo'<div class="row">';
							echo'<div class="col-sm-10" style="margin-top: -10px;"><a href="'.$this->url.'page/notes/'.$post->url.'"><h1>'.$title.'</h1></a></div>';
							//echo'<div class="col-sm-2" style="margin-top: 10px;"><span class="label label-default">'.$post['author'].'</span></div>';
							echo'</div>';
	
							if($post->image!=''){
								echo'<div class="col-sm-2"><img src="'.$img.'" class="img-thumbnail" alt="Cinque Terre" style="width: 180px; height: 100px;"></div>';
								echo'<div class="col-sm-10"><article><p>'.$description.'</p></article></div>';
							}else{
								echo'<div class="col-sm-2"><img src="'.$this->url.'assets/img/NoImage.png" class="img-thumbnail" alt="Cinque Terre" style="width: 180px; height: 100px;"></div>';
								echo'<div class="col-sm-10"><article><p>'.$description.'</p></article></div>';
							}
							echo'<div class="col-sm-12"><span class="label label-default">'.$post->admin.'</span> <span class="label label-default">'.$post->date.'</span></div>';
							echo'<div class="col-sm-12"><hr></div>';
						}
					}else{
						echo'<div class="col-sm-12 text-center"><h1>Tidak ada catatan.</h1></div>';
					}
					?>
				<?php
				break;
				}
				?>
	    </div>
	    <div class="col-sm-3 sidenav">
	      <div class="well">
	        <p>ADS</p>
	      </div>
	      <div class="well">
	        <p>ADS</p>
	      </div>
	    </div>
	  </div>
	</div>
	<button type="button" id="tombolScrollTop" onclick="scrolltotop()">Scroll Top</button><button id="xclose" onclick="xclose()">X</button>
	<footer class="container-fluid text-center">
	  Footer Text
	</footer>
	<script type="text/javascript">
		$(document).ready(function(){
		$(window).scroll(function(){
			if ($(window).scrollTop() > 2000) {
				$('#tombolScrollTop').fadeIn();
				$('#xclose').fadeIn();
			} else {
				$('#tombolScrollTop').fadeOut();
				$('#xclose').fadeOut();
			}
		});
		});
		
		$(window).scroll(function(){
			if ($(window).scrollTop() >= 115) {
			   $('nav').addClass('fixed-header');
			}
			else {
			   $('nav').removeClass('fixed-header');
			}
		});


		function xclose()
		{
			$('#tombolScrollTop').remove();
			$('#xclose').remove()
		}

		function scrolltotop()
		{
			$('html, body').animate({scrollTop : 0},500);
		}
</script>
	</body>
	</html>
	
	
