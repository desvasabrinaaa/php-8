<?php

include 'koneksi.php';

$id = $_GET["id"];

$sql = "SELECT * FROM siswa WHERE id_siswa = '".$id."';";
$result = mysqli_query($db,$sql);

$row = mysqli_fetch_assoc($result);
mysqli_free_result($result);

 $submit = isset($_POST['Siswa_submit'])?$_POST["Siswa_submit"]:"";
	if ($submit) {
		$nis = $_POST["nis"];
		$nama = $_POST["nama_lengkap"];
		$jk = $_POST["jk"];
		$tmp_lahir = $_POST["tmp_lahir"];
		$tgl_lahir = $_POST["tgl_lahir"];
		$alamat = $_POST["alamat"];
		$no_hp = $_POST["no_hp"];

	 	$sql ="
	 	   UPDATE siswa SET 
	 	   nis = '".$nis."',
	 	   nama_lengkap = '".$nama."',
	 	   jk = '".$jk."',
	 	   tmp_lahir = '".$tmp_lahir."',
	 	   tgl_lahir = '".$tgl_lahir."',
	 	   alamat = '".$alamat."',
	 	   no_hp = '".$no_hp."', 
	 	   tanggal_entri = '".$row["tanggal_entri"]."' 
	 	   WHERE id_siswa = '". $id ."'
	 	   ;";
	 	$result = $db->query($sql);
	 	if($result){
	 		echo "
	 		<script>
	 			alert('Data berhasil diubah!');
	 			window.location = 'index.php';
	 		</script>
	 		";
	 	}
	 	else{
	 		echo $sql;
	 		// echo "
	 		// <script>
	 		// 	alert('Data gagal diubah!');
	 		// 	window.location = 'index.php';
	 		// </script>
	 		// ";
	 	}
	}
?>
<div class="container">
	<h1>Edit Siswa XI RPL 1</h1>

	<form action="" method="POST">
	<div class="form-group">
		<label>NIS</label><br>
		<input class="form-control" type="text" name="nis" required="required" value="<?= $row['nis'] ?>"/>
	</div>

	<div class="form-group">
		<label>Nama Lengkap</label><br>
		<input class="form-control" type="text" name="nama_lengkap" required="required" value="<?= $row['nama_lengkap'] ?>" />
	</div>

	<div class="form-group">
		<label>JK</label><br>
		<?php
			if($row['jk'] == "L"){
				echo "
				<input type='radio' name='jk' value='L' checked> Laki-laki
				<input type='radio' name='jk' value='P'> Perempuan
				";
			}elseif($row['jk'] == "P"){
				echo "
				<input type='radio' name='jk' value='L'> Laki-laki
				<input type='radio' name='jk' value='P' checked> Perempuan
				";
			}
		?>
	</div>

	<div class="form-group">
		<label>Tempat Lahir</label><br>
		<input class="form-control" type="text" name="tmp_lahir" required="required" value="<?= $row['tmp_lahir'] ?>"><br>
	</div>

	<div class="form-group">
		<label>Tanggal Lahir</label><br>
		<input class="form-control" type="text" name="tgl_lahir" required="required" placeholder="YYYY-MM-DD" value="<?= $row['tgl_lahir'] ?>"><br>
	</div>

	<div class="form-group">
		<label>Alamat</label><br>
		<textarea class="form-control" name="alamat"><?= $row['alamat'] ?></textarea><br>
	</div>

	<div class="form-group">
		<label>Nomor HP</label><br>
		<input class="form-control" type="text" name="no_hp" required="required" value="<?= $row['no_hp'] ?>"><br><br>
	</div>

	<input type="submit" name="Siswa_submit" value="Edit">
	</form>
</div>