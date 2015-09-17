<!doctype html>
<html lang="en">
	<head>
		<title>Banana Box - SRV1 - Edition page</title>
	</head>
	<body>
		<table>
			<thead>
				<tr><td>Filename</td></tr>
			</thead>
			<tbody>
<?php
$files = scandir("./");
array_shift($files);
array_shift($files);
for($i=0;$i<count($files);$i++)
	echo '<tr><td><a href="edit.php?file='.$files[$i].'">'.$files[$i].'</a></td></tr>';
?>
			</tbody>
		</table>
	</body>
</html>
