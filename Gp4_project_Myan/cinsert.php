<?php
$conn=mysqli_connect("localhost","root","","gp4_project");
	if (!$conn) {
		# code...
		die("Doesn't connected".mysqli_error_no());
	}
	if (isset($_POST['add'])) {
		$name=$_POST['name'];
		$text=$_POST['ta'];
		$s="SELECT username FROM account WHERE username='$name'";
		$res=mysqli_query($conn,$s);
		$no=mysqli_num_rows($res);
		if ($no>0) {
		
			$sql="INSERT INTO review(username,comment) VALUES('$name','$text')";
			if (mysqli_query($conn,$sql)) {
			header('location:commentmain.php');
		}
	}else{
			?>
			<script type="text/javascript">
				alert("You don't have account.Please sign in or sign up.");
				window.location.href = 'Login_signup.php';

			</script>
		<?php
		}
		}
	mysqli_close($conn);
?>