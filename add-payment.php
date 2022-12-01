<?php 
require_once "importance.php"; 

if(!User::loggedIn()){
	Config::redir("login.php"); 
}
?> 

<html>
<head>
	<title>Add Payment <?php echo CONFIG::SYSTEM_NAME; ?></title>
	<?php require_once "inc/head.inc.php";  ?> 
</head>
<body>
	<?php require_once "inc/header.inc.php"; ?> 
	<div class='container-fluid'>
		<div class='row'>
			<div class='col-md-2'><?php require_once "inc/sidebar.inc.php"; ?></div> <!-- this should be a sidebar --> 
			<div class='col-md-7'>
				<div class='content-area'> 
				<div class='content-header'> 
					Add Payment <small>Add Payment</small>
				</div>
				<div class='content-body'> 
					<div class='form-holder'> <br /> 
						<?php 
                            if(isset($_POST['p-name'])) {
                                $name = $_POST['p-name'];
                                $amount = $_POST['amount'];

                                Payment::add($name, $amount);
                            }
							$form = new Form(2, "post");
							$form->init();
							$form->textBox("Patient Name", "p-name", "text",  "", ""); 
							$form->textBox("Payment Amount", "amount", "number",  "", ""); 
							$form->close("Create Payment");
						?> 
						
						
					</div> 
				</div><!-- end of the content area --> 
				</div> 
				
			</div><!-- col-md-7 --> 

			<div class='col-md-3'>
				<img src='images/doc-background-one.png' class='img-responsive' /> 
			</div> <!-- this should be a sidebar -->
				
		</div> 
	</div> 
</body>
</html>
