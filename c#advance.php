<!DOCTYPE html>
<html>
<head>
	<title>Responsive Tabs</title>
  
	<link rel="stylesheet" type="text/css" href="css/php.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

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


</head>
<body>



<div class="wrapper">
	<div class="tabs_container">
		<div class="tabs_header">
			<h1>C# Advance course</h1>
			<ul>
        
				<li class="active">
					<span class="icon"><i class="fas fa-newspaper"></i></span>
					<span class="item">PDF files</span>
				</li>
				<li>
					<span class="icon"><i class="fas fa-calendar-week"></i></span>
					<span class="item">Videos</span>
				</li>
        <li>
          <span class="icon"><i class="fas fa-calendar-week"></i></span>
          <span class="item"><a style="text-decoration: none; color: white;" href="home.php">Home</a></span>
        </li>
			</ul>
		</div>
		<div class="tabs_wrapper">
			<div class="tabs_content" style="display: block;">
				<div class="container">
						<?php
 				$conn = mysqli_connect('localhost','root','','gp4_project');
    			$query2 = "SELECT * FROM files WHERE type='c#advance'";
    			$run2 = mysqli_query($conn,$query2);           
    			while($rows = mysqli_fetch_assoc($run2)){
    		?>
					<div class="pcard" style="--clr:#009688">
						<div class="imgBx">
							<img src="https://cdn.pixabay.com/photo/2016/09/14/08/28/web-1668931_960_720.jpg">
						</div>
						<div class="content">
						<h2>PHP</h2>
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
    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 ">
      <div class="card mb-4">
        <div class="img"> <img src="img/HTMLCSS.jpg"> </div>
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
        <div class="img"> <img src="img/web-designing.jpg"> </div>
        <div class="top-text pt-2">
          <div class="title">
            <h3>Web Designing</h3>
          </div>
          <p><span>HTML</span> <span>CSS</span> <span>Javascript</span></p>
        </div>
        <div class="bottom-text pt-2">
          <div class="title">
            <h3>Web Designing</h3>
          </div>
          <p><span>HTML</span> <span>CSS</span> <span>Javascript</span></p>
          <div class="watch"> <a href="https://www.youtube.com/watch?v=8eX-GHwd6ds" class="btn-w" rel="prettyPhoto"><i class="fad fa-play"></i> Watch</a> <a href="#" class="share"><i class="fad fa-share-alt"></i></a> </div>
        </div>
      </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 ">
      <div class="card mb-4">
        <div class="img"> <img src="img/web-development.jpg"> </div>
        <div class="top-text pt-2">
          <div class="title">
            <h3>Web Development</h3>
          </div>
          <p><span>HTML</span> <span>CSS</span> <span>Javascript</span></p>
        </div>
        <div class="bottom-text pt-2">
          <div class="title">
            <h3>Web Development</h3>
          </div>
          <p><span>HTML</span> <span>CSS</span> <span>Javascript</span></p>
          <div class="watch"> <a href="https://www.youtube.com/watch?v=Lo_6bp6ApvE" class="btn-w" rel="prettyPhoto"><i class="fad fa-play"></i> Watch</a> <a href="#" class="share"><i class="fad fa-share-alt"></i></a> </div>
        </div>
      </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 ">
      <div class="card mb-4">
        <div class="img"> <img src="img/wordpress.jpg"> </div>
        <div class="top-text pt-2">
          <div class="title">
            <h3>Wordpress</h3>
          </div>
          <p><span>HTML</span> <span>CSS</span> <span>Javascript</span></p>
        </div>
        <div class="bottom-text pt-2">
          <div class="title">
            <h3>Wordpress</h3>
          </div>
          <p><span>HTML</span> <span>CSS</span> <span>Javascript</span></p>
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



<div class="container">
  				
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 ">
      <div class="card mb-4">
        <div class="img"> <img src="img/HTMLCSS.jpg"> </div>
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
        <div class="img"> <img src="img/web-designing.jpg"> </div>
        <div class="top-text pt-2">
          <div class="title">
            <h3>Web Designing</h3>
          </div>
          <p><span>HTML</span> <span>CSS</span> <span>Javascript</span></p>
        </div>
        <div class="bottom-text pt-2">
          <div class="title">
            <h3>Web Designing</h3>
          </div>
          <p><span>HTML</span> <span>CSS</span> <span>Javascript</span></p>
          <div class="watch"> <a href="https://www.youtube.com/watch?v=8eX-GHwd6ds" class="btn-w" rel="prettyPhoto"><i class="fad fa-play"></i> Watch</a> <a href="#" class="share"><i class="fad fa-share-alt"></i></a> </div>
        </div>
      </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 ">
      <div class="card mb-4">
        <div class="img"> <img src="img/web-development.jpg"> </div>
        <div class="top-text pt-2">
          <div class="title">
            <h3>Web Development</h3>
          </div>
          <p><span>HTML</span> <span>CSS</span> <span>Javascript</span></p>
        </div>
        <div class="bottom-text pt-2">
          <div class="title">
            <h3>Web Development</h3>
          </div>
          <p><span>HTML</span> <span>CSS</span> <span>Javascript</span></p>
          <div class="watch"> <a href="https://www.youtube.com/watch?v=Lo_6bp6ApvE" class="btn-w" rel="prettyPhoto"><i class="fad fa-play"></i> Watch</a> <a href="#" class="share"><i class="fad fa-share-alt"></i></a> </div>
        </div>
      </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 ">
      <div class="card mb-4">
        <div class="img"> <img src="img/wordpress.jpg"> </div>
        <div class="top-text pt-2">
          <div class="title">
            <h3>Wordpress</h3>
          </div>
          <p><span>HTML</span> <span>CSS</span> <span>Javascript</span></p>
        </div>
        <div class="bottom-text pt-2">
          <div class="title">
            <h3>Wordpress</h3>
          </div>
          <p><span>HTML</span> <span>CSS</span> <span>Javascript</span></p>
          <div class="watch"> <a href="https://www.youtube.com/watch?v=Y0REQPbxrV4" class="btn-w" rel="prettyPhoto"><i class="fad fa-play"></i> Watch</a> <a href="#" class="share"><i class="fad fa-share-alt"></i></a> </div>
        </div>
      </div>
    </div>
  </div>
    <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
      <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2838445346052732"
     crossorigin="anonymous"></script>
<ins class="adsbygoogle"
     style="display:block; text-align:center;"
     data-ad-layout="in-article"
     data-ad-format="fluid"
     data-ad-client="ca-pub-2838445346052732"
     data-ad-slot="2453908410"></ins>
     <script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
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