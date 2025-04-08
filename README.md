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

## File Descriptions
- **`admin.htm`**: Admin panel interface displaying tables for lost items, found items, and claims with approve/reject buttons.
- **`admin_login.html`**: Admin login page with a form for username and password.
- **`admin_login.php`**: Backend script for admin authentication (default: `harini`/`harini0719`).
- **`admin.php`**: Fetches and returns lost items, found items, and claims data in JSON format for the admin panel.
- **`ai.htm`**: Main landing page with options to report items, claim items, or log in as admin, featuring a process flow chart.
- **`claim.htm`**: Page for users to view found items and submit claims with a form.
- **`fetch_found_items.php`**: Backend script to fetch found items from the database (assumed; not provided but referenced in `claim.htm`).
- **`report.htm`**: Form page for reporting lost or found items, with fields for type, name, category, description, image, location, and contact.
- **`report.php`**: Handles form submissions from `report.htm`, inserting data into `lost_items` or `lost_found_items` tables.
- **`submit_claim.php`**: Processes claim submissions from `claim.htm`, adding them to the `claims` table.
- **`update_claim.php`**: Updates the status of a claim (e.g., Approved, Rejected) in the database, used by the admin panel.

## SQL Code
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

  ## Setup
1. **Clone the Repository**:
   ```bash
   git clone https://github.com/vedanth-raj/lost-found-portal.git
