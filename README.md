# project_diary
This project uses components from PHP, MySQL, AJAX and Bootstrap framework to build an online diary. The user can create a new profile or login using an existing email-id/password to access his personal diary. The front-end is built using Bootstrap framework while back-end is supported by PHP and user information is stored in MySQL database. Anytime user enters a text on diary page, an AJAX call auto-saves the entered text.

The following files are included in this package:

* access_database.php:
  This files create a connection to database. To use this package, you will need to include YOUR database 
  credentials in this file. This is of the form:
  $link = mysqli_connect("localhost", "my_user", "my_password", "my_db");

* connection.php:
  This files create a database handle that is used in other files. 
  To use this package, you will need to include YOUR database credentials in this file. This is of the form:
  $link = mysqli_connect("localhost", "my_user", "my_password", "my_db");

* login.php:
  This file is used to authenticate user credentials. If a user exists in the database, then his credentials are 
  validated against those stored in the database. Otherwise user is instructed with an error message or suggested
  to register.

* mainpage.php:
  This file contains the front-end for the main diary page. It uses components from Twitter's Bootstrap.
  On successful credentials validation, user is directed to logged-in page where user can access his diary information.

* updatediary.php
  This file updates the content of the diary in the database as user types in text using his terminal. It is called
  by mainpage.php using AJAX call

* index.php
  This file contains the front-end for the main diary page. It uses components from Twitter's Bootstrap.

* Database used for the project can be constructed using the following query:
  
-- Table structure for table `users`


CREATE TABLE IF NOT EXISTS `users` (
  `name` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `diary` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
