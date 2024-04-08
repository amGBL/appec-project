<?php
session_start();
if (isset($_SESSION['fname'])) {
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="boot-5/css/bootstrap.min.css">
	<script src="boot-5/js/bootstrap.bundle.js"></script>
	<link rel="stylesheet" type="text/css" href="font-6/css/all.css">
  <link rel="stylesheet" type="text/css" href="user.css">
	<title>manager...</title>
	<style type="text/css">
		hhml,body{
			text-transform: capitalize;
      overflow-x: hidden;
      overflow-y: hidden;

		}
    .img{
      margin-left: 100px;
    }
    li,a{
      text-decoration: none;
    }
    h2{
      margin-left: 75px;
    }
	</style>
</head>
<body>
	   <div class="flex-shrink  bg-dark" style="width: 280px;height: 600px;">
       <div class="col-lg-4">
          <img src="./asset/1.jpg" alt="" width="70" height="70" class="img rounded-circle me-2">
        <h2 class="text-light fs-4">manager</h2>
      </div>


    <hr class="featurette-divider text-light">
    <ul class="list-unstyled">
      <li class="mb-4">
        <a class="btn btn-toggle align-items-center text-light" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="false">
          <span><i class="fas fa-home" style="margin-left:10px;"></i></span>
          Home
        </a>
      </li>
      <li class="mb-4">
        <a class="btn btn-toggle align-items-center text-light" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
          <span><i class="fas fa-users" style="margin-left:10px;"></i></span>
          students
        </a>
        <div class="collapse mx-4" id="dashboard-collapse">
          <ul class="btn-toggle-nav">
            <li class=" m-2"><a href="mange_student.php" class="link-light "><i class="fas fa-cogs"></i> manage student</a></li>
            <li class=" m-2"><a href="mange_student.php" class="link-light "><i class="fas fa-add"></i> add student</a></li>
          </ul>
        </div>
      </li>
      <li class="mb-4">
        <a class="btn btn-toggle align-items-center text-light" data-bs-toggle="collapse" data-bs-target="#orders-collapse" aria-expanded="false">
          <span><i class="fas fa-book" style="margin-left:10px;"></i></span>
          publication
        </a>
        </a>
        <div class="collapse mx-4" id="orders-collapse">
          <ul class="btn-toggle-nav">
              <li class=" m-2"><a href="#" class="link-light"><i class="fas fa-add"></i> add publication</a></li>
              <li class=" m-2"><a href="#" class="link-light"><i class="fas fa-bucket"></i> remove publication</a></li>
          </ul>
        </div>
      </li>
      <li class="mb-4">
        <a class="btn btn-toggle align-items-center text-light " data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false">
          <span><i class="fas fa-bell" style="margin-left:10px;"></i></span>
          announcement
        </a>
        <div class="collapse mx-4" id="account-collapse">
          <ul class="btn-toggle-nav">
            <li class=" m-3"><a href="#" class="link-light"><i class="fas fa-add"></i> add announcement</a></li>
            <li class=" m-1"><a href="#" class="link-light"><i class="fas fa-bucket"></i> remove announcement</a></li>
          </ul>
        </div>
      </li>
      <li class="mb-4">
        <a class="btn btn-toggle align-items-center text-light " data-bs-toggle="collapse" data-bs-target="#academics-collapse" aria-expanded="false">
        <span><i class="fas fa-user" style="margin-left:10px;"></i></span>
         teachers
        </a>
        </a>
        <div class="collapse mx-4" id="academics-collapse">
          <ul class="btn-toggle-nav">
            <li class=" m-2"><a href="#" class="link-light"><i class="fas fa-cogs"></i> manage teachers</a></li>
            <li class=" m-2"><a href="#" class="link-light"><i class="fas fa-add"></i> add teachers</a></li>
          </ul>
        </div>
      </li>
     <div class="dropdown">
      <hr style="color: white;">
      <a class="btn btn-toggle align-items-center text-light " data-bs-toggle="collapse" data-bs-target="#out-collapse" aria-expanded="false">
        <img src="" alt="" width="32" height="32" class="rounded-circle me-2">
        <strong><?php echo $_SESSION['fname']; ?></strong>
      </a>
      <div  class="collapse mx-4" id="out-collapse">
      <ul class="btn-toggle-nav">
            <li class=" m-2"><a href="#" class="link-light rounded"><i class="fas fa-user-cog"></i> Profile</a></li>
            <li class=" m-2"><a href="#" class="link-light rounded"><i class="fas fa-cogs"></i> Settings</a></li>
          </ul>
    </div>
     </div>
    </ul>
  </div>
  <div class="row w-75" style="position: relative;top: -100vh;margin-left: 300px;">
    <p style="margin-left: 250px; font-size: 20px;"><strong>manager dashboard</strong></p>
    <div class="col m-3 bg-dark rounded text-center">
      <p class="one text-light"><strong>student</strong></p>
      <hr class="text-light">
    </div>
    <div class="col m-3 bg-dark rounded text-center">
      <p class="one text-light"><strong>teacher</strong></p>
      <hr class="text-light">
    </div>
    <div class="col m-3 bg-dark rounded text-center">
      <p class="one text-light"><strong>announcement</strong></p>
      <hr class="text-light">
    </div>
  </div>
</body>
<?php
}
?>
</html>