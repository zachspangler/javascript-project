<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Spangler | JavaScript Project</title>
		<!---MY CSS--->
		<link rel="stylesheet" href="style.css" type="text/css">
		<!---BOOTSTRAP CSS--->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"
				integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	</head>
	<body>
		<!---NAVBAR--->
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<a class="navbar-brand" href="#">Navbar</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="#">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Link</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Link</a>
					</li>
				</ul>
				<form class="form-inline my-2 my-lg-0">
					<input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
					<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
				</form>
			</div>
		</nav>
		<!---JUMBOTROM--->
		<div class="jumbotron">
			<h1 class="display-3">Hello, world!</h1>
			<p class="lead">Meet Beyonce the Greatest Performer of All-Time. She is married to a man and rapper named Jay-Z. Together they make the world's greatest power couple.</p>
			<p class="lead">
				<a class="btn btn-primary btn-lg" href="#" role="button" id="click"
					onclick="document.getElementById('click').innerHTML = 'They are the greatest';">
					How great is this couple, click me to find out!</a>
			</p>
		</div>
		<!---IMAGES--->
		<div class="container">
			<div class="row">
				<div class="col-md-4 inline-block m1">
					<img src="http://placebeyonce.com/450-300" alt="beyonce">
					<button type="button" class="btn btn-secondary" id="mouse"
							  onmouseover="document.getElementById('mouse').style.backgroundColor = 'red';">
						Photo 1</button>
				</div>
				<div class="col-md-4 inline-block">
					<img src="http://placebeyonce.com/450-300" alt="beyonce">
					<button type="button" class="btn btn-secondary">Photo 1</button>
				</div>
				<div class="col-md-4 inline-block">
					<img src="http://placebeyonce.com/450-300" alt="beyonce">
					<button type="button" class="btn btn-secondary">Photo 1</button>
				</div>
			</div>
		</div>
		<!---FOOTER--->
		<footer>Skapa Development</footer>
		<!---JAVASCRIPT--->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
				  integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
				  crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"
				  integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh"
				  crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"
				  integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ"
				  crossorigin="anonymous"></script>
	</body>
</html>