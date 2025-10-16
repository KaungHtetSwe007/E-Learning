<?php
$conn=mysqli_connect("localhost","root","","gp4_project");
if (!$conn) {
	die("Doesn't connected".mysqli_error_no());
}
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM account WHERE account_id=$id";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Query failed: " . mysqli_error($conn));
    } else {
        header('location:account.php');
    }
}


?>
