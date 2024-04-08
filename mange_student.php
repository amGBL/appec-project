<?php
include 'config.php';
 
 $sql = "SELECT * FROM students";
 $res = mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="font-6/css/all.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="boot-5/css/bootstrap.min.css">
	<title>students...</title>
</head>
<style>
* {
  box-sizing: border-box;
  font-family: sans-serif;
  text-transform: capitalize;
}

#myInput {
  background-image: url('../css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 18px;
}

#myTable th, #myTable td {
  text-align: center;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
}
.btn{
  font-size: 13px;
}
</style>
<body>
	<nav class="navbar navbar-expand-lg bg-body-tertiary rounded" aria-label="Thirteenth navbar example">
      <div class="container-fluid">
        <div class="collapse navbar-collapse d-lg-flex" id="navbarsExample11">
         <p class="navbar-brand col-lg-3 me-0 text-primary">college appec</p>
          <ul class="navbar-nav col-lg-6">
            <li class="nav-item">
              <a class="nav-link active  mx-4" aria-current="page" href="manager.php"><strong>HOME</strong></a>
            </li>
             <li class="nav-item">
              <a class="nav-link active  mx-4" aria-current="page" href="manager.php">Add student</a>
            </li>
          </ul>
        </div>
      </div>  
    </nav>
    <hr>
	<div class="bg-light" style="height: 500px;position: relative;top: -15px;">
		<h2>Students</h2>
    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for students.." title="Type in a name">

	<table id="myTable">
		<tr class="header">
			<th>student names</th>
			<th>student class</th>
			<th>student level</th>
			<th>student address</th>
			<th>student sex</th>
			<th>student fees</th>
			<th>action</th>
		</tr>
		<?php

		while ($row = mysqli_fetch_array($res)) {
		?>
		<tr>
			<td><?php echo $row['student_name']; ?></td>
			<td><?php echo $row['student_class']; ?></td>
			<td><?php echo $row['student_level']; ?></td>
			<td><?php echo $row['student_address']; ?></td>
			<td><?php echo $row['student_sex']; ?></td>
			<td><?php echo $row['student_fees']; ?></td>
			<td>
        <a href="delete.php?id=<?php echo $row['student_id'] ?>" class="btn btn-danger"><i class="fas fa-bucket"></i> remove student</a>   
        <a href="update.php?id=<?php echo $row['student_id'] ?>" class="btn btn-primary"><i class="fas fa-cogs"></i> update student</a>   
      </td>
		</tr>
		<?php
	}
		?>
	</table>
	</div>

</body>
<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
</html>