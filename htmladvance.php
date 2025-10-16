<!DOCTYPE html>
<html>
<head>
	<title>Responsive Tabs</title>
  
	<link rel="stylesheet" type="text/css" href="css/php.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="css/vdstyle.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen" charset="utf-8" />
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-179390237-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-179390237-1');
</script>
<style type="text/css">
  #vv{
    height: 50px;
  }
  #cc{
    height: 30px;
  }
</style>

</head>
<body>



<div class="wrapper">
	<div class="tabs_container">
		<div class="tabs_header">
			<h1>Html & CSS Advance course</h1>
			<ul>
        
				<li class="active">
					<span class="icon"><i class="fa-solid fa-file"></i></span>
					<span class="item">PDF files</span>
				</li>
				<li>
					<span class="icon"><i class="fa-brands fa-youtube"></i></span>
					<span class="item">Videos</span>
				</li>
        <li>
          <span class="icon"><a style="text-decoration: none; color: white;" href="htmlcss.php"><i class="fa-solid fa-house-laptop"></i></a></span>
          <span class="item"><a style="text-decoration: none; color: white;" href="htmlcss.php">Home</a></span>
        </li>
			</ul>
		</div>
		<div class="tabs_wrapper">
			<div class="tabs_content" style="display: block;">
         <div id="cc">
          <center><h3 style="color: #3586ff;">If you want to study, you can download files at there.</h3></center>
        </div>
				<div class="container">
						<?php
 				$conn = mysqli_connect('localhost','root','','gp4_project');
    			$query2 = "SELECT * FROM files WHERE type='htmladvance'";
    			$run2 = mysqli_query($conn,$query2);           
    			while($rows = mysqli_fetch_assoc($run2)){
    		?>
					<div class="pcard" style="--clr:#009688">
						<div class="imgBx">
							<img src="https://images.pexels.com/photos/1329571/pexels-photo-1329571.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1">
						</div>
						<div class="content">
						<h2><?php echo $rows['type'] ?></h2>
							<p><?php echo $rows['name'] ?></p>
						<a href="download.php?file=<?php echo $rows['file'] ?>">Download</a><br>
						</div>
					</div>
					<?php  
			}
   			?>
				</div>
			</div>
   			
			<div class="tabs_content" style="display: none;">
				


			<div class="container">
  				
  <div class="row">
    <div id="vv">
          <center><h3 style="color: #3586ff; margin-top: -60px;">If you want to study, you can watch videos at there.</h3></center>
        </div>
    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 ">
      <div class="card mb-4">
        <div class="img"> <img src="https://res.cloudinary.com/upwork-cloud/image/upload/c_scale,w_1000/v1697730249/catalog/1715018213555331072/vkurl6vk1z1rmjzljrbo.jpg"> </div>
        <div class="top-text pt-2">
          <div class="title">
            <h3>HTML Advance</h3>
          </div>
           
        </div>
        <div class="bottom-text pt-2">
          <div class="title">
             <h3>HTML Advance</h3>
          </div>
           
          <div class="watch"> <a href="https://youtu.be/XhqEuyWjbdo" class="btn-w" rel="prettyPhoto"><i class="fad fa-play"></i> Watch</a> <a href="#" class="share"><i class="fad fa-share-alt"></i></a> </div>
        </div>
      </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 ">
      <div class="card mb-4">
        <div class="img"> <img src="https://img-c.udemycdn.com/course/240x135/5563450_21de.jpg"> </div>
        <div class="top-text pt-2">
          <div class="title">
             <h3>HTML Advance</h3>
          </div>
           
        </div>
        <div class="bottom-text pt-2">
          <div class="title">
            <h3>HTML Advance</h3>
          </div>
           
          <div class="watch"> <a href="https://youtu.be/GE2qnXC8UMg" class="btn-w" rel="prettyPhoto"><i class="fad fa-play"></i> Watch</a> <a href="#" class="share"><i class="fad fa-share-alt"></i></a> </div>
        </div>
      </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 ">
      <div class="card mb-4">
        <div class="img"> <img src="https://media.istockphoto.com/id/1305858021/vector/programmer-male-character-working-on-computer-and-tablet-pc-coding-creating-new-website.jpg?s=612x612&w=0&k=20&c=EpgUuevlDQEi5-rKSWmCsQnyuYBgSQWRGevJM-srT0A="> </div>
        <div class="top-text pt-2">
          <div class="title">
             <h3>HTML Advance</h3>
          </div>
           
        </div>
        <div class="bottom-text pt-2">
          <div class="title">
             <h3>HTML Advance</h3>
          </div>
           
          <div class="watch"> <a href="https://youtu.be/D-h8L5hgW-w" class="btn-w" rel="prettyPhoto"><i class="fad fa-play"></i> Watch</a> <a href="#" class="share"><i class="fad fa-share-alt"></i></a> </div>
        </div>
      </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 ">
      <div class="card mb-4">
        <div class="img"> <img src="https://cdn.hashnode.com/res/hashnode/image/upload/v1633161082038/Qy7kUn7I0.png"> </div>
        <div class="top-text pt-2">
          <div class="title">
             <h3>HTML Advance</h3>
          </div>
          
        </div>
        <div class="bottom-text pt-2">
          <div class="title">
            <h3>HTML Advance</h3>
          </div>
           
          <div class="watch"> <a href="https://youtu.be/uCdliQCk4lE" class="btn-w" rel="prettyPhoto"><i class="fad fa-play"></i> Watch</a> <a href="#" class="share"><i class="fad fa-share-alt"></i></a> </div>
        </div>
      </div>
    </div>
  </div>
    
</div>
  <script src="js/jquery-1.6.1.min.js" type="text/javascript" charset="utf-8"></script> 
<script src="js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" charset="utf-8">
  $(document).ready(function(){
    $("a[rel^='prettyPhoto']").prettyPhoto();
  });
</script>

 
			</div>
		</div>
	</div>
</div>

<script type="text/javascript" src="js/php.js"></script>







</body>
</html>