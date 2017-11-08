<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="shortcut icon" href="images/beyonce%20favicon.jpg" type="image/x-icon">
		<title>Spangler | JavaScript Project</title>
		<!---MY CSS--->
		<link rel="stylesheet" href="style.css" type="text/css">
		<!---BOOTSTRAP CSS--->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"
				integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	</head>
	<body>
		<!---NAVBAR--->
		<header>
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<a class="navbar-brand" href="#">All My Single Ladies</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
						  aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active">
							<a class="nav-link" href="#">Put</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Your</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Hands</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Up</a>
						</li>
					</ul>
				</div>
			</nav>
		</header>
		<!---JUMBOTROM--->
		<div class="jumbotron">
			<h1 class="display-3">Beyonce's, world!</h1>
			<p class="lead">Meet Beyonce the Greatest Performer, Mom, Role Model & Friend of All-Time.</p>
			<h6>Click below to find out Beyonce's answer to the only question that matters</h6>
			<a class="btn btn-primary btn-lg" href="#" role="button" id="click"
				onclick="document.getElementById('click').innerHTML = 'Nickname: Queen B...nough said';">
				How great is Beyonce?<br></a>
		</div>
		<!---IMAGES--->
		<div class="container">
			<div class="row">
				<div class="col-md-4 text-center mb-3">
					<img src="http://placebeyonce.com/450-300" alt="beyonce" height="100%" width="100%" id="image2">
					<button type="button" class="btn btn-secondary" id="mouse1"
							  onmouseover="document.getElementById('mouse1').style.backgroundColor = 'red';"
							  onclick="document.getElementById('image2').src='images/giphy-downsized-1.gif';">
						See More
					</button>
				</div>
				<div class="col-md-4 text-center mb-3">
					<img src="http://placebeyonce.com/450-300" alt="beyonce" height="100%" width="100%" id="image3">
					<button type="button" class="btn btn-secondary" id="mouse2"
							  onmouseover="document.getElementById('mouse2').style.backgroundColor = 'blue';"
							  onclick="document.getElementById('image3').src='images/giphy-downsized-2.gif';">
						See More
					</button>
				</div>
				<div class="col-md-4 text-center mb-3">
					<img src="http://placebeyonce.com/450-300" alt="beyonce" height="100%" width="100%" id="image4">
					<button type="button" class="btn btn-secondary" id="mouse3"
							  onmouseover="document.getElementById('mouse3').style.backgroundColor = 'black';"
							  onclick="document.getElementById('image4').src='images/giphy-downsized-3.gif';">
						See More
					</button>
				</div>
			</div>
		</div>
		<!---FOOTER--->
		<footer>Skapa Development &copy 2017</footer>
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