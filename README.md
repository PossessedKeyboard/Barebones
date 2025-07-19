# Barebones
This is the repository for a basic CRUD API using PHP and MySQL Workbench.
As the name says, it is supposed to be the skeleton of an API: the basic CRUD operations, with no binding of parameters whatsoever.

## Table of Contents
- [Objectives](#objectives)
- [Installation](#installation)
- [Instructions](#instructions)
- [Software Architecture](#software-archicteture)
- [Considerations](#considerations)

## Objectives
To be able to create a basic database and make it interactible through a series of URL queries, no front-end required. 

## Installation
This API was constructed using PHP Version 8.3.20 and MySQL Worbench version 8.0.30, so I recommend those versions to be used in the installation and configuration of the project.You can find the instructions for the installation of those respective programs at:

https://www.php.net/manual/en/install.general.php

https://dev.mysql.com/doc/workbench/en/wb-installing.html

This program uses the MySQLi php extension to communicate with the database, which may require additional tinkering for it to be functional. The instructions are as follows:

1. PHP has two ".ini" files: 'php.ini-development' and 'php.ini-production', the former for development enviroments and the latter to production servers. Choose one of the two and change its name to 'php.ini', this will make it the official base file for the language in your computer.

2. You will have to manually unlock the extension inside the 'php.ini' file of your php folder. To do so, open the file with a text editor (I used Notepad on Windowns) and search for the following line:

;extension=mysqli

Remove the semicolon (;) and save the changes made to the file. This should be enough to make it functional.

## Instructions 
After the installations are completed, execute the 'Barebones SQL Script' file to first create the database, so that the API has something to call to.
After that, you may want to manually start the php connection to the database through a command script:

php -S localhost:8000 -t C:\Users\User\Desktop\MEATBONES\CONTROLLER.php

This will jump start php in its padronized port while also setting the specific directory to the file, so that the system has no trouble finding it. I found this to be particularly useful while troubleshooting the API, as just using the connection of the MySQLi extension
wasn´t enough for it to properly function, neither was just starting the php connection through the command prompt: the system has to know exactly where the directory is, otherwise it will not execute. 

The example above shows the directory that I used during the construction of this project. You may put them where you wish, but I recommend that all of the files are in the same foler/directory, as otherwise the program may malfunction.

As the API was made to deliver the output in JSON, set the "Body" section of the Postman Request to 'raw' and the text option ot JSON, otherwise the application will malfunction.

## Software Architecture
This API was created with a MVC (Model View Controller) architecture in mind:

The Model is the 'CRUD.php' file, which will execute the necessary functions to communicate with the database.

The VIEW is being executed through Postman (https://www.postman.com), as this is a back-end project.

The CONTROLLER is located in 'CONTROLLER.php', which will in turn be the fist line to absorb the user input and communicate it through out the rest of the program. As the API has no front-end, it is a rather simple application.

## Observations
You may find that the 'Age' Column in the SQL script is set to 'VARCHAR' instead of 'INT'. This was made to avoid an error in JSON in which it does not compute well with a NULL default value, which is what the coaslence operator is set to in the 'CRUD.php'. Attempt to diverge from this solution resulted in a cascade of error which I was not able to solve at the moment. I fully intend to do so in future versions or projects.

## Considerations 

This API was inspired and partially created following the instructions found in the repository of the php API created by BradTraversy (traversymedia) in the repository available below:

https://github.com/bradtraversy/php_rest_myblog/tree/master/api/category

You will find numerous differences between his project and mine (no use of Apache, different MySQL extensions, among others). While mine is far simpler than his, I tried following the base architecture and design principles.








