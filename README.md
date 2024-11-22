The PG Rent Suggestion System is a web-based application developed using PHP to help users find and suggest suitable rental properties (PGs) based on their preferences. It includes features such as user authentication, data management, filtering, and rent suggestions to enhance the user experience.

**Features**
User Authentication: 
Secure login and registration system for users and administrators.
Data Management: Add, display, and manage PG property data.
Filtering: Advanced filtering options to refine search results.
Password Recovery: Forgot password functionality for account recovery.
Responsive Design: User-friendly interface optimized for different devices.

**Project Structure**

htdocs/
└── RentApp/
    ├── index.php           # Home page
    ├── login.php           # Login page
    ├── add-data.php        # Form to add PG data
    ├── connection.php      # Database connection
    ├── display.php         # Display PG suggestions
    ├── filter.php          # Filter PG data
    ├── forgot.php          # Password recovery page
    ├── server.php          # Backend logic for authentication
    ├── owner.css           # General CSS for owners
    ├── loginCSS/
    │   ├── AdminLogin.css  # Admin login styles
    │   ├── forgot.css      # Forgot password styles
    │   ├── login.css       # User login styles
    ├── loginJS/
    │   ├── login.js        # Login page JavaScript
    │   ├── script.js       # General scripts

**Technology Stack**
Frontend: HTML, CSS, JavaScript
Backend: PHP
Database: MySQL (via XAMPP)
Web Server: Apache (via XAMPP)

**Installation**
Prerequisites
XAMPP installed on your system.
Git installed for version control.

**Steps**
git clone: https://github.com/username/pg-rent-suggestion-system.git
Move the project folder to the htdocs directory of XAMPP.
Start the Apache and MySQL services in the XAMPP control panel.
Create a database in phpMyAdmin and import the provided SQL file.
Update the database credentials in connection.php:
php
Copy code
$host = "localhost";
$user = "root";
$password = "";
$database = "renting";

Open the browser and navigate to:
bash
http://localhost/RentApp/index.php

**Usage**
Admin:
Log in to manage PG data.
Add, update, or delete PG details.

Users:
Log in or sign up.
Use filters to search for PGs.
View rent suggestions based on preferences.

**Future Enhancements**
Add location-based filtering using Google Maps API.
Implement recommendation algorithms for personalized suggestions.
Add email notifications for password recovery and updates.

**Contributing**
Contributions are welcome! Follow these steps:
Fork the repository.
Create a new branch:
git checkout -b feature-name

Commit your changes:
git commit -m "Add your message here"

Push to your branch:
git push origin feature-name
Create a pull request.
