<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    .topnav {
    background-color: #333;
    overflow: hidden;
}

/* Style the links inside the navigation bar */
.topnav a {
    float: left;
    display: block;
    color: #f2f2f2;
    text-align: left;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
    background-color: #ddd;
    color: black;
}

/* Add a color to the active/current link */
.topnav a.active {
    background-color: #4CAF50;
    color: white;
}
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
<!--   <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Home</a>
    </div>
 --><!--     <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Projects</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Log Out</a></li>
      </ul>
    </div> -->
    <div class="topnav" id="myTopnav">
  <a href="#home">Home</a>
  <a href="#notification">Notification</a>
  <a href="#contact">Contact</a>
  <a href="#profile">Profile</a>
</div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <p><a href="#">Penugasan</a></p>
      <p><a href="#">Progress</a></p>
      <p><a href="#">Upload File</a></p>
    </div>
    <div class="col-sm-8 text-left"> 
      <h1>Welcome</h1>
      <p>Selamat datang para camin.</p>
      <hr>
      <h3>Deskripsi</h3>
      <p>Sistem ini merupakan sistem yang digunakan untuk memantau progress camin. Silahkan berjuang sebaik-baiknya. Semoga kalian mendapat ilmu yang bermanfaat.</p>
    </div>
    <div class="col-sm-2 sidenav">
      <div class="well">
        <p>'Calender'</p>
      </div>
      <div class="well">
        <p>'Clock'</p>
      </div>
    </div>
  </div>

<!-- <footer class="container-fluid text-center">
  <p>Software Engineering Laboratory</p>
</footer>
 -->
</body>
</html>
