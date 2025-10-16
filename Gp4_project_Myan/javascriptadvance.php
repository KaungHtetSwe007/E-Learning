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
			<h1>Javascript Advance သင်ခန်းစာများ</h1>
			<ul>
        
				<li class="active">
					<span class="icon"><i class="fa-solid fa-file"></i></span>
					<span class="item">PDF ဖိုင်များ</span>
				</li>
				<li>
					<span class="icon"><i class="fa-brands fa-youtube"></i></span>
					<span class="item">ဗီဒီယိုများ</span>
				</li>
        <li>
          <span class="icon"><a style="text-decoration: none; color: white;" href="javascript.php"><i class="fa-solid fa-house-laptop"></i></a></span>
          <span class="item"><a style="text-decoration: none; color: white;" href="javascript.php">ပင်မစာမျက်နှာ</a></span>
        </li>
			</ul>
		</div>
		<div class="tabs_wrapper">
			<div class="tabs_content" style="display: block;">
        <div id="cc">
          <center><h3 style="color: #3586ff;">သင်လေ့လာလိုလျှင် ဒီနေရာမှာ file များကို ဒေါင်းလုတ် ရယူပြီးလေ့လာနိုင်ပါတယ်</h3></center>
        </div>
				<div class="container">
						<?php
 				$conn = mysqli_connect('localhost','root','','gp4_project');
    			$query2 = "SELECT * FROM files WHERE type='jsadvance'";
    			$run2 = mysqli_query($conn,$query2);           
    			while($rows = mysqli_fetch_assoc($run2)){
    		?>
					<div class="pcard" style="--clr:#009688">
						<div class="imgBx">
							<img src="https://images.pexels.com/photos/301943/pexels-photo-301943.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1">
						</div>
						<div class="content">
						<h2><?php echo $rows['type'] ?></h2>
							<p><?php echo $rows['name'] ?></p>
						<a href="download.php?file=<?php echo $rows['file'] ?>">ဒေါင်းလုဒ်ဆွဲရန်</a><br>
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
      <center><h3 style="color: #3586ff; margin-top: -60px;">သင်လေ့လာလိုလျှင် ဒီနေရာမှာ video များကို ကြည့်ရှူ့လေ့လာနိုင်ပါတယ်</h3></center>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 ">
      <div class="card mb-4">
        <div class="img"> <img src="https://qph.cf2.quoracdn.net/main-qimg-9fe92fae95fa545281464af09b077d32"> </div>
        <div class="top-text pt-2">
          <div class="title">
            <h3>Javascript Advance ဗီဒီယိုများ</h3>
          </div>
           
        </div>
        <div class="bottom-text pt-2">
          <div class="title">
            <h3>Javascript Advance ဗီဒီယိုများ</h3>
          </div>
           
          <div class="watch"> <a href="https://youtu.be/R9I85RhI7Cg" class="btn-w" rel="prettyPhoto"><i class="fad fa-play"></i> ကြည့်ရန်</a> <a href="#" class="share"><i class="fad fa-share-alt"></i></a> </div>
        </div>
      </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 ">
      <div class="card mb-4">
        <div class="img"> <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEiMaHnuMUOGnH8F-xSipKVnBTyLTwbG3ByAamfly2_fpxLV-SQ2liAYZEG_u31mgKSqPo-oZxn-Mu6nJEyeyPXJKD2v8TQCbRcCCA4fafuopoXIOVOUUaklw8F2EMmV-7yZA-VEqFII_viiyfYht4DWRLEyhJ6Qtb1y-ZJqeeZhFtXldMaD4CytmQJG/s1200/Capacitacion_y_gestion_del_conocimiento.gif"> </div>
        <div class="top-text pt-2">
          <div class="title">
<h3>Javascript Advance ဗီဒီယိုများ</h3>
          </div>
           
        </div>
        <div class="bottom-text pt-2">
          <div class="title">
            <h3>Javascript Advance ဗီဒီယိုများ</h3>
          </div>
           
          <div class="watch"> <a href="https://youtu.be/l5IgdXi2UvY" class="btn-w" rel="prettyPhoto"><i class="fad fa-play"></i> ကြည့်ရန်</a> <a href="#" class="share"><i class="fad fa-share-alt"></i></a> </div>
        </div>
      </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 ">
      <div class="card mb-4">
        <div class="img"> <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcScCFnmHqTl4Kayepx3xEKr3TnB_uUlraG7sbdaZYrV5eFhF_GRLwqBW8mnof_iKazFkkU&usqp=CAU"> </div>
        <div class="top-text pt-2">
          <div class="title">
            <h3>Javascript Advance ဗီဒီယိုများ</h3>
          </div>
           
        </div>
        <div class="bottom-text pt-2">
          <div class="title">
           <h3>Javascript Advance ဗီဒီယိုများ</h3>
          </div>
          
          <div class="watch"> <a href="https://youtu.be/_izCojOyiag" class="btn-w" rel="prettyPhoto"><i class="fad fa-play"></i> ကြည့်ရန်</a> <a href="#" class="share"><i class="fad fa-share-alt"></i></a> </div>
        </div>
      </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 ">
      <div class="card mb-4">
        <div class="img"> <img src="https://img.genial.ly/6030e9d7aa4af70539d149c5/04fe23ec-d787-46f7-bccb-edad4c61f84b.gif"> </div>
        <div class="top-text pt-2">
          <div class="title">
            <h3>Javascript Advance ဗီဒီယိုများ</h3>
          </div>
           
        </div>
        <div class="bottom-text pt-2">
          <div class="title">
            <h3>Javascript Advance ဗီဒီယိုများ</h3>
          </div>
           
          <div class="watch"> <a href="https://youtu.be/ks4MFTHLfyg" class="btn-w" rel="prettyPhoto"><i class="fad fa-play"></i> ကြည့်ရန်</a> <a href="#" class="share"><i class="fad fa-share-alt"></i></a> </div>
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