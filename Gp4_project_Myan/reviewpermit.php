<?php  
	$conn=mysqli_connect("localhost","root","","gp4_project");
	if (!$conn) {
		# code...
		die("Doesn't connected".mysqli_error_no());
	}
	$uid=$_GET['id'];
	$sql="SELECT * FROM review WHERE id='".$uid."'";
	$res=mysqli_query($conn,$sql);
	$data=mysqli_fetch_assoc($res);
	$n=$data['username'];
	$c=$data['comment'];
	$s="INSERT INTO permitreview(username,comment) VALUES('$n','$c')";
	if (mysqli_query($conn,$s)) {
		header("location:preview.php");
	}else{
		?>
		<script type="text/javascript">
				alert("You cannot permit this review.");
				window.location.href = 'review.php';

			</script>

		<?php
	}
	mysqli_close($conn);
?>