# Setup and Installation Guide

## Install packages

sudo apt update
sudo apt install mysql-server php apache2 -y

sudo apt install php-mysql

## Ignore if below is not work
sudo a2enmod php

## Setup MySQL Password

sudo mysql_secure_installation
sudo mysql
ALTER USER 'root'@'localhost' IDENTIFIED WITH mysql_native_password BY 'Admin@123';
FLUSH PRIVILEGES;
exit;

## Setup Database

SHOW DATABASES;
CREATE DATABASE students;

### Creating Table 

CREATE TABLE students (
    Roll_No INT AUTO_INCREMENT PRIMARY KEY,
    Name VARCHAR(255) NOT NULL,
    Class VARCHAR(50) NOT NULL,
    Address VARCHAR(255) NOT NULL
);

### Select Database

USE students;

### Insert Values

INSERT INTO students (Name, Class, Address) VALUES ('John Doe', '10th Grade', '123 Main Street');
INSERT INTO students (Name, Class, Address) VALUES 
('Jane Smith', '11th Grade', '456 Elm Street'),
('Alice Johnson', '12th Grade', '789 Oak Street');

### Show selected database and other commands

SELECT DATABASE();
SHOW TABLES;
SHOW TABLES FROM database_name;

## Change Database and PHP Password
Changing the database password depends on how you're managing your MySQL server. I'll explain how to change it using the command line and phpMyAdmin, two common methods.

### Using the MySQL Command Line

1. **Log into MySQL**: First, you need to log into the MySQL server as a user who has permission to change the password. If you're changing your own password and you have sufficient privileges, you can do this yourself.

   ```bash
   mysql -u root -p
   ```
   You'll be prompted to enter the current password.

2. **Set New Password**: Once logged in, you can set a new password for the user account. Since your username is `root`, you would do:

   ```sql
   ALTER USER 'root'@'localhost' IDENTIFIED BY 'Admin@123';
   ```

3. **Flush Privileges**: After changing the password, flush the privileges to ensure the current session uses the new password.

   ```sql
   FLUSH PRIVILEGES;
   ```

4. **Exit MySQL**:

   ```sql
   EXIT;
   ```

### Using phpMyAdmin

1. **Log into phpMyAdmin**: Open your phpMyAdmin in a web browser. You'll need to log in using your current username and password.

2. **Select User Account**: Navigate to the "User accounts" tab, which might be found on the home screen or within the "Server" dropdown.

3. **Edit Privileges**: Find the `root` user (or whichever user's password you want to change) and click on "Edit privileges".

4. **Change Password**: Look for the "Change password" section. Enter your new password (`Admin@123`) in the provided fields.

5. **Execute**: After entering the new password, click on the "Go" button to apply the changes.

### Important Considerations

- **Update Your Applications**: After changing the database password, remember to update the connection strings in any applications that use this MySQL user account. For instance, if your PHP applications connect to MySQL using the `root` user, you'll need to update the `$password` variable in your PHP scripts.

- **Secure Your Password**: Make sure your new password (`Admin@123`) is secure enough for your purposes. It's usually recommended to use a password that includes a mix of letters, numbers, and special characters.

- **Privileges**: You need to have the appropriate privileges to change a user's password. If you're not the `root` user or don't have sufficient privileges, you may need to contact your database administrator.

Changing passwords regularly and using strong, unique passwords for each service is a good practice for enhancing security.