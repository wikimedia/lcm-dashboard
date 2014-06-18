Language Coverage Matrix - Dashboard (lcm-dashboard)
====================================================
The Language Coverage Matrix Dashboard is a visualization of the data about
language coverage in WikiMedia Projects.

This project is a WikiMedia Foundation initiative to present information about
the availability of language tools for various languages in the WikiMedia
universe and to track their progress.

Language Coverage Matrix
------------------------
The Matrix document contains information about the languages that are currently
covered across various WikiMedia projects.

1. src/project-langdb.csv - This file contains information about the languages
in which Wikipedia or any other WikiMedia project exists.
2. src/incubator-langdb.csv - This file contains information about the
languages which are present in the incubator and do not have any active
WikiMedia projects.

These files are periodically reviewed and updated.

Language Coverage Dashboard
---------------------------
The Language Coverage dashboard will be a visual representation of the matrix 
data. It will provide features to:

1. Search languages.
2. Query information about the features available.
3. Compare language coverage over a period of time.
4. Visually present information.

## Instalation

* Clone this repository using the following command:
  * https://github.com/wikimedia/lcm-dashboard.git
or you can simply download zip version / ssh / subversion / HTTPS clone

* Create the database:
  * Database Name : lcmdashboard
  * host : localhost
  * username : root
  * password : root

* If you have different username and password then go to lib directory where you will find dbconnect.php file. You just have to alter the file using your username and password and save it.
* Create the tables and enter the data from the dump. To do that, enter the database directory and do the following:
* If you are using command line version of MySQL, then type the following commands:
  * > mysql -u username -p lcmdashboard < lcmdashboard.sql
  * > mysql -u username -p lcmdashboard < data.sql
* If you are using phpmyadmin GUI version, import lcmdashboard.sql and data.sql.
* Your database is created.
* Go to localhost/server to run this project.
