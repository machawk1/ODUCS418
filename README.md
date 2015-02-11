ODUCS418
========
This GitHub repository will be the basis for submitting assignments for CS418 - Web Programming at Old Dominion University for the Spring 2015 semester, taught by Mat Kelly (<a href="https://github.com/machawk1">@machawk1</a>).

## Student Project Repositories 
Below are links to students' project repositories for the class based on their submission in <a href="http://www.cs.odu.edu/~mkelly/semester/2015_spring/cs418/assignments/assignment1.html">assignment 1</a>.

* [achverch](https://github.com/andrewchverch/WebProjectCS)
* [acoffman](https://github.com/atc07d/WebProgramming)
* [cbliss](https://github.com/thecbliss/cblissCS418)
* [cteague](https://github.com/chateague/Chas-ODUCS418)
* [dwebste](https://github.com/DWebsterJr/Spring15)
* [jbennett](https://github.com/jbennett122/JBENNETT_CS418)
* [kshena](https://github.com/kshena/Ridi)
* [mvanacor](https://github.com/mvanacor/cs418Project)
* [mletchwo](https://github.com/mletchworth/CS-418)
* [ngoodall](http://github.com/CatLover91/WebDevCourse)
* [rodonnel](https://github.com/rcodonnell/cs418Project)

11/13 students (listed above) submitted pull requests.

## Some useful demo day information

### To be run for each student:

```
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
