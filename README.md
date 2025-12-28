#🔐 Login Page – PHP & MySQL Authentication System

This project is a basic user authentication system developed using PHP and MySQL. It allows users to log in using their registered email address and password, which are verified against records stored in the database.

The application demonstrates fundamental concepts of backend development, including form handling, server-side validation, database connectivity, and user authentication workflows.

This project was developed as part of my Web Developer Internship at TechnoHacks, where I was assigned to build a functional login module with backend integration.

##📁 Project Structure
├── LoginPage.php      # Login UI (frontend form)
├── login.php          # Backend authentication logic
├── welcome.php        # Landing page after successful login
├── README.md          # Project documentation

##⚙️ Technologies Used

PHP – Server-side scripting and authentication logic

MySQL – Database for storing user credentials

HTML & CSS – User interface and styling

##✨ Key Features

User login using registered email and password

Server-side validation of credentials

Database-driven authentication

Redirects to a welcome page upon successful login

Displays error messages for invalid credentials

##🔄 Application Flow

User enters email and password on the login page

Data is sent to the server using PHP

PHP script validates the credentials against the MySQL database

If credentials are valid:

User is redirected to the welcome page

If credentials are invalid:

Error message is displayed

##🛠️ Setup & Installation

Clone the repository:

git clone https://github.com/Swaroop2809/your-repo-name.git


Move the project to your local server directory:

htdocs (XAMPP)

www (WAMP)

Create a MySQL database and user table:

CREATE DATABASE login_system;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(100) NOT NULL,
    password VARCHAR(100) NOT NULL
);


Insert sample user credentials into the database.

Update database connection details in login.php.

Run the project in your browser:

http://localhost/LoginPage.php

##📚 Learning Outcomes

Understanding of PHP–MySQL integration

Hands-on experience with backend authentication

Knowledge of client–server architecture

Improved skills in form handling and validation

##🧑‍💻 Author

Swaroop Harsh
Web Developer Intern – TechnoHacks

##⭐ Note

This project focuses on learning and demonstration purposes and can be extended further by adding:

Password hashing

Session management

Registration module

Input sanitization
