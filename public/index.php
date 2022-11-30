<?php

?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<html lang="en" class="no-js">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Aplikasi Inventaris Aset</title>
		<meta name="description" content="HTML5/CSS3" />
		<meta name="keywords" content="agency" />
		<meta name="author" content="" />

		<script src="<?=host().'/public/assets/js/modernizr.custom.js'?>"></script>
		<link href="<?=host().'/public/assets/css/bootstrap.min.css'?>" rel="stylesheet">
		<link href="<?=host().'/public/assets/css/jquery.fancybox.css'?>" rel="stylesheet">
		<link href="<?=host().'/public/assets/css/flickity.css'?>" rel="stylesheet" >
		<link href="<?=host().'/public/assets/css/animate.css'?>" rel="stylesheet">
		<!--<link href="<?=host().'/public/assets/plugins/fontawesome/css/fontawesome.min.css'?>" rel="stylesheet">-->
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
		<link href='//fonts.googleapis.com/css?family=Nunito:400,300,700' rel='stylesheet' type='text/css'>
		<link href="<?=host().'/public/assets/css/styles.css'?>" rel="stylesheet">
		<link href="<?=host().'/public/assets/css/queries.css'?>" rel="stylesheet">
		<!-- Facebook and Twitter integration -->
		<meta property="og:title" content=""/>
		<meta property="og:image" content=""/>
		<meta property="og:url" content=""/>
		<meta property="og:site_name" content=""/>
		<meta property="og:description" content=""/>
		<meta name="twitter:title" content="" />
		<meta name="twitter:image" content="" />
		<meta name="twitter:url" content="" />
		<meta name="twitter:card" content="" />
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<!--[if lt IE 7]>
		<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->
		<!-- open/close -->
		<header>
			<section class="hero">
				<div class="texture-overlay"></div>
				<div class="container">
					<div class="row nav-wrapper">
						<div class="col-md-6 col-sm-6 col-xs-6 text-left">
							<a href="#"><img src="<?=host().'/public/assets/images/logo-white.png'?>" alt="Boxify Logo"></a>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-6 text-right navicon">
							<p>MENU</p><a id="trigger-overlay" class="nav_slide_button nav-toggle" href="#"><span></span></a>
						</div>
					</div>
					<div class="row hero-content">
						<div class="col-md-12">
							<h1 class="animated fadeInDown">Inventaris Aset Pemerintah Kelurahan Cibeureum Hilir Kota Sukabumi</h1>
							<a href="/dashboard" class="use-btn animated fadeInUp"><i class="fa fa-sign-in"></i> Masuk</a> <a href="#about" class="learn-btn animated fadeInUp">Pelajari Lebih Lanjut <i class="fa fa-arrow-down"></i></a>
						</div>
					</div>
				</div>
			</section>
		</header>
		<section class="video" id="about">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<h1><a href="//www.youtube.com/embed/lTSjx2ynq_0?autoplay=1&wmode=opaque&fs=1" class="youtube-media"><i class="fa fa-play-circle-o"></i> Tonton Video</a></h1>
					</div>
				</div>
			</div>
		</section>
		<section class="features-intro">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-6 nopadding features-intro-img">
						<div class="features-bg">
							<div class="texture-overlay"></div>
							<div class="features-img wp1">
								<img src="<?=host().'/public/assets/images/html5-logo.png'?>" alt="HTML5 Logo">
							</div>
						</div>
					</div>
					<div class="col-md-6 nopadding">
						<div class="features-slider">
								<ul class="slides" id="featuresSlider">
									<li>
										<h1>Pembukuan</h1>
										<p>Pembukuan, yang terdiri atas kegiatan pendaftaran dan pencatatan BMK ke dalam Daftar Barang.</p>
										<p><a href="#features" class="arrow-btn">Temukan info selengkapnya! <i class="fa fa-long-arrow-right"></i></a></p>
									</li>
									<li>
										<h1>Inventarisasi</h1>
										<p>Inventarisasi, yang terdiri atas kegiatan pendataan, pencatatan, dan pelaporan hasil pendataan BMK.</p>
										<p><a href="#" class="arrow-btn">Temukan info selengkapnya! <i class="fa fa-long-arrow-right"></i></a></p>
									</li>
									<li>
										<h1>Pelaporan</h1>
										<p>Pelaporan, yang terdiri atas kegiatan penyusunan dan penyampaian data dan informasi BMK secara semsteran dan tahunan.</p>
										<p><a href="#" class="arrow-btn">Temukan info selengkapnya! <i class="fa fa-long-arrow-right"></i></a></p>
									</li>
								</ul>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="features-list" id="features">
			<div class="container">
				<div class="row">
					<div class="col-md-12">

						<div class="col-md-4 feature-1 wp2">
							<div class="feature-icon">
								<i class="fa fa-desktop"></i>
							</div>
							<div class="feature-content">
								<h1>Evaluasi</h1>
								<p>Sistem yang sedang berjalan ini masih di lakukan secara <a href="#">manual</a>, sehingga peneliti rasa adanya ketidak praktisan. </p>
								<a href="#" class="read-more-btn">Selengkapnya <i class="fa fa-chevron-circle-right"></i></a>
							</div>
						</div>
						<div class="col-md-4 feature-2 wp2 delay-05s">
							<div class="feature-icon">
								<i class="fa fa-flash"></i>
							</div>
							<div class="feature-content">
								<h1>Solusi</h1>
								<p>Membuat aplikasi yang dapat memberikan informasi kepada pegawai dan pimpinan.</p>
								<a href="#" class="read-more-btn">Selengkapnya <i class="fa fa-chevron-circle-right"></i></a>
							</div>
						</div>
						<div class="col-md-4 feature-3 wp2 delay-1s">
							<div class="feature-icon">
								<i class="fa fa-heart"></i>
							</div>
							<div class="feature-content">
								<h1>Solusi #2</h1>
								<p>Suatu aplikasi yang dapat mempermudah dalam proses aplikasi inventarisasi aset pemerintah daerah.</p>
								<a href="#" class="read-more-btn">Selengkapnya <i class="fa fa-chevron-circle-right"></i></a>
							</div>
						</div>

					</div>
				</div>
			</div>
		</section>
		<section class="showcase">
			<div class="showcase-wrap">
				<div class="texture-overlay"></div>
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<div class="device wp3">
								<div class="device-content">
									<div class="showcase-slider">
										<ul class="slides" id="showcaseSlider">
											<li>
												<img src="<?=host().'/public/assets/images/screen1.jpg'?>" alt="Device Content Image">
											</li>
											<li>
												<img src="<?=host().'/public/assets/images/screen2.jpg'?>" alt="Device Content Image">
											</li>
											<li>
												<img src="<?=host().'/public/assets/images/screen3.jpg'?>" alt="Device Content Image">
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<h1>Layanan Kelurahan</h1>
							<p>Kelurahan merupakan ujung tombak dari pemerintahan, khususnya pemerintah daerah yang secara langsung memberikan pelayanan kepada masyarakat. Untuk itu kelurahan dituntut bekerja secara prima dalam memberikan pelayanan kepada masyarakat mengacu pada pedoman penyelenggaraan pelayanan publik yang baik.</p>
							<blockquote class="team-quote">
								<div class="avatar"><img src="<?=host().'/public/assets/images/avatar.png'?>" alt="User Avatar"></div>
								<p>"Aplikasi yang bagus untuk menangani pelayanan publik menjadi lebih cepat dan mudah digunakan kapanpun, dimanapun." - Ahmad Abdullah</p>
								<div class="logo-quote">
									<a href="#"><img src="<?=host().'/public/assets/images/codrops-logo.png'?>" alt="Codrops Logo"></a>
								</div>
							</blockquote>
							<a href="#" class="download-btn">Download! <i class="fa fa-download"></i></a>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="screenshots-intro">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1>Aset dan Inventaris</h1>
						<p>Berdasarkan Peraturan Pemerintah Nomor 27 Tahun 2014 tentang Pengelolaan Barang Milik Kelurahan/ Daerah bahwa yang dimaksud dengan Barang Milik Kelurahan adalah semua barang yang dibeli atau diperoleh atas beban Anggaran Pendapatan dan Belanja Kelurahan atau berasal dari perolehan lainnya yang sah.</p>
						<p><a href="#screenshots" class="arrow-btn">Lihat daftar dibawah! <i class="fa fa-long-arrow-right"></i></a></p>
					</div>
				</div>
			</div>
		</section>
		<section class="screenshots" id="screenshots">
			<div class="container-fluid">
				<div class="row">
					<ul class="grid">
						<li>
							<figure>
								<img src="<?=host().'/public/assets/images/01-screenshot.jpg'?>" alt="Screenshot 01">
								<figcaption>
								<div class="caption-content">
									<a href="<?=host().'/public/assets/images/large/01.jpg'?>" class="single_image">
										<i class="fa fa-search"></i><br>
										<p>Perencanaan kebutuhan dan penganggaran</p>
									</a>
								</div>
								</figcaption>
							</figure>
						</li>
						<li>
							<figure>
								<img src="<?=host().'/public/assets/images/02-screenshot.jpg'?>" alt="Screenshot 01">
								<figcaption>
								<div class="caption-content">
									<a href="<?=host().'/public/assets/images/large/02.jpg'?>" class="single_image">
										<i class="fa fa-search"></i><br>
										<p>Pengadaan</p>
									</a>
								</div>
								</figcaption>
							</figure>
						</li>
						<li>
							<figure>
								<img src="<?=host().'/public/assets/images/03-screenshot.jpg'?>" alt="Screenshot 01">
								<figcaption>
								<div class="caption-content">
									<a href="<?=host().'/public/assets/images/large/03.jpg'?>" class="single_image">
										<i class="fa fa-search"></i><br>
										<p>Penggunaan</p>
									</a>
								</div>
								</figcaption>
							</figure>
						</li>
						<li>
							<figure>
								<img src="<?=host().'/public/assets/images/04-screenshot.jpg'?>" alt="Screenshot 01">
								<figcaption>
								<div class="caption-content">
									<a href="<?=host().'/public/assets/images/large/04.jpg'?>" class="single_image">
										<i class="fa fa-search"></i><br>
										<p>Pemanfaatan</p>
									</a>
								</div>
								</figcaption>
							</figure>
						</li>
					</ul>
				</div>
				<div class="row">
					<ul class="grid">
						<li>
							<figure>
								<img src="<?=host().'/public/assets/images/05-screenshot.jpg'?>" alt="Screenshot 01">
								<figcaption>
								<div class="caption-content">
									<a href="<?=host().'/public/assets/images/large/05.jpg'?>" class="single_image">
										<i class="fa fa-search"></i><br>
										<p>Pengamanan dan pemeliharaan</p>
									</a>
								</div>
								</figcaption>
							</figure>
						</li>
						<li>
							<figure>
								<img src="<?=host().'/public/assets/images/06-screenshot.jpg'?>" alt="Screenshot 01">
								<figcaption>
								<div class="caption-content">
									<a href="<?=host().'/public/assets/images/large/06.jpg'?>" class="single_image">
										<i class="fa fa-search"></i><br>
										<p>Penilaian</p>
									</a>
								</div>
								</figcaption>
							</figure>
						</li>
						<li>
							<figure>
								<img src="<?=host().'/public/assets/images/07-screenshot.jpg'?>" alt="Screenshot 01">
								<figcaption>
								<div class="caption-content">
									<a href="<?=host().'/public/assets/images/large/07.jpg'?>" class="single_image">
										<i class="fa fa-search"></i><br>
										<p>Pemindahtanganan</p>
									</a>
								</div>
								</figcaption>
							</figure>
						</li>
						<li>
							<figure>
								<img src="<?=host().'/public/assets/images/08-screenshot.jpg'?>" alt="Screenshot 01">
								<figcaption>
								<div class="caption-content">
									<a href="<?=host().'/public/assets/images/large/08.jpg'?>" class="single_image">
										<i class="fa fa-search"></i><br>
										<p>Penghapusan</p>
									</a>
								</div>
								</figcaption>
							</figure>
						</li>
					</ul>
				</div>
			</div>
		</section>
		<section class="download" id="download">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center wp4">
						<h1>Butuh Informasi Lebih Lanjut?</h1>
						<a href="#" class="download-btn"><i class="fa fa-phone"></i> Kontak kami</a>
					</div>
				</div>
			</div>
		</section>
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-md-5">
						<h1 class="footer-logo">
						<img src="<?=host().'/public/assets/images/logo-blue.png'?>" alt="Footer Logo Blue">
						</h1>
						<p>Copyright &copy; <?=date('Y')?> <a href="http://www.facebook.com/"><em>Alfian Nurfaizi</em></a></p>
					</div>
					<div class="col-md-7">
						<ul class="footer-nav">
							<li><a href="#about">Sejarah</a></li>
							<li><a href="#features">Layanan</a></li>
							<li><a href="#screenshots">Dokumentasi</a></li>
							<li><a href="#download">Kontak</a></li>
						</ul>
					</div>
				</div>
			</div>
		</footer>
		<div class="overlay overlay-boxify">
			<nav>
				<ul>
					<li><a href="/dashboard"><i class="fa fa-sign-in"></i>Masuk</a></li>
				</ul>
				<ul>
					<li><a href="#about"><i class="fa fa-globe"></i>Sejarah</a></li>
					<li><a href="#features"><i class="fa fa-headphones"></i>Layanan</a></li>
				</ul>
				<ul>
					<li><a href="#screenshots"><i class="fa fa-book"></i>Dokumentasi</a></li>
					<li><a href="#download"><i class="fa fa-phone"></i>Kontak</a></li>
				</ul>
			</nav>
		</div>
		
		<script src="<?=host().'/public/assets/js/min/toucheffects-min.js'?>"></script>
		<script src="<?=host().'/public/assets/js/jquery-1.11.0.min.js'?>"></script>
		<script src="<?=host().'/public/assets/js/flickity.pkgd.min.js'?>"></script>
		<script src="<?=host().'/public/assets/js/jquery.fancybox.pack.js'?>"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="<?=host().'/public/assets/js/retina.js'?>"></script>
		<script src="<?=host().'/public/assets/js/waypoints.min.js'?>"></script>
		<script src="<?=host().'/public/assets/js/bootstrap.min.js'?>"></script>
		<script src="<?=host().'/public/assets/js/min/scripts-min.js'?>"></script>
	</body>
</html>
