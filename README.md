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

## Technologies Used

- PHP for backend logic and data handling
- jQuery for AJAX calls and DOM manipulation
- Bootstrap (or similar CSS framework) for responsive layout and styling
- JSON format for client-server data exchange

---

## Installation & Setup

1. Clone or download the repository to your web server environment (XAMPP, WAMP, LAMP, etc.)
2. Ensure your server supports PHP and has access to a database for provider data.
3. Place the `haarcascade_frontalface_default.xml` file (if applicable) in the project root or appropriate directory.
4. Verify directory structure includes:
/include/header.php
/include/footer.php
/js/jquery.js
/scripts/searchproviders.php
/images/

yaml
Copy
Edit
5. Configure the `searchproviders.php` script to connect to your database and query providers based on user input.
6. Launch the application by navigating to the main PHP page (e.g., `index.php`) in your browser.

---

## Usage

- Select a city from the city dropdown.
- Choose a housing category from the House Category dropdown.
- Click the **Search** button.
- View the list of matching housing service providers.
- Click **Book** to proceed to the provider’s booking page.

---

## Customization

- Add or remove cities in the PHP `$cities` array.
- Modify or extend housing categories in the dropdown menu.
- Update styling to suit your branding or preferences.
- Enhance backend logic for improved search and security.

---

## Notes

- Ensure secure handling of user inputs and server responses.
- Implement database sanitization and validation in `searchproviders.php`.
- Images should be stored in the `/images` directory and referenced correctly.

---

## License

MIT License

---

## Author

Developed by Halfwave Studios

---

Feel free to contribute, report issues, or suggest enhancements!
