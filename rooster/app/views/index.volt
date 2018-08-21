<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>WIP Roosteren</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="<?php echo $this->url->get("css/base.css"); ?>">
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo $this->url->get("img/favicon.ico")?>"/>
    </head>
    <body>
        <div class="container-fluid" id="container">
			{% if session.get("user") != null %}
			<div class="row">
				<div class="col-2" id="nav">
					<h1>Menu</h1>
					<hr />
					<div class="nav flex-column">
						<strong>Algemeen</strong>
						<a class="nav-link" href="<?php echo $this->url->get("home/"); ?>">Home</a>
						<a class="nav-link" href="<?php echo $this->url->get("profile/"); ?>">Mijn gegevens</a>
						<a class="nav-link" href="<?php echo $this->url->get("settings/"); ?>">Instellingen</a>
						<a class="nav-link" href="<?php echo $this->url->get("logout/"); ?>">Uitloggen</a>
						<br />
						<strong>Invulrooster</strong>
						<a class="nav-link" href="<?php echo $this->url->get("invulrooster/overview/"); ?>">Overzicht</a>
						<a class="nav-link" href="<?php echo $this->url->get("invulrooster/"); ?>">Nieuw</a>
						<a class="nav-link" href="<?php echo $this->url->get("invulrooster/default/"); ?>">Standaard diensten</a>
						<br />
						<strong>Maandrooster</strong>
						<a class="nav-link" href="<?php echo $this->url->get("maandrooster/"); ?>">Overzicht</a>
						<a class="nav-link" href="<?php echo $this->url->get("maandrooster/"); ?>">Nieuw</a>
						<br />
						<strong>Medewerkers</strong>
						<a class="nav-link" href="<?php echo $this->url->get("medewerkers/"); ?>">Overzicht</a>
						<a class="nav-link" href="<?php echo $this->url->get("medewerkers/"); ?>">Nieuw</a>
					</div>
				</div>
				<div class="col-10">
					<?php echo $this->getContent(); ?>
				</div>
			</div>
			<hr />
			<div class="row" style="padding: 10px;">
				<div class="col">
					<em><p>Huidige datum en tijd: <?php echo date("d F Y H:i:s"); ?> | Roosteren &copy; 2018</em></p>
				</div>
			</div>
			{% else %}
			<div class="row">
				<div class="col-4"></div>
				<div class="col-4">
					<h1>Inloggen</h1>
					{% if error is defined %}
					<div class="alert alert-danger">{{ error }}</div>
					{% endif %}
					<form method="post" action="<?php echo $this->url->get("login/"); ?>">
						<p>
							<label for="auth_code">Jouw inlogcode:</label>
							<input type="password" id="auth_code" name="auth_code" class="form-control" />
						</p>
						<button type="submit" class="btn btn-primary">Inloggen</button>
					</form>
				</div>
				<div class="col-4"></div>
			</div>
			{% endif %}
			</div>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		<script src="<?php echo $this->url->get("js/tools.js"); ?>"></script>
    </body>
</html>
