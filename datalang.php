<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <link rel="stylesheet" type="text/css" href="bootstrap.css">
</head>
<body>
<center>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active" href="datalang.php">Home
            <span class="visually-hidden">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="new.php">New Record</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-sm-2" type="search" placeholder="Search">
        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<br>
    <div class="card text-white bg-primary mb-3" style="max-width: 80rem;">
  <div class="card-header"><b>STUDENT LIST</b></div>
<br>
  <div class="card-body">
    <table class="table table-hover">
  <thead>
    <tr align="center">
      <th scope="col">SEQ</th>
      <th scope="col">STUDENT ID</th>
      <th scope="col">LAST NAME</th>
      <th scope="col">FIRST NAME</th>
      <th scope="col">MIDDLE NAME</th>
      <th scope="col">COURSE</th>
      <th scope="col">YEAR LEVEL</th>
      <th scope="col">TOWN</th>
      <th scope="col">PROVINCE</th>
      <th scope="col">ACTIONS</th>
    </tr>
  </thead>
  <tbody>
  <?php

  include('conn.php');

  $sql = "SELECT * FROM tbl_students ORDER BY lname";
  $results = $conn->query($sql);
  $counter = 1;

  while ($student = $results->fetch_array())
  {
    echo '<tr>';
    echo '<td align="center">'.$counter.'. ';
    echo '<td align="center">'.$student['studID']. ' ';
    echo '<td align="center">'.$student['lname']. ' ';
    echo '<td align="center">'.$student['fname']. ' ';
    echo '<td align="center">'.$student['mname']. ' ';
    echo '<td align="center">'.$student['course']. ' ';
    echo '<td align="center">'.$student['year_level']. ' ';
    echo '<td align="center">'.$student['town']. ' ';
    echo '<td align="center">'.$student['province']. ' ';
    echo '<br> <br>';
    echo '<td><a href="edit.php?studID='.$student['studID'].'" class="btn btn-success"> EDIT</a>&nbsp;
    <a href="delete.php?studID='.$student['studID'].'" class=" btn btn-danger" onclick="return confirm(\'Are you sure you to permanently delete the record?\')"> DELETE </a></td>';
    echo'</tr>';
    $counter++;
  }
?>
  </tbody>
</table>
  </div>
</div>
</body>
</html>