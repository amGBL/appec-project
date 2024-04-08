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
	<title>accountant...</title>
</head>
<body>
		  <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 280px; height: 650px;">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
      <span class="fs-4">college appec tss</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item">
        <a href="#" class="nav-link active m-3" aria-current="page">
          Home
        </a>
      </li>
      <li>
        <a href="#" class="nav-link text-white m-3">
          Dashboard
        </a>
      </li>
      <li>
        <a href="#" class="nav-link text-white m-3">
          Orders
        </a>
      </li>
      <li>
        <a href="#" class="nav-link text-white m-3">
          Products
        </a>
      </li>
      <li>
        <a href="#" class="nav-link text-white m-3">
          Customers
        </a>
      </li>
    </ul>
    <hr>
    <div class="dropdown">
      <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
        <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
        <strong><?php echo $_SESSION['fname']; ?></strong>
      </a>
      <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
        <li><a class="dropdown-item" href="#">New project...</a></li>
        <li><a class="dropdown-item" href="#">Settings</a></li>
        <li><a class="dropdown-item" href="#">Profile</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="logout.php">Sign out</a></li>
      </ul>
    </div>
  </div>

</body>
<?php
}
?>
</html>