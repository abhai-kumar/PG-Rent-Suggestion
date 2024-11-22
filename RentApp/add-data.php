<?php
include 'connection.php';

$conn = new mysqli('localhost', 'root', '','renting');

if(isset($_POST['submit'])){
    $univ = $_POST['university'];
    $pgname = $_POST['pgname'];
    $distance = $_POST['distance'];
    $budget = $_POST['budget'];

    $sql = "INSERT INTO pg_list (university, pgname, distance, budget) VALUES ('$univ', '$pgname', '$distance', '$budget')";
    $result = mysqli_query($conn, $sql);
    
    if($result){
        // header('location:index.php');
        echo "<script type='text/javascript'>alert('Record Added Successfully.'); 
      window.location.href='index.php'; </script>";
    } else {
        die(mysqli_error($conn));
    }
}
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
        <h1><marquee behavior="right" direction="alternate">Add PG Details</marquee></h1>
        <form action="" method="POST">
            <div class="input-group">
                <label for="university">University</label>
                <input type="text" name="university" placeholder="Enter university name" required>
            </div>
            <div class="input-group">
                <label for="pgname">PG Name</label>
                <input type="text" name="pgname" placeholder="Enter pg name" required>
            </div>
            <div class="input-group">
                <label for="distance">Distance from University (km)</label>
                <input type="number" name="distance" placeholder="Enter distance in km" required>
            </div>
            <div class="input-group">
                <label for="budget">Rent (₹)</label>
                <input type="number" name="budget" placeholder="Enter budget" required>
            </div>
            <input type="submit" name="submit" value="Submit Details" class="btn">
        </form>
    </div>

</body>
</html>