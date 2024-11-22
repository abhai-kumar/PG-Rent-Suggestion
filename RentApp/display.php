<?php

$conn = new mysqli('localhost', 'root', '', 'renting');

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM pg_list";
$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rent Suggestion App</title>
  <link rel="stylesheet" href="owner.css">
  <link rel="stylesheet" href="common.css">
</head>
<body>
  <div class="container">

    <?php
    if ($result && mysqli_num_rows($result) > 0) { 
      echo "<h2>Available PGs</h2>";
      echo "<table>";
      echo "<tr><th>University</th><th>Distance (km)</th><th>Budget (₹)</th></tr>";

      while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['university'] . "</td>";
        echo "<td>" . $row['distance'] . "</td>";
        echo "<td>" . $row['budget'] . "</td>";
        echo "</tr>";
      }
      echo "</table>";
    } else {
      echo "No PGs Found!";
    }
    ?>

    </div>

  </body>
</html>

<?php
$conn->close();
?>