
<?php

        $host = 'localhost';
        $user = 'root';
        $pass = '';
        $dbase = 'project_kng';

        $con = mysqli_connect($host, $user, $pass, $dbase)
        OR DIE ("salah");

        mysqli_select_db($con,$dbase)
        OR DIE ("salah");

        
        
?>
<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>FEBRI YUDILA | HOME</title>
  <link rel="stylesheet" href="index.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/flexslider.css">
<link rel="stylesheet" href="css/jquery.fancybox.css">
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/responsive.css">
<link rel="stylesheet" href="css/font-icon.css">
<link rel="stylesheet" href="css/animate.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
</head>
<body>
<section>
  <header id="header">
    <div class="header-content clearfix"> <a class="logo" href="http://localhost/fy123/index.php?halaman=dashboard">KUNINGANKU</a>
      <nav class="navigation" role="navigation">
      <ul class="primary-nav">
          <li><a href="index.php?halaman=dashboard">Beranda</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Wisata <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                       <li>
                            <a style="color:grey" href="#index.php?halaman=wisataalam">Wisata Alam</a>
                       </li>
                       <li>
                            <a style="color:grey" href="#index.php?halaman=wisatasejarah">Wisata Sejarah</a>
                       </li>
                       <li>
                            <a style="color:grey" href="#index.php?halaman=wisatapendidikan">Wisata Pendidikan</a>
                       </li>
                    </ul>
              </li>
          <li><a href="#">Artikel</a></li>
          <li><a href="#">Galeri</a></li>
          <li><a href="index.php?halaman=usraktf">User Aktif</a></li>

          
          <?php 
                        if(!isset($_SESSION['is_login'])){
                    ?>
                    <li>
                        <a href="login.php">Login</a>
                    </li>
                    <?php }else{?>
                    <li>
                    <a href="akunuser.php?logoutSubmit=1" class="logout">Logout (<?= $_SESSION['namauser'];?>)</a>
                    </li><?php }?>
        </ul>
      </nav>
      <a href="#" class="nav-toggle">Menu<span></span></a> </div>
  </header>
</section>
    <!-- MAIN CONTENT -->
    <?php
$hal = $_GET['halaman'];
switch($hal) {
  case 'dashboard':
    include "dashboard.php";
    break;

    case 'input':
      include "input.php";
      break;
      
        case 'usraktf':
          include "usraktf.php";
          break;

  default:

?>
        <div class="card card-primary card-outline">
          <div class="card-body">
        <h1 class="card-text card-danger">NOT FOUND</h1>
      </div>
  </div>
<?php
break;
}
?>

  
  <!-- MAIN CONTENT -->



<!-- FOOTER -->

<footer class="footer-distributed">

			<div class="footer-left">
          <img src="https://www.blogger.com/img/blogger-logotype-color-black-1x.png">
				<h3>Kuni<span>nganKu</span></h3>

				<p class="footer-company-name">© PTIK 4B.</p>
			</div>

			<div class="footer-center">
				<div>
					<i class="fa fa-map-marker"></i>
					  <p><span>Jalan jalan,
						 01. kuningan</span>
						Jawa barat</p>
				</div>

				<div>
					<i class="fa fa-phone"></i>
					<p>0838132456</p>
				</div>
				
			</div>
			<div class="footer-right">
				<p class="footer-company-about">
					<span>About the company</span>
					We Are Student In STKIP MUHAMMADIYAH KUNINGAN</p>
	
			</div>
		</footer>


    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.flexslider-min.js"></script> 
<script src="js/jquery.fancybox.pack.js"></script> 
<script src="js/retina.min.js"></script> 
<script src="js/modernizr.js"></script> 
<script src="js/main.js"></script> 
<script type="text/javascript" src="js/jquery.contact.js"></script>


<body>

</html>