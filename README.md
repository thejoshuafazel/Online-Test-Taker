# Online-Test-Taker
A web based application for online examination for students and teachers! Are you a student? Start Preparing! Are you a teacher? Start Creating a test!

## Things to Improve (Important!)
Some of the things need to be improved ASAP are
* File Names
* File Directory Structure
* MySql - Data insertion parallely
* DRY Code - DRY down the code
* Optimize and Improve the CSS file

## Getting Started
This is a *PHP 7* based online examination platform with *MySql* used for the backend database.
Before running it we need to set up a few things.
The steps below will help you get started with the project locally.

#### Setting up the database
Since this project uses *MySql* for storing the data we need to set it up first.
I used XAMPP for this but you can use any other local server you want.

##### Database and Table
Setup a database with any name you want.
Setup the tables are follows:

| Table Name    | Column Name   |
| ------------- |:-------------:|
| questions     | QID           |
|               | Question      |
|               | OptionA       |
|               | OptionB       |
|               | OptionC       |
|               | OptionD       |
|               | Correct       |
| students      | fname         |
|               | lname         |
|               | inst          |
|               | email         |
|               | pass          |
| teachers      | fname         |
|               | lname         |
|               | inst          |
|               | email         |
|               | fid           |
|               | email         |
|               | pass          |

The datatype can be varchar2 (255)

#### Link database and the project
The following variables must be set which are present in the *Connect.php* file
* dbhost - *localhost* if you are using a local server
* dbuser - Your database username
* dbpwd - Your datbase user password
* dbname - The database name set earlier

#### Running the Application
After completing the steps above, copy the project files to the server (xampp/htdocs/ - If running locally on XAMPP).

Start the server and open the local address of the project.

## Built With
* PHP 7
* Jquery
* HTML + CSS
* MySql

## Authors
* Joshua Fazel
* Krutarth
* Anosh
* Abhishek
