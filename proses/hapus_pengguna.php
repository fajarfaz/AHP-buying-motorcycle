<?php
include 'koneksi.php';
$id = $_GET['id'];
$sql = "DELETE FROM tb_user WHERE id_user = '$id'";
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
