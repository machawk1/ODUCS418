# CS418 Project - Milestone 1

The course project will have students build a "Question & Answer" website akin to those from [StackExchange.com](http://StackExchange.com) (namely, [StackOverflow.com](http://StackOverflow.com)). The project will be broken down into four milestones, where a milestone will consist of requirements to be met by each student's implementation. 

Each milestone will have a set of "Base Requirements" and "Get Ahead" requirements. Students only need to be concerned with meeting the Base Requirements for the milestone's deliverables. The Get Ahead requirements must be met for the milestone after the milestone in which they are defined (e.g., Milestone 1's Get Ahead requirements will be due as part of Milestone 2), so students can opt to begin working on these if time permits. 

About half way through the milestone (see the [schedule](http://www.cs.odu.edu/~mkelly/semester/2015_spring/cs418/) for due dates), a midway status report will be presented in class by each student. This report will consist of a 2-3 minute presentation (with slides) describing the planning done by the student to meet the milestone's requirements, preliminary design strategies, the status of development, and any further information to signify that progress is being made. A demo is not necessary but screenshots are encouraged. This presentation will be worth 2 of the 25 points for the milestone. You will get 0 of 2 points if you are not present or fail to show progress. Even beginning to think about the problem or develop design is considered progress, so long as you show it in the midway status report.

The four milestones' and midway presentation dates and deadlines will be defined on the course website. 


## Project Milestone 1 - Basic Operations

This milestone is the first step in building a fully-operational Q&A website. Your first task is to build the basic framework for the site. The topical focus of the site's questions is up to you (e.g., it can be a Q&A site about cars, dogs, programming, etc.) but the functionality must meet the milestone's requirements. See http://stackexchange.com/sites for Q&A sites that already exist or for ideas. Your topic does not need to be original.


### Requirements (Base)

1. The web site must provide a web page that allows a registered user to submit a question to the website. This user is the ASKER in the below requirements.
2. Users must be able to log into your web site using the [credentials supplied](https://github.com/machawk1/ODUCS418/blob/spring2015/credentials.txt). There is no 
need to implement new user registration.
3. The user login process must use the HTTP POST method.
4. Questions shall be stored in a MySQL database with a reference to the ASKER. Answers corresponding to questions shall be stored in the database as well.
5. The question submission interface must minimally consist of a "title" text field and a "content" text field and use HTML forms.
6. For each question, allow other registered users to submit answers to the questions (potentially multiple answers per user per question).
  * Other answers to a question must be displayed along with the associated question.
7. The ASKER shall have the ability to mark the answer they feel answers their question best. See StackOverflow's checkmark on answers as an example of this.
8. The question display interface must minimally consist of the question contents, associated answers, the author of the question/answers, and an indicator of the answer marked by the ASKER.
9. The home page for your web site must provide links to the questions previously asked, minimally including the question title.

### Requirements (Get Ahead)

* Each answer should provide the ability for other registered users to vote up or down the answer.
* The value attributed to an answer shall be (for milestone 1) assigned based on the sum of "votes up" and "votes down" where a vote up contributes +1 and a vote down contributes -1. 
* The up and down votes must be stored in the database and associated with the ANSWER.
* Answers that are not selected by the ASKER shall continue to be displayed, even after the ASKER has marked another answer as correct. The unmarked answers shall be placed secondarily to the marked answer in the descending order of value (see above).
  * For example, if there are four answers to a question with answers two of four selected by the asker and the answers receiving vote counts of 3, 2, 1, 4, respectively and inclusive of the selected answer, the order displays should be Q2, Q4, Q3, and Q1.
* The question's "value" must be displayed in the question display interface, as determined by the votes.
* A registered user must not be able to vote on an answer twice. 
* Registered users can "vote up" or "vote down" questions, which provide the basis for a question's "value", much like answers.
* The questions with the top 5 values must be displayed on your web site's home page.

## Submission

At 3:00pm on the demo day, a script will clone the GitHub repository [you specified](https://github.com/machawk1/ODUCS418/tree/spring2015/users) in [assignment 1](http://www.cs.odu.edu/~mkelly/semester/2015_spring/cs418/assignments/assignment1.html).

## Deliverables

* Your project repository can contain any number of PHP, HTML, and JavaScript files to support your in-development Q&A site. For credentials to connect to your database when developing, use:

```
host: localhost
username: admin
password: 5pR1nG2OlS
```

The home page for your web site must be located in a file named "index.php". In addition to the files for the web site, you should also provide a backup of your MySQL database for importing for your project demo. This can be accomplished in the phpMyAdmin Export tab. The resulting file should be a .sql file. This file will be loaded into a MySQL instance on demo day, so verification of the integrity of the dump (i.e., try to import it using phpMyAdmin) is encouraged. Include this file in the root of your project repository as milestone1dump.sql. At least 10 questions and 5 users should be included in the dump.

We will likely using a [Docker](https://www.docker.com/)-based deployment scheme on demo day. This system will be equipped with the latest PHP, mySQL, and Apache versions. The instance will also expect the milestone1dump.sql and index.php files to be in the root of your project repository and will assume you used the above credentials for interaction with your database.

Per the [syllabus](http://www.cs.odu.edu/~mkelly/semester/2015_spring/cs418/syllabus.txt), a brief writeup detailing how each requirement was met, design decisions, programming tricks, and helpful resources consulted is required to be submitted as a hard copy on demo day.
