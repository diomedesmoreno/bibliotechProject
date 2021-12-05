<!DOCTYPE html>
<html>
<head>
	<title><?php echo $this->title;?> | <?php echo $this->app_name;?></title>
	<meta charset="UTF-8">
	<!--===============================================================================================-->
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url();?>assets/template/app/default/assets/images/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url();?>assets/template/app/default/assets/images/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url();?>assets/template/app/default/assets/images/favicon/favicon-16x16.png">
	<link rel="manifest" href="<?php echo base_url();?>assets/template/app/default/assets/images/favicon/site.webmanifest">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">
	<?php $module = $this->router->fetch_class();?>
	<?php echo display_css_files($module);?>
	<!--===============================================================================================-->
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<img class="wave" src="<?php echo base_url();?>assets/template/session/img/wave.png">
<div class="container">
	<div class="img">
		<img src="<?php echo base_url();?>assets/template/session/img/password2.svg">
	</div>
	<div class="login-content">
		<form id="recover-form" action="<?php echo base_url()?>ad_session/recover_password" method="post">
			<h2 class="title">Recuperar Contraseña</h2>
			<div class="description">Introduce tu email y te enviaremos un correo con las instrucciones para recuperarla.</div>
			<div class="response"></div>
			<div class="input-div one">
				<div class="i">
					<i class="fas fa-user"></i>
				</div>
				<div class="div">
					<h5>Email</h5>
					<input type="text" name="email" class="input" data-field="email">
					<span class="valid-message"></span>
				</div>
			</div>

			<button type="submit" id="recover-button" class="btn ladda-button" data-style="zoom-in">
				<span class="ladda-label">Recuperar</span>
				<span class="ladda-spinner"></span>
			</button>
			<a href="<?php echo base_url();?>admin/login">Iniciar Sesión</a>
		</form>
	</div>
</div>

<!--===============================================================================================-->
<?php echo display_js_files($module);?>
<!--===============================================================================================-->
</body>
</html>
