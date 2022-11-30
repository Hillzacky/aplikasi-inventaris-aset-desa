<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>Aplikasi Inventaris Aset</title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="description" content="Developers">
    <meta name="author" content="A">    
    <link rel="shortcut icon" href="favicon.ico"> 
    
    <!-- FontAwesome JS-->
    <script defer src="<?=host().'/public/assets/plugins/fontawesome/js/all.min.js'?>"></script>
    
    <!-- App CSS -->  
    <link id="theme-style" rel="stylesheet" href="<?=host().'/public/assets/css/portal.css'?>">

</head> 

<body class="app app-signup p-0">    	
    <div class="row g-0 app-auth-wrapper">
	    <div class="col-12 col-md-7 col-lg-6 auth-main-col text-center p-5">
		    <div class="d-flex flex-column align-content-end">
			    <div class="app-auth-body mx-auto">	
				    <div class="app-auth-branding mb-4"><a class="app-logo" href="index.html"><img class="logo-icon me-2" src="<?=host().'/public/assets/images/app-logo.svg'?>" alt="logo"></a></div>
					<h2 class="auth-heading text-center mb-4">Daftar menjadi Admin Aplikasi</h2>					
	
					<div class="auth-form-container text-start mx-auto">
						<form class="auth-form auth-signup-form" method="post" action="/proses/auth/register">         
							<div class="email mb-3">
								<label class="sr-only" for="signup-email">Nama Lengkap</label>
								<input id="signup-name" name="signup-name" type="text" class="form-control signup-name" placeholder="Nama Lengkap" required="required">
							</div>
							<div class="email mb-3">
								<label class="sr-only" for="signup-email">Nama Pengguna</label>
								<input id="signup-username" name="signup-username" type="text" class="form-control signup-username" placeholder="Username" required="required">
							</div>
							<div class="password mb-3">
								<label class="sr-only" for="signup-password">Kata Sandi</label>
								<input id="signup-password" name="signup-password" type="password" class="form-control signup-password" placeholder="Buat password" required="required">
							</div>
							<div class="extra mb-3">
								<div class="form-check">
									<input class="form-check-input" type="checkbox" value="" id="agree">
									<label class="form-check-label" for="agree">
									Saya setuju dengan <a href="#" class="app-link">Ketentuan Layanan</a> dan <a href="#" class="app-link">Kebijakan Privasi</a> BMK.
									</label>
								</div>
							</div><!--//extra-->
							
							<div class="text-center">
								<button type="submit" id="reg" class="btn app-btn-primary w-100 theme-btn mx-auto" disabled>Daftarkan</button>
							</div>
						</form><!--//auth-form-->
						
						<div class="auth-option text-center pt-5">Sudah punya Akun? <a class="text-link" href="/masuk" >Masuk</a></div>
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

	<script type="text/javascript">
		const agree = document.getElementById("agree");
		const reg = document.getElementById("reg");
		agree.addEventListener("click",()=>{
			if (agree.checked == true) {
		    reg.removeAttribute("disabled");
		  } else {
		    reg.setAttribute("disabled", "");
		  }
		})
	</script>

</body>
</html> 

