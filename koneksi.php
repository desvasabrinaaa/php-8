<head>
	<title>CRUD SISWA RPL</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" type="text/css" href="./assets/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="./assets/css/style.css">
	<script type="text/javascript" src="./assets/js/jquery-3.3.1.js"></script>	
	<script type="text/javascript" src="./assets/css/bootstrap.min.js"></script>
	<script type="text/javascript" src="./assets/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="./assets/js/dataTables.bootstrap4.min.js"></script>


	<script>
		$(document).ready(function(){
			$('#tabel_siswa').DataTable();
		});
	</script>
</head>
<?php 

$db = new mysqli("localhost","root","","11rpl1_db");

	if (mysqli_connect_errno()) {
		echo "Error : " . mysqli_connect_error();
	}

?>