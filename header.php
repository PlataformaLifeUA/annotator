<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta content="José M. Gómez" name="author" />
	<meta content="Una prueba de un menú con bootstrap" name="description" />
	<meta content="prueba, menu, bootstrap, tutorial" name="keywords" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Bootstrap 4 -->
	<!--link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"-->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="style/style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.1/css/all.css">
	<!--link rel="stylesheet" href="bootstrap4/fontawesome.css"-->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!--script src="jquery3/jquery-3.3.1.slim.min.js"></script-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
	<!--script src="boostrap4/popper.min.js"></script-->
	<!--script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script-->
	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript">
	function showMessage(text, type) {
		//$('#msg').hide().remove();
		var msg = document.createElement("div");
		$(msg).attr("id", "msg").addClass("alert alert-dismissible show fade in").addClass("alert-" + type);
		$('#message-section').append(msg);
		var close = document.createElement("a");
		$(close).addClass("close").attr("data-dismiss", "alert").attr("aria-label","close").attr("href","#").html("&times;");
		$(msg).append(close);
		//$(msg).append(translate(text));
		translate(text,msg);
	}
	
	function translate(text, elem) {
		return $.ajax({
			data: {
				text: text
			},
			url: 'translate.php',
			type: 'post',
			//async: false,
			beforeSend: function(xhr) {
				$(elem).append($(document.createElement("span")).attr("id","msg-wait").addClass("fa fa-spinner fa-spin"));
			},
			error: function(xhr, ajaxOptions, thrownError) {
				alert("Fatal error traslating text: " + thrownError);
				return "Fatal error traslating text: " + thrownError;
			},
			success: function(data) {
				$("span#msg-wait").remove();
				$(elem).append(data);
				return data;
			}
		});
	}
	</script>
    <!--script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script-->
<?php 
	include 'functions.php';
	if(connect_db()) {
?>
	<title><?php t("Anotador del corpus de Life!"); ?></title>
<?php
	}
	else {
?>
	<title>Error with the database connection</title>
<?php
	}
?>

</head>
<body>
	<div class="container">
		<nav class="navbar navbar-expand-lg navbar-light bg-lightn">
			<a class="navbar-brand" href="#">Life! corpus</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarText">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link " href="#"><span class="fas fa-home"></span> <?php t("Home") ?> <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#"><span class="fas fa-info"></span> <?php t("My statistics") ?></a>
					</li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li class="nav-item">
						<button class="btn btn-default nav-link dropdown-toggle p-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-sign-in-alt"></span> <?php t("Login") ?></button>
						<div class="dropdown-menu dropdown-menu-right">
							<form class="px-4 py-3">
								<div class="form-group">
									<label for="exampleDropdownFormEmail1"><?php t("Email address") ?></label>
									<input type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="email@example.com">
								</div>
								<div class="form-group">
									<label for="exampleDropdownFormPassword1"><?php t("Password") ?></label>
									<input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password">
								</div>
								<!--div class="form-check">
									<input type="checkbox" class="form-check-input" id="dropdownCheck">
									<label class="form-check-label" for="dropdownCheck">
										Remember me
									</label>
								</div-->
								<div class="btn-group">
									<button type="submit" class="btn btn-primary p-2"><?php t("Sign in") ?></button>
								</div>
							</form>
							<!--div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#">New around here? Sign up</a>
							<a class="dropdown-item" href="#">Forgot password?</a-->
						</div>
					</li>
				</ul>
			</div>
		</nav>