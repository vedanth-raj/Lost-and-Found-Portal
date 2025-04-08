# Lost & Found Portal

A web-based application to report and claim lost or found items, built for SVKM's NMIMS University. The system includes user reporting, claim submission, and an admin panel for managing items and claims.

## Features
- **Report Lost/Found Items**: Users can submit details and images of lost or found items.
- **Claim Items**: Browse available found items and submit claims.
- **Admin Panel**: Manage lost items, found items, and claims with approval/rejection functionality.
- **Responsive Design**: Futuristic UI with animations and particle effects.

## Tech Stack
- **Frontend**: HTML, CSS, JavaScript
- **Backend**: PHP, MySQL
- **Database**: `lost_found_db` (lost_items, lost_found_items, claims tables)
- **Libraries**: Orbitron font, custom CSS animations

## Project Structure
lost-found-portal/
├── uploads/              # Folder for storing uploaded images
├── admin.htm             # Admin panel interface
├── admin_login.html      # Admin login page
├── admin_login.php       # Admin login backend
├── admin.php             # Fetch data for admin panel
├── ai.htm                # Main portal landing page
├── claim.htm             # Claim found item page
├── fetch_found_items.php # Fetch found items for claim page
├── report.htm            # Report lost/found item page
├── report.php            # Handle report submissions
├── submit_claim.php      # Handle claim submissions
├── update_claim.php      # Update claim status (admin)
└── README.md             # Project documentation

## Create the Database:
Open phpMyAdmin or your MySQL client.
Create a database named lost_found_db.

## Create the following tables (example SQL):

CREATE TABLE lost_items (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    category VARCHAR(100),
    description TEXT,
    image_path VARCHAR(255),
    location VARCHAR(255),
    reported_by VARCHAR(100),
    contact VARCHAR(100),
    reported_date DATETIME
);

CREATE TABLE lost_found_items (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    category VARCHAR(100),
    description TEXT,
    image_path VARCHAR(255),
    found_location VARCHAR(255),
    found_by VARCHAR(100),
    contact VARCHAR(100),
    reported_date DATETIME
);

CREATE TABLE claims (
    id INT AUTO_INCREMENT PRIMARY KEY,
    item_id INT,
    user_name VARCHAR(100),
    contact VARCHAR(100),
    claim_reason TEXT,
    status VARCHAR(50) DEFAULT 'Pending',
    FOREIGN KEY (item_id) REFERENCES lost_found_items(id)
);

## Usage
Home: Navigate to report, claim, or admin login.
Admin Login: Use credentials harini/harini0719 (update in admin_login.php for production).
Uploads: Ensure the uploads/ folder exists and is writable for image uploads.

## Database Schema
lost_items: Stores lost item reports.
lost_found_items: Stores found item reports.
claims: Tracks claims on found items with status (Pending, Approved, Rejected).
Screenshots
(Add screenshots here by uploading images to your repo and linking them)

Home Page: ![Home](screenshots/home.png)
Report Form: ![Report](screenshots/report.png)
Admin Panel: ![Admin](screenshots/admin.png)

## Contributing
Fork the repository.
Create a new branch (git checkout -b feature-branch).
Commit your changes (git commit -m "Add feature").
Push to the branch (git push origin feature-branch).
Open a pull request.
Please report bugs or suggest improvements via GitHub Issues.

