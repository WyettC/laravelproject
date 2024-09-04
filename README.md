# Attendance Tracker V3 - Local Environment Setup Instructions:

**Ensure that Composer is installed for composer packages and Node.js for JS packages.
You can use XAMPP to run a MySQL server locally.**

1. Open your VS Code Powershell.
2. Run composer install to install all the necessary composer packages
3. Run npm install to install all the necessary json packages
4. Create a copy of .env.example and rename it to .env
5. Open your renamed .env file
6. Change the SESSION_DRIVER to file (SESSION_DRIVER=file)
7. Change the DB_CONNECTION to mysql if it is not already set to that (DB_CONNECTION=mysql)
8. Change DB_DATABASE to your database name - make sure the database already exists.
