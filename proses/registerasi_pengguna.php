 
<?php  
	include "koneksi.php";


	 $nama = $_POST['nama'];
	 $username = $_POST['username'];
 	 $password = $_POST['password'];
	 $password1 = $_POST['password1'];

	if($password1==$password){
	$encode  = "tembem";    
	$password = md5($encode.$password);  

	 $sql = "INSERT INTO tb_user VALUES ('','$username','$password','$nama')";
	 $result = mysqli_query($conn, $sql);

	 if ($result) 
	 {
	 	
			 
	 	?>
		
	 	<?php
	 	echo "
     		<script>
     			alert('Pendaftaran Berhasil !..');
     		</script>
     		<meta http-equiv='refresh' content='0; url=../admin/pengguna.php'>			
     	";	
	 } 
	 else 
	 {
	 	echo "$sql
     		<script>

     			alert('Data Gagal Disimpan');
     			<meta http-equiv='refresh' content='0; url=../admin/pengguna.php'>		
     		</script>
     	";			
	 }
	
}else{
echo "$sql
     		<script>

     			alert('Konfirmasi Password Salah');
     			<meta http-equiv='refresh' content='0; url=../admin/pengguna.php'>		
     		</script>
     	";			

}
	 
?>
