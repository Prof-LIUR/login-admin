<?php
	if (isset($_POST['login']))
		{
			$username = $_POST['user'];
			$password = md5($_POST['pass']);
			$query 		= mysqli_query($con, "SELECT * FROM users WHERE  password='$password' and username='$username'");
			$num_row 	= mysqli_num_rows($query);
			if ($num_row > 0) 
				{			
					$_SESSION['user_id']=$user;
					header('location:home.php');
				}
			else
				{
					echo "<script>alert('Maaf Akun Anda Tidak Tersedia!');</script>";
				}
		}
  ?>