<!DOCTYPE html>
<html>
<head>
	<title>form add</title>
</head>
<body>
	<h1>Form Add Data</h1> 
	<form action="<?php echo site_url("crud/aksi_add"); ?>" method="post">
		Nama :<br/>
		<input type="text" name="nama" ></p>
		Password :<br/>
		<input type="password" name="password" ></p>
		Agama :<br/>
		<?php
			$LA = array("Islam","Katolik","Protestan","Hindu","Budha","Konghucu");
		?>
		<select name="agama">
			<?php
				foreach($LA as $x) 
					echo "<option value='$x'>$x</option>";
			?>
		</select><p/>
		Type User :<br/>
		<input type="radio" name="type" value="Administrator">Administrator
		<input type="radio" name="type" value="Operator">Operator
		</p>
		Alamat :<br/>
		<textarea name="alamat"></textarea>
		</p>
		<input type="submit" value="simpan">
	</form>
</body>
</html>