<?php

// Connect to MySQL database
$conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);

      // Check connection
      if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }

      // Select all records from the messages table in chronological order
      $sql = "SELECT * FROM messages ORDER BY date DESC";
      $result = mysqli_query($conn, $sql);

      // Close the MySQL connection
      mysqli_close($conn);
    ?>

