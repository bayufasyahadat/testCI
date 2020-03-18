<!DOCTYPE html>
<html>
<head>
	<title>List Data</title>
</head>
<body>
	<h3><a href="<?php echo site_url("crud/add_form"); ?>">tambah data</a></h3>
	<hr>
	<?php
		$i = 0;
		foreach ($pengguna as $value) {
			echo ++$i.". ";
			?>
			<a href="<?php echo site_url('crud/call_edit_form/'.$value->id); ?>">edit</a> 
			<a href="<?php echo site_url('crud/delete/'.$value->id); ?>">delete</a>
			<?php
			echo $value->nama." ";
			echo $value->agama." ";
			echo $value->type." ";
			echo "<hr>";
		}
	?>

</body>
</html>