# Mobis

## Build status
Developement: 
[![Developement](https://circleci.com/gh/Ensibuuko/mobis4/tree/dev.svg?style=shield&circle-token=b71238d856b769b59f66b77c14c0202f5e7a052d)](https://circleci.com/gh/Ensibuuko/mobis4/tree/dev)
Production: 
[![Production](https://circleci.com/gh/Ensibuuko/mobis4/tree/master.svg?style=shield&circle-token=b71238d856b769b59f66b77c14c0202f5e7a052d)](https://circleci.com/gh/Ensibuuko/mobis4/tree/master)

## Getting started
1. Add an entry to your `/etc/hosts` file and point mobis4.dev to your vm:
    1. `192.168.10.10 mobis4.test`
2. If using a homestead VM:
    1. Duplicate a sites section in your `~/Homestead/Homestead.yaml` and enter:
    1. `- map: mobis4.test`
    1. `  to: /home/vagrant/Code/mobis4/public`
    1. Provision the vm
    1. `local$ vagrant up --provision`
    1. `local$ vagrant ssh`
1. If *not* running a VM:
    1. Add a vhost entry
    1. Change the server name to `mobis.dev`
    1. Change the doc root to `/var/www/mobis4/public`
1. `vm$ cd `/home/vagrant/Code`
1. Clone [this repo](https://github.com/Ensibuuko/mobis4) to your machine
    1. `vm$ cd mobis4` to enter the directory
1. Run `vm$ composer update && composer install` to install php dependencies (run from VM)
1. Run `local$ npm update && npm install` to install node dependencies (run from local)
1. Run `local$ npm run dev` to produce `.js` and `.css` assets
1. Produce a `.env` file:
    1. `cp .env.example .env`
    1. Open the `.env` and change values as required (may not need any changes).
1. Create the database and users as described in the `.env` file:
    1. `vm$ mysql -u homestead --password=secret`
    1. `mysql> CREATE DATABASE mobis4;`
    1. `mysql> CREATE USER mobis4@localhost IDENTIFIED BY 'password';`
    1. `mysql> GRANT ALL ON mobis4.* TO mobis4@localhost;`
1. Visit `http://mobis4.test` in your browser
1. *HTTParty*

## Wiki
The wiki is well writen to get you started on the project, no doubt some parts of it will be outdated, it will be helpful to talk to fellow developers about things that are not clear.
Get started with this [Foundational Skills Overview](https://github.com/Ensibuuko/mobis4/wiki/Foundational-Skills-Overview)


## Useful Commands
### Database
**Migrating**
`php artisan migrate:refresh`
`php artisan migrate:refresh --env=testing`

**Seeding**
In development: `php artisan db:seed --class=DevDatabaseSeeder`

## Submitting Issues

As our users begin to use the system, we will uncover issues that will need to be addressed by our development team. These issues fall into one of these categories:

1. Features
2. Enhancements
3. Bugs
4. User Interface Changes

Issues are filed by sending an email to `issues-mobis@ensibuuko.com`. When you submit your issue, you will receive a response whenever the product manager or development team respond to your issue in order to ask clarifying questions or provide an update on the progress of the issue.

When submitting an issue, please note the documentation requirements for each type of issue. The requirements for issues are broken down below:

### Features & Enhancements

Every new feature or enhancement requires a Product Brief that defines the [Jobs to be Done](https://jtbd.info/5-tips-for-writing-a-job-story-7c9092911fc9) and the problems to be solved. A feature is defined as “a new functionality that does not currently exist in the system. Reports and new transaction types fall into this category. Enhancements are changes to existing functionality that go beyond simple aesthetic changes.

A Product Brief is a document with a series of questions that need to be answered before design and development work on a new feature or enhancement can commence.

When submitting an issue for a new feature or a feature enhancement, copy and paste the following Product Brief template to structure your documentation:

```
## What is it?

- 

## Why?

As a ________
I want to ___________
So I can _________

## Why are we working on this next?
_Add the problem we’re solving (or speculative opportunity we are addressing), why we’re solving it,
any links to customer conversations or research. Clearly explain all facets of the problem and how it
affects different parts of Mobis._

-

## When this story is complete, what will we see?
_How will we determine whether the problem has being solved? Include both qualitative and quantitative measures._

_**When [situation], I want to [motivation], so I can [expected outcome].**_

- [ ]

## What problems do we need to solve?
_Describe the problems to be solved in order to deliver value to our customers._

### Process Problem

-

### Performance Problem

-

### Design Problem

-

## What are future considerations that must be accounted for?
_What should we keep in mind when designing this feature? What upcoming ideas rely on this feature or enhancement being added to the product?_

-

## Reference & Further Reading

-

```

Always use plain simple English, no technical terminology or codenames. Write this document as you would describe the problem to a colleague face to face.

*Note:* Issues are written in a simple markup language called [Markdown](https://github.com/adam-p/markdown-here/wiki/Markdown-Cheatsheet). Github also provides a set of tools for adding headings, lists, checkmarks, etc. to your Product Brief.

### Bugs

Issues filed for bugs or errors that are discovered through use of the Mobis application will require step-by-step directions — ideally with screenshots or photos of the screen — of how to reproduce the bug. If an action results in an error, it would be helpful to include the error message in the Github Issue. You can find errors in the `#dev-mobis4-alerts` Slack channel.

Bug reports should also include:
1. A clear title
2. Any background notes: operating system, browser version
3. Why is it important? (i.e. it prevents the customer from using the software vs. the customer doesn’t like the colour)

An example bug report would look like this:

```
## Steps to reproduce
_Minimized, easy-to-follow steps that will trigger the described problem. Include any special setup steps._

1. Go to https://en.wikipedia.org with Internet Explorer version 10.0;
2. Make sure you are logged in;
3. Select "My Preferences" menu;
4. Go to "Gender" and select female gender from box list;
5. Click "Save" button.

## Actual Results
_What the application did after performing the above steps._

"There is no female gender in front of my user name."

## Expected Results
_What the application **should** have done, if there was no bug._

"My gender is shown in front of my user name."
```

You can see an example error [in the issue that was filed here](https://github.com/Ensibuuko/mobis4/issues/536). That issue was fixed :)

### User Interface Changes

Any requested user interface design changes will require screenshots and explanations for what needs to change and why. Any feedback you've received from users would also be great information to have.

## Labeling Issues

We will distinguish between each of these types of issues using Labels, which you'll see when you view the list of issues. This will help us prioritize and plan the work that needs to be done in order to get our customers onboarded and using Mobis.

We will use the following labels to differentiate between the issue types:

1. [Feature](https://github.com/Ensibuuko/mobis4/issues?q=is%3Aopen+is%3Aissue+label%3Afeature)
2. [Enhancement](https://github.com/Ensibuuko/mobis4/issues?q=is%3Aopen+is%3Aissue+label%3Aenhancement)
3. [Report](https://github.com/Ensibuuko/mobis4/issues?q=is%3Aopen+is%3Aissue+label%3Areport)
4. [Bug](https://github.com/Ensibuuko/mobis4/issues?q=is%3Aopen+is%3Aissue+label%3Abug)
5. [Design](https://github.com/Ensibuuko/mobis4/issues?q=is%3Aopen+is%3Aissue+label%3Adesign)
6. [Dev Task](https://github.com/Ensibuuko/mobis4/issues?q=is%3Aopen+is%3Aissue+label%3A"dev+task")
