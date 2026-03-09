# KTM Showcase Website

## Overview
This project is a multi-page, responsive website dedicated to KTM motorcycles. It features dynamic content, interactive galleries, detailed specifications, and a fully functional contact form connected to a MySQL database.

## Features
* **Dynamic Homepage (`KTM.html`)**: Features an engaging background video loop, a sticky auto-hiding navigation bar, and the iconic "READY TO RACE" slogan.
* **Interactive Bike Gallery (`bikes.html`)**: A showcase of various KTM models (Enduro, Sport-touring, Supermoto, Duke, RC, Brabus). Users can click on a bike thumbnail to expand the image and view the specific 2023/2024 model name via JavaScript.
* **Explore the Beast (`etb.html`)**: A detailed product page for the 2024 KTM 1390 SUPER DUKE R EVO. It includes comprehensive technical specifications and an interactive color selector (Blue/Orange) that updates the bike image in real-time.
* **Racing Section (`racing.html`)**: Information about KTM's involvement in MotoGP™, Moto3™, Moto2™, and the KTM GP Academy, featuring embedded YouTube videos.
* **Contact Form & Database Integration (`contact.html` & `trimitere.php`)**: A contact page allowing users to send messages. The data (First Name, Last Name, Phone, Email, Message) is processed using PHP and securely inserted into a local MySQL database.

## Technologies Used
* **Frontend**: HTML5, CSS3 (Custom styling, animations, and typography using `KPDutyJNL` font)
* **Backend**: PHP 
* **Database**: MySQL
* **Icons**: Ionicons

## File Structure
* `KTM.html` - The main landing page.
* `bikes.html` - The interactive gallery of motorcycle models.
* `etb.html` - Product presentation and specs for the KTM 1390 Super Duke.
* `racing.html` - KTM racing history and GP Academy details.
* `contact.html` - The frontend contact form.
* `ktm.css` - The global stylesheet for the entire project.
* `KTM-Script.js` - Script for the dynamic scroll-based navigation bar.
* `script.js` - Handles the color toggling on the `etb.html` page.
* `slidescript.js` - Handles the image expansion and dynamic text injection for the `bikes.html` gallery.
* `trimitere.php` - Processes the contact form submission and interacts with the database.
* `p1.php` - Utility script for tracking user agent, IP address, and form data.

## Setup and Installation
Because this project uses PHP and MySQL, you cannot simply open the HTML files in your browser if you want to test the Contact form. You will need a local server environment (like XAMPP, MAMP, or WAMP).

1. Clone this repository to your local machine.
2. Move the project folder into your local server's root directory (e.g., `htdocs` for XAMPP).
3. **Database Setup**:
   * Open phpMyAdmin (usually `localhost/phpmyadmin`).
   * Create a new database named `id`.
   * Create a table named `tabel1` inside the `id` database.
   * Ensure the table has the following columns (or similar, matching the PHP insert query): `Nume`, `Prenume`, `Telefon`, `Email`, `mesaj`.
   * *Note:* The database credentials in `trimitere.php` are currently set to user: `BogdanBGE` and password: `KTMDUKE125r`. You may need to update these to match your local MySQL configuration or create a user with these exact credentials.
4. Launch the project by navigating to `http://localhost/your-folder-name/KTM.html` in your browser.


