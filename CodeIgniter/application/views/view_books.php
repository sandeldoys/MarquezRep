<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo $title;?></title>
</head>
<body>

<div id="container">
	<h1>Welcome to CodeIgniter!</h1>
	<!--<a href="update">update</a>-->
	<table border = "1">
		<th>ID Number</th>
		<th>Title</th>
		<th>Course</th>
		<th>Action</th>
		<?php
			foreach($result as $row){
				$url1 = 'update';
				$url1 = rawurlencode($url1);
				$url1 .= "?flag=".urlencode($row->materialid);
				$url2 = 'delete';
				$url2 = rawurlencode($url2);
				$url2 .= "?flag=".urlencode($row->materialid);
				
				echo "<tr>";
				echo "<td>".$row->materialid."</td>";
				echo "<td>".$row->name."</td>";
				echo "<td>".$row->course."</td>";
				echo "<td><a href='".html_escape($url1)."'><input type='button' value='UPDATE' /></a>";
				echo "<a href='".html_escape($url2)."'><input type='button' value='DELETE' /></a></td>";
				echo "</tr>";
			}
		?>
	</table>
</div>

</body>
</html>