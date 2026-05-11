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
â”œâ”€â”€ index.html              # Landing page
â”œâ”€â”€ pages/                  # Static HTML pages (about, category listings)
â”œâ”€â”€ videos/                 # Video detail pages grouped by language
â”‚   â”œâ”€â”€ python/
â”‚   â”œâ”€â”€ javascript/
â”‚   â”œâ”€â”€ csharp/
â”‚   â”œâ”€â”€ php/
â”‚   â””â”€â”€ css/
â”œâ”€â”€ auth/                   # Login, logout, register
â”œâ”€â”€ includes/               # PHP helpers (DB connection, comment logic)
â”‚   â””â”€â”€ edit/               # Edit comment pages
â”œâ”€â”€ assets/
â”‚   â”œâ”€â”€ css/                # Custom stylesheets
â”‚   â”œâ”€â”€ js/                 # JavaScript
â”‚   â””â”€â”€ images/             # Image assets
â””â”€â”€ database/
    â””â”€â”€ codemaster.sql      # Database schema and seed data
```

## Setup

1. Import database/codemaster.sql into MySQL.
2. Copy includes/dbh.inc.php and update your DB credentials:
   `php
   \ = mysqli_connect('localhost', 'YOUR_USER', 'YOUR_PASSWORD', 'codemaster');
   `
3. Serve from a PHP-capable web server (e.g. XAMPP, Laragon) pointing to this directory.
4. Open index.html in your browser.

> **Note:** includes/dbh.inc.php is listed in .gitignore. Never commit real credentials.
