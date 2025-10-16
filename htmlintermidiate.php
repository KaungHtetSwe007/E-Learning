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
			<h1>Html & CSS Intermidiate course</h1>
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
    			$query2 = "SELECT * FROM files WHERE type='htmlintermediate'";
    			$run2 = mysqli_query($conn,$query2);           
    			while($rows = mysqli_fetch_assoc($run2)){
    		?>
					<div class="pcard" style="--clr:#009688">
						<div class="imgBx">
							<img src="https://www.chicagocomputerclasses.com/wp-content/uploads/2014/04/html5-css31.png">
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
        <div class="img"> <img src="https://media.istockphoto.com/id/1440822225/vector/developing-programming-and-coding-technologies-and-engineering-development-programmer-or.jpg?s=612x612&w=0&k=20&c=wGSjPdM6n5yJ-53tihLml5QUsT-ugckYYV1sWvY7dJE="> </div>
        <div class="top-text pt-2">
          <div class="title">
            <h3>HTML CSS Tutorials</h3>
          </div>
          <p><span>HTML</span> <span>CSS</span> <span>Javascript</span></p>
        </div>
        <div class="bottom-text pt-2">
          <div class="title">
            <h3>HTML CSS Tutorials</h3>
          </div>
          <p><span>HTML</span> <span>CSS</span> <span>Javascript</span></p>
          <div class="watch"> <a href="https://youtu.be/kyj9zSrUZB4?list=RDkyj9zSrUZB4" class="btn-w" rel="prettyPhoto"><i class="fad fa-play"></i> Watch</a> <a href="#" class="share"><i class="fad fa-share-alt"></i></a> </div>
        </div>
      </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 ">
      <div class="card mb-4">
        <div class="img"> <img src="https://hamsa.life/wp-content/uploads/2020/06/web_development.jpg"> </div>
        <div class="top-text pt-2">
          <div class="title">
            <h3>HTML Intermidiate</h3>
          </div>
        </div>
        <div class="bottom-text pt-2">
          <div class="title">
             <h3>HTML Intermidiate</h3>
          </div>
         
          <div class="watch"> <a href="https://www.youtube.com/watch?v=8eX-GHwd6ds" class="btn-w" rel="prettyPhoto"><i class="fad fa-play"></i> Watch</a> <a href="#" class="share"><i class="fad fa-share-alt"></i></a> </div>
        </div>
      </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 ">
      <div class="card mb-4">
        <div class="img"> <img src="https://fiverr-res.cloudinary.com/images/q_auto,f_auto/gigs/337455116/original/c7fe8c50694b8c7bda6c1f99857472bac5044828/do-front-end-web-development-html-css-javascript-bootstrap.png"> </div>
        <div class="top-text pt-2">
          <div class="title">
             <h3>HTML Intermidiate</h3>
          </div>
         
        </div>
        <div class="bottom-text pt-2">
          <div class="title">
            <h3>HTML Intermidiate</h3>
          </div>
          
          <div class="watch"> <a href="https://www.youtube.com/watch?v=Lo_6bp6ApvE" class="btn-w" rel="prettyPhoto"><i class="fad fa-play"></i> Watch</a> <a href="#" class="share"><i class="fad fa-share-alt"></i></a> </div>
        </div>
      </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 ">
      <div class="card mb-4">
        <div class="img"> <img src="https://fiverr-res.cloudinary.com/images/t_main1,q_auto,f_auto,q_auto,f_auto/gigs/256054436/original/846a76513f7f1c4daf4b85f94e874c01625e46f7/create-your-website-in-its-entirety-in-html-css-and-javascript.jpg"> </div>
        <div class="top-text pt-2">
          <div class="title">
            <h3>HTML Intermidiate</h3>
          </div>
          
        </div>
        <div class="bottom-text pt-2">
          <div class="title">
            <h3>HTML Intermidiate</h3>
          </div>
           
          <div class="watch"> <a href="https://www.youtube.com/watch?v=Y0REQPbxrV4" class="btn-w" rel="prettyPhoto"><i class="fad fa-play"></i> Watch</a> <a href="#" class="share"><i class="fad fa-share-alt"></i></a> </div>
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