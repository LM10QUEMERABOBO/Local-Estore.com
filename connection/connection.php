<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "local-estore";

  // Create connection
  
  $conn = new mysqli($servername, $username, $password,$dbname);
  
  // Check connection
  
  if (!$conn) {
  ?>
    <script>
      alert("Database connection failed!");
    </script>
  <?php
}