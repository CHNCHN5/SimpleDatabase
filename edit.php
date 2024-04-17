<?php

    include('conn.php');
    $studentID = $_GET['studID'];
    $sql = "SELECT * FROM tbl_students WHERE studID='$studentID'";
    $student = $conn->query($sql);
    $student = $student->fetch_object();

?>
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
    <div class="card text-white bg-primary mb-3" style="max-width: 45rem;">
  <div class="card-header"><b>EDIT STUDENT RECORD</b></div>
    <div class="card-body">
            <table class="table table-hover">
                <form method="post" action="update.php">
                <tbody>
                    <tr>
                        <td>Student ID</td><td>:</td>
                        <td><div class="form-group">
                        <input type="text" class="form-control" placeholder="Student ID" name="studID" required readonly value="<?= $student->studID; ?>">
</div>
</td>
</tr>
<tr>
                        <td>Last Name</td><td>:</td>
                        <td><div class="form-group">
                            <input type="text" class="form-control" placeholder="Last Name" name="lname" required value="<?= $student->lname; ?>">
</div>
</td>
</tr>
<tr>
                        <td>First Name</td><td>:</td>
                        <td><div class="form-group">
                            <input type="text" class="form-control" placeholder="First Name" name="fname" required value="<?= $student->fname; ?>">
</div>
</td>
</tr>
<tr>
                        <td>Middle Name</td><td>:</td>
                        <td><div class="form-group">
                            <input type="text" class="form-control" placeholder="Middle Name" name="mname" required value="<?= $student->mname; ?>">
</div>
</td>
</tr>
<tr>
                        <td>Course</td><td>:</td>
                        <td><div class="form-group">
                            <select type="text" name="course" required class="btn btn-secondary" value="<?= $student->course; ?>">
                            <?php
                                $sql = "SELECT * FROM tbl_course ORDER BY course";
                                $course = $conn->query($sql);
                                while ($row = $course->fetch_object()){
                                    if($student->course == $row->course){
                                    echo '<option hidden>Course</option>';
                                    echo '<option selected="selected">'.$row->course.'</option>';
                                    }else{
                                    echo '<option>'.$row->course.'</option>';
                                }
                            }

                            ?>
                            </select>
</div>
</td>
</tr>
<tr>
                        <td>Year Level</td><td>:</td>
                        <td><div class="form-group">
                        <select type="number" name="year_level" required class="btn btn-secondary">
                                <?php
                                    for ($i = 1; $i <=4; $i++){
                                        if ($student->year_level==$i){
                                        echo '<option hidden>Year</option>';
                                        echo '<option selected="selected">'.$i.'</option>';
                                    }else{
                                        echo '<option>'.$i.'</option>';
                                    }
                                }

                                ?>
                            </select>
</div>
</td>
</tr>
<tr>
                        <td>Town</td><td>:</td>
                        <td><div class="form-group">
                        <select type="text" name="town" required class="btn btn-secondary">
                        <?php
                                $sql = "SELECT * FROM tbl_town ORDER BY town";
                                $town = $conn->query($sql);
                                while ($row = $town->fetch_object()){
                                    if($student->town == $row->town){
                                    echo '<option hidden>Course</option>';
                                    echo '<option selected="selected">'.$row->town.'</option>';
                                }else{
                                    echo '<option>'.$row->town.'</option>';
                                }
                            }

                            ?>
                            </select>
</div>
</td>
</tr>
<tr>
                        <td>Province</td><td>:</td>
                        <td><div class="form-group">
                        <select type="text" name="province" required class="btn btn-secondary">
                        <?php
                                $sql = "SELECT * FROM tbl_prov ORDER BY prov";
                                $prov = $conn->query($sql);
                                while ($row = $prov->fetch_object()){
                                    if($student->prov == $row->prov){
                                    echo '<option hidden>Province</option>';
                                    echo '<option selected="selected">'.$row->prov.'</option>';
                                }else{
                                    echo '<option>'.$row->prov.'</option>';
                                }
                            }

                            ?>
                            </select>
</div>
</td>
</tr> 
<tr>
    <td align="right" colspan="3"><div class="form-group"><input type="submit" value="Submit">&nbsp;
                    <input type="reset" value="Reset"></div></td>
</tr>
</tbody>
</form>
</table>
</body>
</html>