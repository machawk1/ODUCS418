ODUCS418
========
This GitHub repository will be the basis for submitting assignments for CS418 - Web Programming at Old Dominion University for the Spring 2015 semester, taught by Mat Kelly (<a href="https://github.com/machawk1">@machawk1</a>).

## Student Project Repositories 
Below are links to students' project repositories for the class based on their submission in <a href="http://www.cs.odu.edu/~mkelly/semester/2015_spring/cs418/assignments/assignment1.html">assignment 1</a>. ** indicates those that still need to present. * indicates those that will need to resolve issues before presenting again. The commit that will be used as the basis for the milestone 1 presentation is linked beside each student. If a modified commit was needed (for example, if the CREATE database command was not in the SQL dump), an additional hash will be supplied (but is not done so below).

* [achverch](https://github.com/andrewchverch/WebProjectCS) ([Milestone 1](https://github.com/andrewchverch/WebProjectCS/6da11c433b2d41c2a95bf6dc9946e050259c13c7))
* [acoffman](https://github.com/atc07d/WebProgramming) ([Milestone 1](https://github.com/atc07d/WebProgramming/6cdaf87f2203940c909c14de5dc82822f5709fdb))
* [cbliss](https://github.com/thecbliss/cblissCS418)* ([Milestone 1](https://github.com/thecbliss/cblissCS418/dc7e4ebe6540ac52c7f67c8a8feb0154b412965c))
* [cteague](https://github.com/chateague/Chas-ODUCS418) ([Milestone 1](https://github.com/chateague/Chas-ODUCS418/21f77c93f2645eae3b6123a53ae65635b006e679))
* [dwebste](https://github.com/DWebsterJr/Spring15)** ([Milestone 1](https://github.com/DWebsterJr/Spring15/fcc2c3e175fd499180298478018b578c9ed5167a))
* [jbennett](https://github.com/jbennett122/JBENNETT_CS418) ([Milestone 1](https://github.com/jbennett122/JBENNETT_CS418/d40272425532641df0e1178e5e3417aa048b70ee))
* [kshena](https://github.com/kshena/Ridi)** ([Milestone 1](https://github.com/kshena/Ridi/4d46b914d39229e31c348cd6ffc0191b4d12ce33))
* [mvanacor](https://github.com/mvanacor/cs418Project) ([Milestone 1](https://github.com/mvanacor/cs418Project/e5055b9b44b928039b2d7ff1e5f57c3fcfc34392))
* [mletchwo](https://github.com/mletchworth/CS-418) ([Milestone 1](https://github.com/mletchworth/CS-418/c33e6368e3fd1a091b409abe5638dce9d90fcea9))
* [ngoodall](http://github.com/CatLover91/WebDevCourse)** ([Milestone 1](http://github.com/CatLover91/WebDevCourse/6dd15914fb64557ca7a3e10dccf557987e4318a6))
* [rodonnel](https://github.com/rcodonnell/cs418Project)** ([Milestone 1](https://github.com/rcodonnell/cs418Project/84857bd784771ae92143699165e9f1b78d5a53bb))

11/13 students (listed above) submitted pull requests.

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
