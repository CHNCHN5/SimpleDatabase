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
  <div class="card-header"><b>NEW STUDENT LIST</b></div>
    <div class="card-body">
            <table class="table table-hover">
                <form method="post" action="save.php">
                <tbody>
                    <tr>
                        <td>Student ID</td><td>:</td>
                        <td><div class="form-group">
                        <input type="text" class="form-control" placeholder="Student ID" name="studID" required>
</div>
</td>
</tr>
<tr>
                        <td>Last Name</td><td>:</td>
                        <td><div class="form-group">
                            <input type="text" class="form-control" placeholder="Last Name" name="lname" required>
</div>
</td>
</tr>
<tr>
                        <td>First Name</td><td>:</td>
                        <td><div class="form-group">
                            <input type="text" class="form-control" placeholder="First Name" name="fname" required>
</div>
</td>
</tr>
<tr>
                        <td>Middle Name</td><td>:</td>
                        <td><div class="form-group">
                            <input type="text" class="form-control" placeholder="Middle Name" name="mname" required>
</div>
</td>
</tr>
<tr>
                        <td>Course</td><td>:</td>
                        <td><div class="form-group">
                            <select type="text" name="course" required class="btn btn-secondary">
                                <option hidden align="center">Course</option>
                                <option value="BS in Computer Science" align="center">BS in Computer Science</option>
                                <option value="BS in Information System" align="center">BS in Information System</option>
                                <option value="Associate in Computer Technology" align="center">Associate in Computer Technology</option>
                            </select>
</div>
</td>
</tr>
<tr>
                        <td>Year Level</td><td>:</td>
                        <td><div class="form-group">
                        <select type="number" name="year_level" required class="btn btn-secondary">
                                <option hidden align="center">Year Level</option>
                                <option value="1" align="center">1</option>
                                <option value="2" align="center">2</option>
                                <option value="3" align="center">3</option>
                                <option value="4" align="center">4</option>
                            </select>
</div>
</td>
</tr>
<tr>
                        <td>Town</td><td>:</td>
                        <td><div class="form-group">
                        <select type="text" name="town" required class="btn btn-secondary">
                                <option hidden align="center">Town</option>
                                <option value="Legazpi City" align="center">Legazpi City</option>
                                <option value="Tabaco City" align="center">Tabaco City</option>
                                <option value="Daraga" align="center">Daraga</option>
                                <option value="Ligao" align="center">Ligao</option>
                                <option value="Manito" align="center">Manito</option>
                                <option value="Sto. Domingo" align="center">Santo Domingo</option>
                            </select>
</div>
</td>
</tr>
<tr>
                        <td>Province</td><td>:</td>
                        <td><div class="form-group">
                        <select type="text" name="province" required class="btn btn-secondary">
                                <option hidden align="center">Province</option>
                                <option value="Albay" align="center">Albay</option>
                                <option value="Camarenes Norte" align="center">Camarenes Norte</option>
                                <option value="Camarenes Sur" align="center">Camarenes Sur</option>
                                <option value="Catanduanes" align="center">Catanduanes</option>
                                <option value="Masbate" align="center">Masbate</option>
                                <option value="Sorsogon" align="center">Sorsogon</option>
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