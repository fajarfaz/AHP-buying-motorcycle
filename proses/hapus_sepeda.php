<?php
include 'koneksi.php';
$id = $_GET['id'];
$sql = "DELETE FROM tb_sepeda WHERE id_sepeda = '$id'";
	$exec = mysqli_query($conn, $sql);
	if ($exec)
	 {
		echo "
		
	<script>
    window.history.back();
	</script>
		";
	}
	else
	 {

		echo "
		<script>
	     			alert('Penghapusan Gagal !..');
	     		 window.history.back();
	     		</script>";
	     		
}

?>
