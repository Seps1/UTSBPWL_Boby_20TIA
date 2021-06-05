<?php
include('../config/Google/Google_config.php');
include('../config/LinkedIn/init.php');
$login_google = $google_client->createAuthUrl();
//$login_facebook = $facebook_helper->getLoginUrl();
$login_linkedin = $linkedin->getAuthUrl();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Title -->
    <title>Login | Graindashboard UI Kit</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Favicon -->
    <link rel="shortcut icon" href="../assets/img/favicon.ico">

    <!-- Template -->
    <link rel="stylesheet" href="../assets/css/graindashboard.css">
</head>

<body class="">

    <main class="main">

    	<div class="content">
	  	
			<div class="container-fluid pb-5">

				<div class="row justify-content-md-center">
					<div class="card-wrapper col-12 col-md-4 mt-5">
						<div class="brand text-center mb-3">
							<a href="#"><img src="../assets/img/logo.png"></a>
						</div>
						<div class="card">
							<div class="card-body">
								<h4 class="card-title">Login</h4>
								<form action="../controllers/proses.php?aksi=login" method="POST">

									<div class="form-group">
										<label for="name">Name</label>
										<input type="text" class="form-control" id="name" name="name" required="" autofocus="">
									</div>

									<div class="form-group">
										<label for="email">E-Mail Address</label>
										<input id="email" type="email" class="form-control" name="email" required="" autofocus="">
									</div>

									<div class="form-group">
										<label for="password">Password
										</label>
										<input id="password" type="password" class="form-control" name="password" required="">
										<div class="text-right">
											<a href="password-reset.php" class="small">
												Forgot Your Password?
											</a>
										</div>
									</div>

									<div class="form-group">
										<div class="form-check position-relative custom-control custom-switch mb-4">
											<input type="checkbox" class="custom-control-input" id="remember" name="remember">
										  	<label class="custom-control-label" for="remember" data-icon="&#xe936">Remember Me</label>
										</div>
									</div>
									
									<div class="form-group no-margin">
										<input type="submit" class="btn btn-primary btn-block rounded-pill" name="login" value= "Login">
									</div>
									<div class="dropdown-divider"></div>
									<div class="form-group no-margin">
										<a href="<?php echo $login_google;?>" class="btn btn-google btn-block rounded-pill">
											<i class="gd-google align-middle mr-2"></i>  Google
										</a>
										<a href="<?php //echo $login_facebook;?>" class="btn btn-facebook btn-block rounded-pill">
											<i class="gd-facebook align-middle mr-2"></i>  Facebook
										</a>
										<a href="<?php //echo $login_github;?>" class="btn btn-github btn-block rounded-pill">
											<i class="gd-github align-middle mr-2"></i>  Github
										</a>
										<a href="<?php //echo $login_linkedin;?>" class="btn btn-linkedin btn-block rounded-pill">
											<i class="gd-linkedin align-middle mr-2"></i>  LinkedIn
										</a>
									</div>
									<div class="text-center mt-3 small">
										Don't have an account? <a href="register.php">Sign Up</a>
									</div>
								</form>
							</div>
						</div>
						<footer class="footer mt-3">
							<div class="container-fluid">
								<div class="footer-content text-center small">
									<span class="text-muted">&copy; 2019 Graindashboard. All Rights Reserved.</span>
								</div>
							</div>
						</footer>
					</div>
				</div>
			</div>
    	</div>
	</main>

	<script src="../assets/js/graindashboard.js"></script>
    <script src="../assets/js/graindashboard.vendor.js"></script>
</body>
</html>