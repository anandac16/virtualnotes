<?php
include"all.data.php";
?>
<style>
th,td{ border: 1px #ddd solid; }
</style>
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<table class="table">
			<tr>
				<td class="header">id</th>
				<td class="header">Name</th>
				<td class="header" colspan="3" align="center" width="15%">Option</th>
				
			</tr>
			<?php
			while($fetch = mysql_fetch_array($run)){
				echo"<tr>";
				echo"<td>{$fetch['id_list']}</td>";
				echo"<td>{$fetch['name_list']}</td>";
				echo'<td align="center"><span class="glyphicon glyphicon-plus"></span></td>';
				echo'<td align="center"><span class="glyphicon glyphicon-pencil"></span></td>';
				echo'<td align="center"><span class="glyphicon glyphicon-trash"></span></td>';
				echo"</tr>";
			}
			?>
			</table>
		</div>
	</div>
</div>
