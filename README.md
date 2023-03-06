# GercepNet Internet Cafe Website
GercepNet is a website for an internet cafe built using Laravel, a PHP web framework. The website is designed to help customers access the internet and other services offered by the internet cafe. This version of the website also includes a feature for booking a room.

This project was developed as a group project as a final task for a course. The project was developed by a team of developers with same major.

## Features
The website offers the following features to its customers:

1. User authentication: Users can create an account and log in to access the internet and other services offered by the internet cafe.
2. View Facility: Users can see various kinds of internet cafe rooms and their details.
3. Room booking: Users can book a room for a set period of time and use it for private meetings or events.
4. Request management: The website's administrator can view and manage requests for room bookings.

## Installation
To use this application, you'll need a web server with PHP and MySQL installed. You can download and install XAMPP, which includes Apache, PHP, and MySQL, from the Apache Friends website.

To set up the database, import the gercepnet.sql file into your MySQL database using phpMyAdmin or another database management tool.

Then, copy the files from this repository into a folder on your web server. Finally, open the application in your web browser by navigating to the folder where you copied the files.

1. cd gercepnet
2. Clone file repository ini
3. copy .env.example .env
4. Jalankan Composer Install
5. Jalankan php artisan key:generate
6. Buat database dengan nama gercepnet
7. <b><i>Import sql yang disediakan didalam folder repository</i></b>
8. php artisan serve

Apabila anda menemukan error 404 | NOT FOUND pada halaman http://127.0.0.1:8000/home Anda dapat menangani ini dengan cara http://127.0.0.1:8000/gameover

Akun dengan 3 role berbeda :

Admin : admin@gmail.com 
password : 12345

Management : management@gmail.com
password : 12345

User : user@gmail.com
password : 12345

## Usage
To use the application, simply create an account and log in. You can then purchase internet access, order food and drinks, book a room, and use the internet cafe's printing and gaming services.

If you're an administrator, you can view and manage requests for room bookings. To do this, log in to the website and navigate to the "Requests" page.

If you want to view the database of users, internet access purchases, room bookings, and other data, you can use phpMyAdmin or another database management tool to view the gercepnet database in the MySQL database.
