<!DOCTYPE html>
<html lang="en">
<head>
	<title>Main</title>
	<meta charset="utf-8">
</head>
<body>

<h1> Main Page </h1>
<table border="1">
	<tr>
	
		<td>NIS</td>
		<td>Fullname</td>
		<td>Email</td>
		
	</tr>
	<?php foreach($siswa as $s):?>
	<tr>
		<td><?php echo $s['nis']?></td>
		<td><?php echo $s['full_name']?></td>
		<td><?php echo $s['email']?></td>
	</tr>
	<?php endforeach?>
	</table>

</body>
</html>