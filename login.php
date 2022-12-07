<?php
require_once "importance.php";

if (User::loggedIn()) {
	Config::redir("index.php");
}
?>

<html>

<head>
	<title>LOGIN - <?php echo Config::SYSTEM_NAME; ?> </title>
	<?php require_once "inc/head.inc.php";  ?>
	<link rel="stylesheet" href="main.css">
	<script src="https://kit.fontawesome.com/a021eb4f06.js" crossorigin="anonymous"></script>
</head>

<body>
	<?php require_once "inc/header.inc.php"; ?>
	<div class='container-responsive'>
		<div class='row'>

			<div class='login-image col-md-6 d-none d-md-flex bg-image nopadding'>
			</div>
			<div class='login col-md-6 nopadding'>
				<div class='content-area'>

					<div class='content-body'>

						<?php
						if (isset($_GET['attempt'])) {


							$status = $_GET['attempt'];

							if ($status == 1) {
								$header = "Login as an Admin";
							} else {
								$header = "Login as a Doctor";
							}

							echo "<center><div class='t-header'>$header</div></center>";



							if (isset($_POST['login-email'])) {
								$email = $_POST['login-email'];
								$password = $_POST['login-password'];

								if ($email == "" || $password == "") {
									Messages::error("You must fill in all the fields");
								} else {
									User::login($email, $password, $status);
								}
							}

						?>
							<div class='row'>
								<div class='col-md-3'></div>
								<div class='col-md-6'>
									<div class='form-holder'>
										<?php Db::form(array("Email", "Password"), 3, array("login-email", "login-password"), array("text", "password"), "Login"); ?>
									</div>
								</div>
								<div class='col-md-3'></div>
							</div>
						<?php

						} else {

						?>

							<center>
								<div class=t-header>Log In to <span>Medoc</span> to continue</div>
							</center>
							<div class='row'>
								<div class='col-md-2'></div>
								<div class='col-md-8'>
									<div class='row' style='margin-top: 30px;'>
										<div class='col-md-4'>
											<center>
												<div class='img-login-icons'>
													<img class='img-responsive' src='images/admin-icon.png' alt='login as a doctor' />
												</div>
												<center><a href='login.php?attempt=1'>
														<div class='badge-headerLogin'>Admin</div>
													</a></center>

											</center>
										</div>
										<div class='col-md-4'>

											<center>
												<div class='img-login-icons'>
													<img class='img-responsive' src='images/doctor-icon.png' alt='login as a doctor' />
												</div>
												<center><a href='login.php?attempt=2'>
														<div class='badge-headerLogin'>Doctor</div>
													</a></center>
											</center>
										</div>

										<div class='col-md-4'>

											<center>
												<div class='img-login-icons'>
													<img class='img-responsive' src='images/patient-icon.png' alt='login as a doctor' />
												</div>
												<center><a href='login-patient.php'>
														<div class='badge-headerLogin'>Patient</div>
													</a></center>
											</center>
										</div>

									</div>
								</div>

							<?php } ?>
							</div>
					</div>
				</div>
			</div>
		</div>
	</div>


</body>

</html>