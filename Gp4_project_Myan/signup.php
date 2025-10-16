<?php  
	$conn=mysqli_connect("localhost","root","","gp4_project");
	if (!$conn) {
		die("Doesn't connected".mysqli_error_no());
	}else{
		$username=$_POST['sname'];
		$mail=$_POST['email'];
		$pass=$_POST['spass'];
		$cpass=$_POST['scpass'];
		if ($pass==$cpass) {
			$sql="INSERT INTO account(username,email,password) VALUES('$username','$mail','$pass')";
			$res=mysqli_query($conn,$sql);
			if ($res) {
				# code...
				header('location:Login_signup.php');
			}
		}else{
			echo "Password and confirm password must be same.";
		}
	}
	mysqli_close($conn);
?>