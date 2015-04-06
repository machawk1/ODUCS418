# CS418 Project - Milestone 4

The course project will have students build a "Question & Answer" website akin to those from [StackExchange.com](http://StackExchange.com) (namely, [StackOverflow.com](http://StackOverflow.com)). The project will be broken down into four milestones, where a milestone will consist of requirements to be met by each student's implementation.

Each milestone will have a set of "Base Requirements". Students only need to be concerned with meeting the Base Requirements for the milestone's deliverables. Additional bonus requirements are also provided for students that wish to obtain extra credit on their CS418 grade.

About half way through the milestone (see the [schedule](http://www.cs.odu.edu/~mkelly/semester/2015_spring/cs418/) for due dates), a midway status report will be presented in class by each student. This report will consist of a 2-3 minute presentation (with slides) describing the planning done by the student to meet the milestone's requirements, preliminary design strategies, the status of development, and any further information to signify that progress is being made. A demo is not necessary but screenshots are encouraged. This presentation will be worth 2 of the 25 points for the milestone. You will get 0 of 2 points if you are not present or fail to show progress. Even beginning to think about the problem or develop design is considered progress, so long as you show it in the midway status report.

The four milestones' and midway presentation dates and deadlines will be defined on the course website.


## Project Milestone 4 - Basic Operations

### Requirements (Base)
1. All Base Requirements from Milestones [1](https://github.com/machawk1/ODUCS418/blob/spring2015/milestone1.md), [2](https://github.com/machawk1/ODUCS418/blob/spring2015/milestone2.md), and [3](https://github.com/machawk1/ODUCS418/blob/spring2015/milestone3.md) must be met to obtain full credit on Milestone 4.

### Additional User Features
1. Amend your new user registration form from Milestone 2 to require an e-mail address for registration.
2. Upon the user submitting the user registration form, e-mail the user at the e-mail address supplied. Within this e-mail include a link to "validate" the user account. Your web site must provide the functionality to validate the user.
  * When sending this link, be sure to read the current hostname including port number (e.g., [http://wsdl-docker.cs.odu.edu:12345](http://wsdl-docker.cs.odu.edu:12345)) when building the URI to validate the user account.
3. Until a user has validated their e-mail address, prevent the user from voting.
4. Continue to allow the other user functionalities from previous milestones (e.g., upload an avatar), even if the user has not validated.

### APIs
#### GitHub
1. Allow a user to log into your web site using their GitHub credentials. Validate the credentials using the [GitHub API](https://developer.github.com/v3/).
2. When a user is logged in using their GitHub credentials, use their GitHub avatar as the user's avatar on your web site.
  * This will need to be dynamic. If I am logged in with my GitHub credentials, post, then change my avatar on GitHub, my avatar on your web site ought to reflect this change retroactively.
3. Questions & Answers by a GitHub user should always display their current avatar when the web page is accessed and not the one that existed when the user posted a question/answer.

#### Gravatar
1. Upon a user registering for your web site (i.e., not GitHub users), utilize the [Gravatar API](https://en.gravatar.com/site/implement/) to associate with the user on your system based on the e-mail address the user supplied.
2. Allow a user to override their Gravatar image by uploading a custom avatar, per [Milestone 2](https://github.com/machawk1/ODUCS418/blob/spring2015/milestone2.md).
3. Allow a user to remove their associated avatar to default to a generic avatar image within your system (for the users in the [credentials file](https://github.com/machawk1/ODUCS418/blob/spring2015/credentials.txt)) or to default to their Gravatar image if one exists for their associated e-mail address.

### Requirements (Bonus)
The Docker deployment system has been updated to supply a consistent port number for each student. Completing these requirements are optional but are worth bonus points for a student's CS418 grade.

1. Integrate your Q&A site with the [No CAPTCHA ReCAPTCHA API](https://developers.google.com/recaptcha/intro) by requiring a user to fulfill the CAPTCHA requirement before proceeding with some functionality of your web site. Reuse of [libraries for PHP](https://github.com/google/recaptcha) is discouraged for this requirement (i.e., roll your own implementation to maximize credit).

## Submission

At 3:45pm on the demo day (time modified for exam schedule), a script will clone the GitHub repository [you specified](https://github.com/machawk1/ODUCS418/tree/spring2015/users) in [assignment 1](http://www.cs.odu.edu/~mkelly/semester/2015_spring/cs418/assignments/assignment1.html).

## Deliverables

* Your project repository can contain any number of PHP, HTML, and JavaScript files to support your in-development Q&A site. For credentials to connect to your database when developing, use:

```
host: localhost
username: admin
password: 5pR1nG2OlS
```

The home page for your web site must be located in a file named "index.php".  In addition to the files for the web site, you should also provide a backup of your MySQL database for importing for your project demo. This can be accomplished in the phpMyAdmin Export tab. The resulting file should be a .sql file. This file will be loaded into a MySQL instance on demo day, so verification of the integrity of the dump (i.e., try to import it using phpMyAdmin) is encouraged. Include this file in the root of your project repository as milestone4dump.sql. Include enough questions, answers, and users to effectively evaluate your web site.

We will use a [Docker](https://www.docker.com/)-based deployment scheme on demo day. This system will be equipped with the latest PHP, mySQL, and Apache versions. The instance will also expect the milestone4dump.sql and index.php files to be in the root of your project repository and will assume you used the above credentials for interaction with your database.

**Note: Use of config.ini dropped for this milestone.**

Per the [syllabus](http://www.cs.odu.edu/~mkelly/semester/2015_spring/cs418/syllabus.txt), a brief writeup detailing how each requirement was met, design decisions, programming tricks, and helpful resources consulted is required to be submitted as a hard copy on demo day.
