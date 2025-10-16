<!DOCTYPE html>
<html>
<head>
	<title>Upload</title>
</head>
<body>
	 <?php
    $conn = mysqli_connect('localhost','root','','gp4_project');
    if (isset($_POST['submit'])) {
    	  $name=$_POST['name'];
        $type=$_POST['type'];
          $pdf=$_FILES['pdf']['name'];
          $pdf_type=$_FILES['pdf']['type'];
          $pdf_size=$_FILES['pdf']['size'];
          $pdf_tem_loc=$_FILES['pdf']['tmp_name'];
          $pdf_store="pdf/".$pdf;
          $sql="INSERT INTO files(name,file,type) values('$name','$pdf','$type')";
          $query=mysqli_query($conn,$sql);
          if ($query) {
            # code...
            move_uploaded_file($pdf_tem_loc,$pdf_store);
            header("location:files.php");
          }else{
            die("Error".mysqli_error($conn));
          }
        }
        mysqli_close($conn);
    ?>
</body>
</html>