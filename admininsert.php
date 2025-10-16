<?php  
	$conn=mysqli_connect("localhost","root","","gp4_project");
	if (!$conn) {
		# code...
		die("Doesn't connected".mysqli_error_no());
	}if (isset($_POST['submit'])) {
		$name=$_POST['name'];
		$password=$_POST['pass'];
		$op=$_POST['opt'];
		$s="SELECT * FROM admin WHERE username='$name' AND password='$password'";
		$res=mysqli_query($conn,$s);
		$no=mysqli_num_rows($res);
		if ($no>0) {
			?>
			<script type="text/javascript">
				alert("Warmly Welcome admin.");
				window.location.href = 'files.php';

			</script>
			
		<?php
		}else{
			?>
			<script type="text/javascript">
				alert("You are't an admin.So, we can't permit to enter.");
				window.location.href = 'amin.php';

			</script>
		<?php
		}
		}
	mysqli_close($conn);
	
?>