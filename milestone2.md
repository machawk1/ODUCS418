# CS418 Project - Milestone 2

The course project will have students build a "Question & Answer" website akin to those from [StackExchange.com](http://StackExchange.com) (namely, [StackOverflow.com](http://StackOverflow.com)). The project will be broken down into four milestones, where a milestone will consist of requirements to be met by each student's implementation. 

Each milestone will have a set of "Base Requirements" and "Get Ahead" requirements. Students only need to be concerned with meeting the Base Requirements for the milestone's deliverables. The Get Ahead requirements must be met for the milestone after the milestone in which they are defined (e.g., Milestone 1's Get Ahead requirements will be due as part of Milestone 2), so students can opt to begin working on these if time permits. 

About half way through the milestone (see the [schedule](http://www.cs.odu.edu/~mkelly/semester/2015_spring/cs418/) for due dates), a midway status report will be presented in class by each student. This report will consist of a 2-3 minute presentation (with slides) describing the planning done by the student to meet the milestone's requirements, preliminary design strategies, the status of development, and any further information to signify that progress is being made. A demo is not necessary but screenshots are encouraged. This presentation will be worth 2 of the 25 points for the milestone. You will get 0 of 2 points if you are not present or fail to show progress. Even beginning to think about the problem or develop design is considered progress, so long as you show it in the midway status report.

The four milestones' and midway presentation dates and deadlines will be defined on the course website. 


## Project Milestone 2 - Basic Operations

This milestone extends on the first milestone for building a fully-operational Q&A website. 


### Requirements (Base)
1. All Base Requirements from milestone 1 must be met to obtain full credit on milestone 2.

#### Voting
1. For each answer provided by users, provide the ability for other registered users to vote up or down the answer.
2. The "value" attributed to an answer shall (for simplicity) be assigned based on the sum of "votes up" and "votes down" where a vote up contributes +1 and a vote down contributes -1. 
3. The value must be displayed on the question page.
4. The up and down votes must be stored in the database and associated with the ANSWER.
5. Answers that are not selected by the ASKER shall continue to be displayed, even after the ASKER has marked another answer as correct. The unmarked answers shall be placed secondarily to the marked answer in the descending order of value (see above).
  * For example, if there are four answers to a question with answers two of four selected by the asker and the answers receiving vote counts of 3, 2, 1, 4, respectively and inclusive of the selected answer, the order displays should be Q2, Q4, Q3, and Q1.
6. The question's "value" must be displayed in the question display interface, as determined by the votes.
7. A registered user must not be able to vote on an answer twice. 
8.  Registered users can "vote up" or "vote down" questions, which provide the basis for a question's "value", much like answers.
9. The questions with the top 5 values must be displayed on your web site's home page.

#### User Profiles
1. An interface must be provided to allow a user to upload a profile picture (avatar).
2. A user's avatar should be displayed alongside the question on a question page when the user is the asker. When a user provides an answer to a question, the answerer's avatar must be displayed alongside the answer.
3. Create a PROFILE PAGE that uses PHP query parameters to build the page's contents. This query parameter must indicate a value that can be used to uniquely query the user from your database. On this profile page, display the user's username, avatar, and all questions asked along with the corresponding question's current value. 
4. Provide an HTML form for new users to register for your Q&A website by providing a username and password. When a username is provided for registration that already exists in your database, reject the rejections and ask the user to select another.

## Submission

At 3:00pm on the demo day, a script will clone the GitHub repository [you specified](https://github.com/machawk1/ODUCS418/tree/spring2015/users) in [assignment 1](http://www.cs.odu.edu/~mkelly/semester/2015_spring/cs418/assignments/assignment1.html).

## Deliverables

* Your project repository can contain any number of PHP, HTML, and JavaScript files to support your in-development Q&A site. For credentials to connect to your database when developing, use:

```
host: localhost
username: admin
password: 5pR1nG2OlS
```

The home page for your web site must be located in a file named "index.php". In addition to the files for the web site, you should also provide a backup of your MySQL database for importing for your project demo. This can be accomplished in the phpMyAdmin Export tab. The resulting file should be a .sql file. This file will be loaded into a MySQL instance on demo day, so verification of the integrity of the dump (i.e., try to import it using phpMyAdmin) is encouraged. Include this file in the root of your project repository as milestone2dump.sql. At least 10 questions and 5 users should be included in the dump.

We will use a [Docker](https://www.docker.com/)-based deployment scheme on demo day. This system will be equipped with the latest PHP, mySQL, and Apache versions. The instance will also expect the milestone2dump.sql and index.php files to be in the root of your project repository and will assume you used the above credentials for interaction with your database.

<!--As an alternative to the above default configuration, you can provide a `config.ini` file in the root of your repository with the follow key-value pairs. You can customize the values but if the `config.ini` file is provided, it will override the other defaults specified above.

```
[cs418]
dbuser=admin
dbpass=5pR1nG2OlS
dbname=cs418proj
dbdump=milestone1dump.sql
```-->

Per the [syllabus](http://www.cs.odu.edu/~mkelly/semester/2015_spring/cs418/syllabus.txt), a brief writeup detailing how each requirement was met, design decisions, programming tricks, and helpful resources consulted is required to be submitted as a hard copy on demo day.
