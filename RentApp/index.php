<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rent Suggestion App</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css">
    <link rel="stylesheet" href="owner.css">
    <link rel="stylesheet" href="common.css">
</head>

<body>
    <div class="container">
        <button class="btn"><a href="login.php">Owner Login/Sigunp</a></button>
        <h1>
            <marquee behavior="right" direction="alternate">Find PGs Based on Your Budget</marquee>
        </h1>
        <form action="filter.php" method="POST">
            <div class="input-group">
                <label for="university">University Name</label>
                <input type="text" name="university" placeholder="Enter university location" required>
            </div>
            <div class="input-group">
                <label for="distance">Distance from University (km)</label>
                <input type="number" name="distance" placeholder="Enter distance in km" required>
            </div>
            <div class="input-group">
                <label for="budget">Your Budget (₹)</label>
                <input type="number" name="budget" placeholder="Enter budget" required>
            </div>
            <div class="input-group">
                <label for="sort_by">Sort by</label>
                <select name="sort_by">
                    <option value="rent">Rent</option>
                    <option value="distance">Distance</option>
                </select>
            </div>
            <input type="submit" value="Find PGs" class="btn">
        </form>


    </div>>
</body>

</html>