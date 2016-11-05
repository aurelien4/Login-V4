<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- Latest compiled and minified CSS -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>

<div class="container">
<div class="jumbotron "><h1 class="text-center" id="data">Login/password Version IV</h1></div>
<a href="index.php" class="btn btn-primary">Index</a>
	<div class="row">
		<!-- mail -->

		<div class="col-sm-offset-4 col-sm-4">
		<form onSubmit="event.preventDefault()" id="form">		
		<span class="input-group-addon" id="basic-addon1">@</span>
		<input type="mail" name="login" class="form-control" placeholder="Login..." autofocus required="true">
		<!-- password -->
		<span class="input-group-addon glyphicon glyphicon-lock" id="basic-addon1"></span>
		<input type="password" name="pass1" id="password" class="form-control" placeholder="Password..." required="true">
		<span class="input-group-addon glyphicon glyphicon-lock" id="basic-addon1"></span>
		<input type="password" name="pass2" id="password2" class="form-control" placeholder="Password..." required="true">
		<div class="row"><div class="col-sm-offset-5 col-sm-1">
		<button class="btn btn-md btn-primary" id="but" onclick="sendDataRegistration()">Valider</button>
		</div></div>
	</form>

		</div>
	</div>
</div>

 
<script type="text/javascript" src="ajax.js">
</script>
</body>
</html>