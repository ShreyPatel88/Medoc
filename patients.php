<?php
require_once "importance.php";

if (!User::loggedIn()) {
	Config::redir("login.php");
}
?>

<html>

<head>
	<title>Patients Book - <?php echo CONFIG::SYSTEM_NAME; ?></title>
	<?php require_once "inc/head.inc.php";  ?>
</head>

<body>
	<?php require_once "inc/header.inc.php"; ?>
	<div class='container-fluid'>
		<div class='row'>
			<div class='col-md-2'><?php require_once "inc/sidebar.inc.php"; ?></div> <!-- this should be a sidebar -->
			<div class='col-md-10'>
				<div class='content-area'>
					<div class='t-header'>
						<span>Patients</span> Patients' book / record
					</div>
					<div class='content-body'>
						<?php Patient::patientsBooks(); ?>
					</div><!-- end of the content area -->
				</div>

			</div>


		</div>
	</div>
</body>

</html>