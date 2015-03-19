ODUCS418
========
This GitHub repository will be the basis for submitting assignments for CS418 - Web Programming at Old Dominion University for the Spring 2015 semester, taught by Mat Kelly (<a href="https://github.com/machawk1">@machawk1</a>).

## Student Project Repositories 
Below are links to students' project repositories for the class based on their submission in <a href="http://www.cs.odu.edu/~mkelly/semester/2015_spring/cs418/assignments/assignment1.html">assignment 1</a>. 

* [achverch](https://github.com/andrewchverch/WebProjectCS) ([Milestone 1](https://github.com/andrewchverch/WebProjectCS/6da11c433b2d41c2a95bf6dc9946e050259c13c7))([Milestone 2](https://github.com/andrewchverch/WebProjectCS/commit/253efb06fe0cd3e1151fb12370ff2b04ab4d03ac))
* [acoffman](https://github.com/atc07d/WebProgramming) ([Milestone 1](https://github.com/atc07d/WebProgramming/6cdaf87f2203940c909c14de5dc82822f5709fdb))([Milestone 2](https://github.com/atc07d/WebProgramming/commit/a3c4afe1520a0f628367f96e01dcb66a04c13895))
* [cbliss](https://github.com/thecbliss/cblissCS418) ([Milestone 1](https://github.com/thecbliss/cblissCS418/dc7e4ebe6540ac52c7f67c8a8feb0154b412965c))
* [cteague](https://github.com/chateague/Chas-ODUCS418) ([Milestone 1](https://github.com/chateague/Chas-ODUCS418/21f77c93f2645eae3b6123a53ae65635b006e679))([Milestone 2](https://github.com/chateague/Chas-ODUCS418/commit/37f1be41fdffdac26bc6addf12632b847d0bd05d))
* [dwebste](https://github.com/DWebsterJr/Spring15) ([Milestone 1](https://github.com/DWebsterJr/Spring15/fcc2c3e175fd499180298478018b578c9ed5167a))([Milestone 2](https://github.com/DWebsterJr/Spring15/commit/58f3ff3d97de3456756c977d63673f916b6f048a))
* [jbennett](https://github.com/jbennett122/JBENNETT_CS418) ([Milestone 1](https://github.com/jbennett122/JBENNETT_CS418/d40272425532641df0e1178e5e3417aa048b70ee))([Milestone 2](https://github.com/jbennett122/JBENNETT_CS418/commit/07e47471ca0d65e5a43e0e0105a8639b251c9842))
* [kshena](https://github.com/kshena/Ridi) ([Milestone 1](https://github.com/kshena/Ridi/4d46b914d39229e31c348cd6ffc0191b4d12ce33))
* [mvanacor](https://github.com/mvanacor/cs418Project) ([Milestone 1](https://github.com/mvanacor/cs418Project/e5055b9b44b928039b2d7ff1e5f57c3fcfc34392))([Milestone 2](https://github.com/mvanacor/cs418Project/commit/775e196889120ba5ff9e863cbf4105c9a2e749c5)) 
* [mletchwo](https://github.com/mletchworth/CS-418) ([Milestone 1](https://github.com/mletchworth/CS-418/c33e6368e3fd1a091b409abe5638dce9d90fcea9))([Milestone 2](https://github.com/mletchworth/CS-418/commit/573b557e2e1f3ae474aa4945a443a76ba60c9b8a)) - M2 will be updated with MySQL dump
* [ngoodall](http://github.com/CatLover91/WebDevCourse) ([Milestone 1](http://github.com/CatLover91/WebDevCourse/6dd15914fb64557ca7a3e10dccf557987e4318a6))([Milestone 2](https://github.com/CatLover91/WebDevCourse/commit/b4770e4225ef75ee0185caf17971bd540e8fddc0))
* [rodonnel](https://github.com/rcodonnell/cs418Project) ([Milestone 1](https://github.com/rcodonnell/cs418Project/84857bd784771ae92143699165e9f1b78d5a53bb))([Milestone 2](https://github.com/rcodonnell/cs418Project/commit/33e00126a7ee0055a1905e02d83e3e9d766e0b62))
* [wdougher](https://github.com/wdoug004/CS418Project) ([Milestone 1]())

12/13 students (listed above) submitted pull requests.

## Some useful demo day information

### To be run for each student:

```sh
$ docker run -it -p 80:80 -e MYSQL_PASS="5pR1nG2OlS" -v `pwd`:/app mkelly/lamptest
```

### In the instance that the database creation SQL is not provided
 
```sql
CREATE DATABASE IF NOT EXISTS `lecture4` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `lecture4`;
```


### Enable PHP error reporting

```php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);
```

### Create, Maintain, and Destroy Sessions in PHP
A demo to serve as an example for how to deal with sessions in PHP to maintain a persistent user login. The scripts have been deployed at http://www.cs.odu.edu/~mkelly/semester/2015_spring/cs418/sessionsExample/ but should be portable enough to be run anywhere that can execute PHP scripts (e.g., your XAMPP installation). The [credentials previously provided](https://github.com/machawk1/ODUCS418/blob/spring2015/credentials.txt) can be used to log into the system.
* [index.php](https://github.com/machawk1/ODUCS418/blob/spring2015/sessionsExample/index.php) - checks if a user is logged in. If so, lists questions. If not, redirects to login.php.
* [login.php](https://github.com/machawk1/ODUCS418/blob/spring2015/sessionsExample/login.php) - provides an HTML form for interfacing with the credentials verification script (header.php).
* [header.php](https://github.com/machawk1/ODUCS418/blob/spring2015/sessionsExample/header.php) - included in the login.php script (whose form targets itself) to check if post data has been supplied and check it against a pseudo-database in db.php
* [db.php](https://github.com/machawk1/ODUCS418/blob/spring2015/sessionsExample/db.php) - a pseudo-database to replicate what would be done with MySQL queries but simply returns arrays.
* [question.php](https://github.com/machawk1/ODUCS418/blob/spring2015/sessionsExample/question.php) - takes a HTTP GET parameter of id, which causes a "query" to the data in db.php and returns the appropriate content.
