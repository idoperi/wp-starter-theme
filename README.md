# Terem WordPress Theme Development

## Overview

This repository contains the `wp-content` directory for the Terem WordPress theme. Follow the instructions below to set up the Terem theme in a WordPress installation.

## Prerequisites

Ensure you have the following installed:
- PHP (Version X.X or higher recommended)
- MySQL (or a compatible database system)
- Node.js (for npm commands)
- Git (for cloning the repository)

## Setup Instructions

### Step 1: Set Up a New WordPress Project

Create a new directory for your WordPress project, which will serve as the root of your WordPress installation.

```bash
mkdir wordpress-terem
cd wordpress-terem
```

### Step 2: Clone the Repository

Clone the Terem theme repository, which includes the `wp-content` structure, into your new project directory.

```bash
git clone https://github.com/MoveoTech/Terem-WP.git .
```

*Note*: The period at the end of the command clones the content into the current directory.

### Step 3: Download WordPress

1. Visit the [WordPress.org download page](https://wordpress.org/download/) and download the latest version of WordPress.
2. Unzip the downloaded file to your computer.
3. Copy all WordPress files from the unzipped folder to your project directory (`wordpress-terem`), excluding the `wp-content` directory.

### Step 4: Create the Database and Configure WordPress

1. Using your MySQL database management tool (such as phpMyAdmin), create a new database for WordPress.
2. Within your project directory, rename the file `wp-config-sample.php` to `wp-config.php`.
3. Edit `wp-config.php` with a text editor, and update the database connection details with your MySQL database information:

```php
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'database_name_here');
   
/** MySQL database username */
define('DB_USER', 'username_here');
   
/** MySQL database password */
define('DB_PASSWORD', 'password_here');
   
/** MySQL hostname */
define('DB_HOST', 'localhost');
```

### Step 5: Install Node Dependencies

Navigate to the theme directory and install the required Node.js dependencies.

```bash
cd wp-content/themes/terem-moveo
npm install
```

### Step 6: Compile Assets

Compile your theme's assets using Laravel Mix with the following commands:

```bash
npx mix               # Compile for production
npx mix watch         # Compile for development and watch for changes
```

### Step 7: Run Your WordPress Site

To serve your WordPress site locally, you can use the PHP built-in server. Run this command from your project root directory:

```bash
php -S localhost:8080
```

Now, you can open a web browser and navigate to `http://localhost:8080` to run the WordPress installation script and complete the setup.
# wp-starter-theme
# wp-starter-theme
# wp-starter-theme
# wp-starter-theme
# wp-starter-theme
