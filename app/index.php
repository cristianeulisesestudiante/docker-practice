<!DOCTYPE html>
<html lang="en">
<head>
  <title>Document</title>
</head>
<body>
  <h1>PRACTICA DOCKER</h1>

  <h2>CRISTIAN EULISES SANCHEZ RAMIREZ <br>
      2021 - 1899
  </h2>

  <?php

  $servername = getenv("MYSQL_HOST");
  $username = getenv("MYSQL_USER");
  $password = getenv("MYSQL_PASSWORD");
  $database = getenv("MYSQL_DATABASE");

  $conn = new mysqli($servername, $username, $password, $database);

  if($conn -> connect_error){
    die("Error connecting to database: "  . $conn -> connect_error);
  }

  echo "<p>Connect to database successfully<p>";

  $conn -> close();
  ?>
</body>
</html>