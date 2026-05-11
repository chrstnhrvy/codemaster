# CodeMaster

A web application for learning programming through curated video tutorials. Supports Python, JavaScript, C#, PHP, and CSS courses with user authentication and a comment system.

## Features
- Browse videos by programming language category
- User registration and login
- Comment, edit, and delete on video pages

## Tech Stack
- **Frontend**: HTML5, CSS3, Bootstrap 5
- **Backend**: PHP (procedural)
- **Database**: MySQL

## Project Structure
```
codemaster/
+-- index.html              # Landing page
+-- pages/                  # Static HTML pages (about, category listings)
+-- videos/                 # Video detail pages grouped by language
|   +-- python/
|   +-- javascript/
|   +-- csharp/
|   +-- php/
|   +-- css/
+-- auth/                   # Login, logout, register
+-- includes/               # PHP helpers (DB connection, comment logic)
|   +-- edit/               # Edit comment pages
+-- assets/
|   +-- css/                # Custom stylesheets
|   +-- js/                 # JavaScript
|   +-- images/             # Image assets
+-- database/
    +-- codemaster.sql      # MySQL schema - import this to set up the database
```

## Setup

1. Import `database/codemaster.sql` into MySQL (via phpMyAdmin or the MySQL CLI).
2. Create `includes/dbh.inc.php` with your DB credentials (this file is gitignored):
   ```php
   <?php
   $conn = mysqli_connect('localhost', 'YOUR_USER', 'YOUR_PASSWORD', 'codemaster');
   if (!$conn) { die("Connection failed: " . mysqli_connect_error()); }
   ```
3. Serve from a PHP-capable web server (e.g. XAMPP, Laragon) pointing to this directory.
4. Open `index.html` in your browser.

> **Note:** `includes/dbh.inc.php` is listed in `.gitignore` — never commit real credentials.
