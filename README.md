# ❄🔥 Mighty HVAC 🔥❄

This is a wordpress template for Mighty HVAC. It was created with understrap. There are currently templates for the home page, contact page, and about us page. Please see the Adobe XD file for reference [located here.](MightyHVAC-Website.xd)

## Site Prieview 🐱‍👤

The website is currently hosted [here](https://testing466677956.wpcomstaging.com/)

## Getting Your Environment Setup for Local Hosting 🎊🎉

### Download WordPress Software

The software, WordPress, is actually a collection of PHP source code that integrated to form a website management system (WMS). You should not confuse WordPress (the software) with WordPress.com (the web service by Automattic). You can download WordPress as a package (either on ZIP or TAR) from WordPress Software Project website https://wordpress.org/download. 

### 1. Install XAMPP
Follow this XAMPP Installation Tutorial. Please be aware this is only for 64bit computers.

### 2. Extract WordPress Package
Place the WordPress package on your $HOME. Right-click > extract it.

This should give you a 'wordpress' named folder there.

### 3. Move WordPress Directory

Open your Terminal and perform this command:
sudo mv wordpress /opt/lampp/htdocs/ 

Now check the target directory and you should find /opt/lampp/htdocs/wordpress.

### 4. Change Directory Ownership

The most important thing now is changing ownership of the whole 'wordpress' directory to be owned by the user of XAMPP's web server.

So the first thing is to know the username of the web server. Run this command:

```ps aux | grep httpd```

and you should see at the most left column the username "daemon". This is the username your XAMPP used to run Apache Web Server (the /opt/lampp/bin/httpd).

Finally, do chown the 'wordpress' directory recursively so it owned by 'daemon' username:

```sudo chown -R daemon /opt/lampp/htdocs/wordpress/```

### 5. Set XAMPP Security

Before going to local WordPress installation, set your phpMyAdmin and MySQL/MariaDB root passwords. For example, pma password="root" and MySQL password="root". Run this command and do it:

```sudo /opt/lampp/lampp security```

### 6. Create Database

Now, close Terminal and you can head to browser by typing http://localhost/phpmyadmin. Login with the password you've set by yourself at Step 5. Go to database page and create a new database with the name 'wordpress'.

### 7. Run WordPress Installation

The last step: now visit the address http://localhost/wordpresss > go forward > fill the blanks with Database="wordpress"; Username="root"; Password="root" just as examples you've followed before. See picture below.

When it works (because you've already set chown wordpress/ folder) you'll fill the website info as you wish. Determine username and password as you wish.

### 8. Login to WordPress

Once finished, now visit the address http://localhost/wordpress. You should see the home page of the WordPress site. To manage it, login to Dashboard at the address http://localhost/wordpress/wp-admin.

This is the Dashboard inside of WordPress WMS:

It's all completed and have a good learning with WordPress!

## Understrap Information 🧠🦕

The docs are very through and have all of the getting started instructions included [here](https://usdocu.tarthemes.com/)
