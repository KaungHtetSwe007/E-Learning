<?php
$conn=mysqli_connect("localhost","root","","gp4_project");
	if (!$conn) {
		# code...
		die("Doesn't connected".mysqli_error_no());
	}
	if (isset($_POST['submit'])) {
		$fname=$_POST['fname'];
		$mail=$_POST['email'];
		$ph=$_POST['phno'];
		$message=$_POST['message'];
		$s="SELECT * FROM account WHERE email='$mail'";
		$res=mysqli_query($conn,$s);
		$no=mysqli_num_rows($res);
		if ($no>0) {
			$sql="INSERT INTO contact(first_name,email,ph_no,message) VALUES('$fname','$mail','$ph','$message')";
			if (mysqli_query($conn,$sql)) {
				?>
			<script type="text/javascript">
				alert("Thanks for your message.");
				window.location.href = 'usercontactus.php';

			</script>
		<?php
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