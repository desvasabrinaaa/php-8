<?php 

include 'koneksi.php';

$id = $_GET["id"];

$sql = "DELETE FROM siswa WHERE id_siswa = '".$id."'";
$result = $db->query($sql);
if($result){
	echo "
		<script>
		alert('Data berhasil dihapus !');
		window.location = 'index.php';
		</script>
		";
	 	}
else{
	echo "
		<script>
		alert('Error !');
		window.location = 'index.php';
		</script>
		";
}

?>