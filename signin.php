<?php  
	$username=$_POST['lname'];
	$password=$_POST['lpass'];
		$conn=mysqli_connect("localhost","root","","gp4_project");
	if (!$conn) {
		# code...
		die("Connection fail").mysqli_connect_error();		
	}
		$sql="SELECT * FROM account WHERE username='$username'";
		$query=mysqli_query($conn,$sql);
		$no=mysqli_num_rows($query);
		if($no>0){
			$data=mysqli_fetch_assoc($query);
			if ($data['password']==$password) {
				# code...
				header('location:home.php');
			}else{
				echo "Wrong password.";
			}
			
		}
		else{
			echo "Wrong user id or You don't have account.Please create.";
		}
	
?>
