<!DOCTYPE html>
<html lang="en">
<head>
  <title>PHP,APACHE,MYSQL Docker</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="jumbotron text-center">
  <h1>My First Page</h1>
</div>  
<div class="container">
<div class="card bg-primary text-white">
    <div class="card-body">Attempting MySQL connection from php...</div>
  </div>
<?php 
$host = 'mysql';
$user = 'root';
$pass = 'password';
$conn = new mysqli($host, $user, $pass);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else{?>
<div class="card bg-success text-white">
    <div class="card-body">Connected to <i><b>"host mysql"</b></i> successfully!</div>
  </div>
  </div>
<?php }
phpinfo();
?>