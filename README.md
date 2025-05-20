# 🏠 Affordable Housing Initiative (PHP)

A PHP-based web application that allows users to search for affordable housing service providers by city and housing category. It includes basic login/registration, booking functionality, and admin management tools.

---

## 📌 Features

- 🔍 Search for service providers by city and housing category
- 📷 Display provider photo, name, and address
- 📘 Book a provider directly from the listing
- 👤 User login and registration system
- 🧑‍💼 Admin dashboard for managing providers and halls
- ⚙️ AJAX-enabled search with jQuery (no page reload)

---

## 🗂️ Project Structure

css/ # CSS stylesheets
images/ # Provider images
include/ # Reusable header/footer files
js/ # JavaScript (e.g. jQuery)
msg/ # Message/notification handlers
scripts/ # Backend scripts (e.g. searchproviders.php)

about.php # About the platform
admin.php # Admin dashboard or functions
booking.php # Booking functionality
deletebooking.php # Script to delete bookings
deletehall.php # Script to delete halls
home.php # User home page
homepage.html # Static homepage
index.php # Main search interface
login.php # User login
logout.php # Logout script
main.sql # SQL file to set up the database
managehall.php # Admin panel for managing halls
provider.php # Provider profile/details
register.php # New user registration


---

## 🛠️ Setup Instructions

1. **Clone or download the repository** into your local PHP server directory (e.g., `htdocs/` for XAMPP).

2. **Set up the database**:
   - Open phpMyAdmin (or any SQL tool).
   - Import the `main.sql` file to create the necessary tables and data.

3. **Configure database connection**:
   - Edit the connection file (usually inside `include/`) to add your DB credentials.

4. **Ensure file structure** is intact:
   - CSS, JS, image, and PHP files must be in their appropriate folders.

5. **Run the app**:
   - Launch your local server (e.g., start Apache in XAMPP).
   - Visit `http://localhost/index.php` in your browser.

---

## 💡 Usage

- Use the dropdowns on the home/search page to select a **city** and a **housing category**.
- Click the **Search** button.
- View matching providers and click **Book** to make a reservation.
- Login/logout as a user or admin to access more features.

---

## ⚙️ Technologies Used

- PHP
- MySQL (via `main.sql`)
- jQuery / AJAX
- HTML & Bootstrap (for UI)

---

## 📜 License

This project is open-source under the MIT License.

---

## 👨‍💻 Author

Created by **Halfwave Studios**

---

## 📬 Contributing

Feel free to fork this repo, suggest improvements, or submit pull requests.

