<!DOCTYPE html>
<html>
<head>
	<title>form edit</title>
</head>
<body>
	<h1>Form Edit Data</h1> 
	<?php 
		//untuk debug 
		//print_r($pengguna[0]);
		$LA = array("Islam","Katolik","Protestan","Hindu","Budha","Konghucu");
	?>
	<form action="<?php echo site_url("crud/aksi_edit/".$pengguna[0]->id); ?>" method="post">
		Nama :<br/>
		<input type="text" name="nama"  value="<?php echo $pengguna[0]->nama; ?>"></p>
		Agama :<br/>
		<?php
			
		?>
		<select name="agama">
			<?php
				foreach($LA as $x) 
					if ($pengguna[0]->agama == $x )
						echo "<option value='$x' selected >$x</option>";
					else	
						echo "<option value='$x'>$x</option>";
			?>
		</select><p/>
		Type User :<br/>
		<input type="radio" name="type" value="Administrator"
			<?php if ($pengguna[0]->type == "Administrator") echo "checked"; ?> >Administrator
		<input type="radio" name="type" value="Operator"
			<?php if ($pengguna[0]->type == "Operator") echo "checked"; ?> >Operator
		</p>
		Alamat :<br/>
		<textarea name="alamat"><?php echo $pengguna[0]->alamat; ?></textarea>
		</p>
		<input type="submit" value="simpan">
	</form>
</body>
</html>