<!DOCTYPE html>
<html lang="en">
<head>
  <title>TACNA Services Inc.</title>
  <meta charset="utf-8"></meta>
  <meta name="viewport" content="width=device-width, initial-scale=1"></meta>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"></link>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>

<body>
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">PORTAL</a>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li><a href="#">Home</a></li>
        <!-- <li><a href="assets.php">Assets</a></li> -->
        <!-- <li><a href="reports.php">Reports</a></li> -->
        <!-- <li><a href="technicians.php">Technicians</a></li> -->
        <!-- <li><a href="maintenance.php">Maintenances</a></li> -->
        <!-- <li><a href="spareparts.php">Spare Parts</a></li> -->
        <li><a href="hires">Hires</a></li>
        <li> <a href="#">Layoffs</a></li>
        <li> <a href="managers">Managers</a></li>
        <li> <a href="departments">Departments</a></li>
      </ul>
    </div>
  </div>
</nav>
<body>
  <div class="container">
      @yield('content')
    </div>
</body>
</html>