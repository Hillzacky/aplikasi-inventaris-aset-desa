<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>Aplikasi Inventaris Aset</title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="description" content="Developers">
    <meta name="author" content="Alex">    
    <link rel="shortcut icon" href="favicon.ico"> 
    
    <!-- FontAwesome JS-->
    <script defer src="<?=host().'/public/assets/plugins/fontawesome/js/all.min.js'?>"></script>
    
    <!-- App CSS -->  
    <link id="theme-style" rel="stylesheet" href="<?=host().'/public/assets/css/portal.css'?>">

</head> 

<body class="app app-login p-0">    	
    <div class="row g-0 app-auth-wrapper">
	    <div class="col-12 col-md-7 col-lg-6 auth-main-col text-center p-5">
		    <div class="d-flex flex-column align-content-end">
			    <div class="app-auth-body mx-auto">	
				    <div class="app-auth-branding mb-4"><a class="app-logo" href="index.html"><img class="logo-icon me-2" src="<?=host().'/public/assets/images/app-logo.svg'?>" alt="logo"></a></div>
					<h2 class="auth-heading text-center mb-5">Masuk ke Aplikasi</h2>
			        <div class="auth-form-container text-start">
						<form class="auth-form login-form" method="post" action="/proses/auth/login">         
							<div class="email mb-3">
								<label class="sr-only" for="signin-username">Nama Pengguna</label>
								<input id="signin-username" name="signin-username" type="text" class="form-control signin-username" placeholder="Username" required="required">
							</div><!--//form-group-->
							<div class="password mb-3">
								<label class="sr-only" for="signin-password">Kata Sandi</label>
								<input id="signin-password" name="signin-password" type="password" class="form-control signin-password" placeholder="Password" required="required">
								<div class="extra mt-3 row justify-content-between">
									<div class="col-6">
										<div class="form-check">
											<input class="form-check-input" type="checkbox" value="" id="RememberPassword">
											<label class="form-check-label" for="RememberPassword">
											Ingatkan Saya
											</label>
										</div>
									</div><!--//col-6-->
									<div class="col-6">
										<div class="forgot-password text-end">
											<a href="/reset-password">Lupa Katasandi?</a>
										</div>
									</div><!--//col-6-->
								</div><!--//extra-->
							</div><!--//form-group-->
							<div class="text-center">
								<button type="submit" class="btn app-btn-primary w-100 theme-btn mx-auto">Masuk</button>
							</div>
						</form>
						
						<div class="auth-option text-center pt-5">Belum ada akun? Daftar <a class="text-link" href="/daftar" >disini</a>.</div>
					</div><!--//auth-form-container-->	

			    </div><!--//auth-body-->
		    
			    <footer class="app-auth-footer">
				    <div class="container text-center py-3">
			        <small class="copyright">Inventaris Aset</small>
				       
				    </div>
			    </footer><!--//app-auth-footer-->	
		    </div><!--//flex-column-->   
	    </div><!--//auth-main-col-->
	    <div class="col-12 col-md-5 col-lg-6 h-100 auth-background-col">
		    <div class="auth-background-holder">
		    </div>
		    <div class="auth-background-mask"></div>
		    <div class="auth-background-overlay p-3 p-lg-5">
			    <div class="d-flex flex-column align-content-end h-100">
				    <div class="h-100"></div>
				    <div class="overlay-content p-3 p-lg-4 rounded">
					    <h5 class="mb-3 overlay-title">Aplikasi Inventaris Aset</h5>
					    <div>Kelurahan cibeureum hilir <a href="#">sukabumi</a>.</div>
				    </div>
				</div>
		    </div><!--//auth-background-overlay-->
	    </div><!--//auth-background-col-->
    
    </div><!--//row-->


</body>
</html> 

