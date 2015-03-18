# CS418 Project - Milestone 3

The course project will have students build a "Question & Answer" website akin to those from [StackExchange.com](http://StackExchange.com) (namely, [StackOverflow.com](http://StackOverflow.com)). The project will be broken down into four milestones, where a milestone will consist of requirements to be met by each student's implementation.

Each milestone will have a set of "Base Requirements" and "Get Ahead" requirements. Students only need to be concerned with meeting the Base Requirements for the milestone's deliverables. The Get Ahead requirements must be met for the milestone after the milestone in which they are defined (e.g., Milestone 1's Get Ahead requirements will be due as part of Milestone 2), so students can opt to begin working on these if time permits.

About half way through the milestone (see the [schedule](http://www.cs.odu.edu/~mkelly/semester/2015_spring/cs418/) for due dates), a midway status report will be presented in class by each student. This report will consist of a 2-3 minute presentation (with slides) describing the planning done by the student to meet the milestone's requirements, preliminary design strategies, the status of development, and any further information to signify that progress is being made. A demo is not necessary but screenshots are encouraged. This presentation will be worth 2 of the 25 points for the milestone. You will get 0 of 2 points if you are not present or fail to show progress. Even beginning to think about the problem or develop design is considered progress, so long as you show it in the midway status report.

The four milestones' and midway presentation dates and deadlines will be defined on the course website.


## Project Milestone 3 - Basic Operations

### Requirements (Base)
1. All Base Requirements from milestones 1 and 2 must be met to obtain full credit on milestone 3.

### Tagging
1. Allow an ASKER to supply a space delimited set of words (TAGS) that categorize the question. Provide a separate input field on the question asking page for the ASKER to supply these tags.
  * For example, a question asking how to obtain the content of a PHP array might have the tags "php", "dataStructure", "syntax", which would be supplied by the user as `php dataStructure syntax`
2. Store the tags that the ASKER supplies in the database and attribute them to the corresponding question.
3. When displaying a question in your user interface, also display the supplied tags.
4. When a USER selects a tag when viewing a question, provide an additional web page that displays others questions in your database that have also had this tag attributed by ASKERS in the past.

### Administration
1. Provide a special user account (ADMINISTRATOR) that allows the questions in the database to be edited or deleted.
2. Provide a user interface for ADMINISTRATORs to edit or delete questions as well as view user information about individual users including:
  1. The number of questions the user has asked
  2. The sum of the values (SCORE) for the respective user's question. There exists only one SCORE value per user.
3. Allow an administrator to "freeze" a question, which should result in no further answers being able to be submitted by other users as well as preventing the ASKER from marking an answer.
4. An administrator should also be able to "unfreeze" a question, once again allowing answers to be submitted and allowing the question to be marked by the ASKER.

### User
1. Display the user's SCORE adjacent to the user's username any time the username is displayed.
2. Provide a textbox in your interface to allow any registered user to query your database to look up any other user. The result of the lookup must display the user's profile page from milestone 2.
3. Each time a user types a letter in the textbox, perform an Ajax request to query your database, return, and display preliminary results.
  * For example, if two users in your database have usernames "pallen" and "paulo", typing "pa" in the textbox would preliminarily display both user's names with a means to directly access the users' respective profiles.

### Web Standards
1. The HTML on your Q&A website's home page, your question display page, and user profile page must be valid according to <a href="http://validator.w3.org/">W3C's HTML validator</a>.
2. HTML tables must not be used for the design of the web site. Rather, opt for using DIVs with external CSS for styling or the more semantic tags from HTML 5 where appropriate.

## Submission

At 3:00pm on the demo day, a script will clone the GitHub repository [you specified](https://github.com/machawk1/ODUCS418/tree/spring2015/users) in [assignment 1](http://www.cs.odu.edu/~mkelly/semester/2015_spring/cs418/assignments/assignment1.html).

## Deliverables

* Your project repository can contain any number of PHP, HTML, and JavaScript files to support your in-development Q&A site. For credentials to connect to your database when developing, use:

```
host: localhost
username: admin
password: 5pR1nG2OlS
```

The home page for your web site must be located in a file named "index.php".  In addition to the files for the web site, you should also provide a backup of your MySQL database for importing for your project demo. This can be accomplished in the phpMyAdmin Export tab. The resulting file should be a .sql file. This file will be loaded into a MySQL instance on demo day, so verification of the integrity of the dump (i.e., try to import it using phpMyAdmin) is encouraged. Include this file in the root of your project repository as milestone3dump.sql. Include enough questions, answers, and users to effectively evaluate your web site.

We will use a [Docker](https://www.docker.com/)-based deployment scheme on demo day. This system will be equipped with the latest PHP, mySQL, and Apache versions. The instance will also expect the milestone3dump.sql and index.php files to be in the root of your project repository and will assume you used the above credentials for interaction with your database.

As an alternative to the above default configuration, you can provide a `config.ini` file in the root of your repository with the follow key-value pairs. You can customize the values but if the `config.ini` file is provided, it will override the other defaults specified above.

```
[cs418]
dbuser=jatwood
dbpass=Th3h0RROr!
dbname=mycs418database
dbdump=customDumpFilename.sql
```

Per the [syllabus](http://www.cs.odu.edu/~mkelly/semester/2015_spring/cs418/syllabus.txt), a brief writeup detailing how each requirement was met, design decisions, programming tricks, and helpful resources consulted is required to be submitted as a hard copy on demo day.
