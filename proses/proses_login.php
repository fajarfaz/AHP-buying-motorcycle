<?php


	include 'koneksi.php';
	$username   = $_POST['username'];
	$password   = $_POST['password'];

	if ($username == "admin" && $password == "admin") {
				session_start();
				$_SESSION['username'] = $username;
				echo "
				<script>
    				alert('Anda Masuk sebagai admin');
    				window.location = '../admin/index.php';
    			</script>";
			}else {

	$encode		= "tembem";
	$sql = "SELECT * FROM tb_user WHERE username = '$username'";
	$result = mysqli_query($conn, $sql);


	if (empty($id) && empty($password)) 
		{
			echo "
    			<script>
    				alert('Harap isi dengan benar');
    				window.location = '../login.php';
    			</script>
    		";					
		} 
		else 
		{	

			if ($result) 
			{	
				$row = mysqli_fetch_assoc($result);
				$passcheck = $row["password"];
				if (md5($encode.$password) == $passcheck) 
				{
					//Creating Sessions Variable
					
					if (session_status() == PHP_SESSION_NONE) {
					session_start();
					$_SESSION['id_user']  = $row['id_user'];
					$_SESSION['username'] = $row['username'];
			
					header('location:../user/index.php');	
						}else{
							echo "
					<script>
    					alert('Harap Logout dahulu');
    					window.location = 'login.php';
    				</script> ";
						}
				} 
				else 
				{
					echo "
					<script>
    					alert('Masukkan ID dan Password dengan benar');
    					window.location = 'login.php';
    				</script>
				";
				}
			} 
			else 
			{
				echo "
					<script>
    					alert('Username atau Password tidak Boleh Kosong');
    					window.location = 'login.php';
    				</script>
				";
			}
		}
		}
?>