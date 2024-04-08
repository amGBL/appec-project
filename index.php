<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="boot-5/css/bootstrap.min.css">
	<script src="boot-5/js/bootstrap.bundle.js"></script>
	<link rel="stylesheet" type="text/css" href="font-6/css/all.css">
	<title>appec...</title>
</head>
<style type="text/css">
  html,body{
  text-transform: capitalize;
  margin: 0px;
  padding: 0px;
  overflow-x: hidden;
/*  overflow-y: hidden;*/
}
.hero-image {  background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("one.jpg");
  height: 50%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}
.anim{
  height: 500px;
  width: 100%;
  object-fit: cover;
}
a{
  text-decoration: none; 
  padding: 5px;
}
.footer{
  height: 160px;
  background: ghostwhite;
}
i{
  font-size: 20px;
}
.course{
  display: grid;
  grid-template-columns: repeat(2, 1fr);
}
.one{
  width: 50%;
  margin-left: 100px;
}

.line{
  height: 3px;
  background: blue;
  width: 30%;
}
</style>
<body>
	<nav class="navbar navbar-expand-lg bg-body-tertiary rounded" aria-label="Thirteenth navbar example" id="top">
      <div class="container-fluid">
        <div class="collapse navbar-collapse d-lg-flex" id="navbarsExample11">
         <p class="navbar-brand col-lg-3 me-0 text-primary">college appec</p>
          <ul class="navbar-nav col-lg-6 justify-content-lg-center">
            <li class="nav-item">
              <a class="nav-link active  mx-4" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-4" href="#">academics</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-4" aria-disabled="true">publication</a>
            </li>
            <li class="nav-item">
              <a class="nav-link  mx-4" aria-disabled="true">about us</a>
            </li>
          </ul>
          <div class="d-lg-flex col-lg-3 justify-content-lg-end">
            <a href="login.php" style="position: relative; top: 5px;"><button class="btn btn-primary">login now</button></a>
          </div>
        </div>
      </div>
    </nav>
<main>
<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="./asset/6.jpg" class="anim">

        <div class="container">
          <div class="carousel-caption text-start">
            <h1>our mission</h1>
            <p>Some representative placeholder content for the first slide of the carousel.</p>
            <a href="login.php"><button class="btn btn-lg btn-primary" style="position: relative;top: 5px;">login now</button></a>
          </div>
        </div>
      </div>
      <div class="carousel-item">
         <img src="./asset/4.jpg" class="anim">

        <div class="container">
          <div class="carousel-caption">
            <h1>vision</h1>
            <p>Some representative placeholder content for the second slide of the carousel.</p>
            <a href="login.php"><button class="btn btn-lg btn-primary" style="position: relative;top: 5px;">login now</button></a>
          </div>
        </div>
      </div>
      <div class="carousel-item">
         <img src="./asset/5.jpg" class="anim">

        <div class="container">
          <div class="carousel-caption text-end">
            <h1>objectives</h1>
            <p>Some representative placeholder content for the third slide of this carousel.</p>
            <a href="login.php"><button class="btn btn-lg btn-primary " style="position: relative;top: 5px;">login now</button></a>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


  <!-- ================================================== --> 
   
        <div style="position: relative;top: 30px;">
        <div class="line" style="margin-left: 5%"></div>
          <p id="about us" class="text-center" style="font-size: 20px; position: relative;top: -10px;"><strong>about us</strong></p>
          <div class="line" style="margin-left: 65%;position: relative;top: -50px;"></div>
      </div>

  <div class="container marketing m-5 text-center">
    <div class="row">
      <div class="col-lg-4">
        <img src="./asset/7.jpg" class="rounded-circle" width="140" height="140">

        <h2>Heading</h2>
        <p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p>
        <p><a class="btn btn-primary" href="#">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
       <img src="./asset/8.jpg" class="rounded-circle" width="140" height="140">

        <h2>Heading</h2>
        <p>Another exciting bit of representative placeholder content. This time, we've moved on to the second column.</p>
        <p><a class="btn btn-primary" href="#">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
       <img src="./asset/9.jpg" class="rounded-circle" width="140" height="140">

        <h2>Heading</h2>
        <p>And lastly this, the third column of representative placeholder content.</p>
        <p><a class="btn btn-primary" href="#">View details &raquo;</a></p>
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row w-100 text-center">
        <div class="col m-3 rounded" style="box-shadow: 0 0px 0 0px rgba(0, 0, 0, 0.4),0 0 20px 0 rgba(0, 0, 0, 0.19);">
          <p><strong>our mission</strong></p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="col m-3 rounded" style="box-shadow: 0 0px 0 0px rgba(0, 0, 0, 0.4),0 0 20px 0 rgba(0, 0, 0, 0.19);">
          <p><strong>our vision</strong></p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="col m-3 rounded" style="box-shadow: 0 0px 0 0px rgba(0, 0, 0, 0.4),0 0 20px 0 rgba(0, 0, 0, 0.19);">
          <p><strong>our objectives</strong></p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
    </div>

    
  </div>
     <!-- =================================================================== -->
      <div style="position: relative;top: 15px;">
        <div class="line" style="margin-left: 5%"></div>
          <p id="about us" class="text-center" style="font-size: 20px; position: relative;top: -10px;"><strong>our course</strong></p>
          <div class="line" style="margin-left: 65%;position: relative;top: -50px;"></div>
      </div>
      <div class="course m-5" style="margin:10px">
        <p class="col">
          <img src="./asset/1.jpg" class="one">
        </p>
        <div class="col">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </div>
      </div>
       <div class="course m-5" style="margin:10px">
        <div class="col">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </div>
        <p class="col">
          <img src="./asset/1.jpg" class="one">
        </p>
      </div>
     <!-- =================================================================== -->
    <footer class="footer">
      <div class="row">

        <p class="col">
          
        </p>

        <p class="col" style="position: relative;top: 70px;">
          <a href="#top">top</a>
          <a href="#about us">about us</a>
          <a href="">privacy</a>
          <a href="">terms</a>
          <a href="">contact us</a>
        </p>

        <p class="col" style="position: relative;top: 70px;">
          <a href=""><i class="fab fa-facebook"></i></a>
          <a href=""><i class="fab fa-youtube" style="color:red"></i></a>
          <a href=""><i class="fab fa-twitter"></i></a>
          <a href=""><i class="fab fa-linkedin" style="color:red"></i></a>
        </p>


      </div>
    </footer> 
    
</body>
</html>