# Affordable-Housing-Initiative

A user-friendly PHP web application designed to help users search for affordable housing service providers by city and housing category. This tool enables quick access to providers offering various tenancy options, including social rented housing, affordable rented housing, and intermediate tenure housing.

---

## Features

- Dynamic search interface with dropdowns for **City** and **House Category**
- Real-time search results without page reloads using AJAX and jQuery
- Displays provider information including photo, name, address, and category
- Easy booking system linking users to individual providers
- Responsive and clean user interface for seamless user experience

---

css/              # CSS stylesheets
images/           # Provider and site images
include/          # Header, footer, and reusable PHP includes
js/               # JavaScript files (e.g., jQuery)
msg/              # Message or notification handling files
scripts/          # Backend scripts like searchproviders.php
about.php         # About page
admin.php         # Admin dashboard or functions
booking.php       # Booking page for service providers
deletebooking.php # Script to delete bookings
deletehall.php    # Script to delete hall entries
home.php          # User home page
homepage.html     # Static homepage file
index.php         # Main landing or entry page
login.php         # User login script
logout.php        # User logout script
main.sql          # Database schema and seed data
managehall.php    # Hall management page
provider.php      # Provider profile or management page
register.php      # User registration page
Setup Instructions
Clone or download the repository to your PHP-enabled web server (e.g., XAMPP, WAMP, LAMP).

Import the main.sql file into your MySQL/MariaDB database to set up necessary tables and initial data.

Configure your database connection in your PHP config files (likely in the include/ folder).

Make sure the directories for CSS, JS, images, and PHP scripts are correctly placed in your server root.

Open index.php in your browser to access the application.

Use the login or registration pages to create users and start interacting with the app.
