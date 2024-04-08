<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="boot-5/css/bootstrap.min.css">
	<script src="boot-5/js/bootstrap.bundle.js"></script>
	<link rel="stylesheet" type="text/css" href="font-6/css/all.css">
	<title>Create Account Here...</title>
</head>
<style>
	*{
		text-transform: capitalize;
	}
	.form-group{
		width: 100%;
	}
	button{
		width: 100%;
		margin-left: 10px;
	}
	a{
		text-decoration: none;
	}
.container{
	position: relative;
	top: 10vh;
	box-shadow: 0 0px 0 0px rgba(0, 0, 0, 0.4),0 0 20px 0 rgba(0, 0, 0, 0.19);
	background: white;
	height: 300px;
}
</style>
<body>
	<nav class="navbar navbar-expand-lg bg-body-tertiary rounded" aria-label="Thirteenth navbar example">
      <div class="container-fluid">
        <div class="collapse navbar-collapse d-lg-flex" id="navbarsExample11">
         <p class="navbar-brand col-lg-3 me-0 text-primary">college appec</p>
          <ul class="navbar-nav col-lg-6">
            <li class="nav-item">
              <a class="nav-link active  mx-4" aria-current="page" href="login.php">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-4" href="signup.php"><strong>REGISTER</strong></a>
            </li>
          </ul>
        </div>
      </div>  
    </nav>
    <hr>
  <div class="bg-light" style="height: 500px;position: relative;top: -15px;">
  	<form action="signup_check.php" method="POST">
	<div class="container w-50 bg-light rounded">
		<h1 class="text-center">signup here</h1>
		<div class="row">
			<div class="col">
				<input type="text" class="form-control m-2" name="fname" placeholder="last name..." required>
				<input type="number" class="form-control m-2" name="phone" placeholder="phone number..." required>
				<input type="password" class="form-control m-2" name="password" placeholder="password..." required>
			</div>
			<div class="col">
				<input type="text" class="form-control m-2" name="lname" placeholder="first name..." required>
				<input type="email" class="form-control m-2" name="email" placeholder="email..." required>
				<select class="form-control m-2" name="role"> 
				<option value="manager">manager</option>
				<option value="accountant">accountant</option>
				<option value="secretary">secretary</option>
				<option value="dod">DOD</option>
				<option value="dos">DOS</option>
				<option value="store">store keeper</option>
			</select>	
		</div>
		</div>
		<button class="btn btn-primary" type="submit" name="submit">signup</button>
		<div>
			<hr>
			<p class="text-center">have an account click here to <a href="login.php" class="text-success">login</a></p>
		</div>
	</div>
</form>	
  </div>
	

</body>
</html>