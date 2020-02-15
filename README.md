Welcome to the AWS CodeStar sample web application
==================================================

This sample code helps get you started with a simple PHP Laravel web
application deployed by AWS Elastic Beanstalk and AWS CloudFormation.

What's Here
-----------

This sample includes:

* README.md - this file
* .ebextensions/ - this directory contains the PHP configuration file that
  allows AWS Elastic Beanstalk to deploy your PHP application.  Note that this
  directory contains a Laravel config file (00laravel.config) that includes a
  pre-defined Laravel application key.  This application key should be replaced
  with one you generate (see https://laravel.com/docs/5.3/installation#configuration) for
  details.
* index.php - this file contains the sample application
* template.yml - this file contains the description of AWS resources used by AWS
  CloudFormation to deploy your infrastructure
* template-configuration.json - this file contains the project ARN with placeholders used for tagging resources with the project ID

Getting Started
---------------

These directions assume you want to develop on your development environment or a Cloud9 environment, and not
from the Amazon EC2 instance itself. If you're on the Amazon EC2 instance, the
virtual environment is already set up for you, and you can start working on the
code.

To work on the sample code, you'll need to clone your project's repository to your
local computer. If you haven't, do that first. You can find instructions in the AWS CodeStar user guide at https://docs.aws.amazon.com/codestar/latest/userguide/getting-started.html#clone-repo.

1. Install PHP. See http://php.net/manual/en/install.php for details.

2. Install composer. See https://getcomposer.org/doc/00-intro.md for
   details.

3. Rename .env.example file and generate the application key:
	
		$ cp .env.example .env
		$ php artisan key:generate
		  
4. Install your dependencies:

        $ php composer.phar install

5. Start the PHP development server:

        $ php artisan serve

6. Open http://127.0.0.1:8000/ in a web browser to view your application.

What Do I Do Next?
------------------

Once you have a virtual environment running, you can start making changes to
the sample PHP web application. We suggest making a small change to index.php
first, so you can see how changes pushed to your project's repository are automatically
picked up by your project pipeline and deployed to the Amazon EC2 instance by AWS Elastic
Beanstalk. (You can watch the pipeline progress on your project dashboard.) Once you've
seen how that works, start developing your own code, and have fun!

Learn more about AWS CodeStar by reading the [user guide][User Guide].  Ask
questions or make suggestions on our [forum][Forum].

[User Guide]: http://docs.aws.amazon.com/codestar/latest/userguide/welcome.html

[Forum]: https://forums.aws.amazon.com/forum.jspa?forumID=248

How Do I Add Template Resources to My Project?
------------------

To add AWS resources to your project, you'll need to edit the `template.yml`
file in your project's repository. You may also need to modify permissions for
your project's worker roles. After you push the template change, AWS CodeStar
and AWS CloudFormation provision the resources for you.

See the AWS CodeStar user guide for instructions to modify your template:
https://docs.aws.amazon.com/codestar/latest/userguide/how-to-change-project.html#customize-project-template

What Should I Do Before Running My Project in Production?
------------------

AWS recommends you review the security best practices recommended by the framework
author of your selected sample application before running it in production. You
should also regularly review and apply any available patches or associated security
advisories for dependencies used within your application.

Best Practices: https://docs.aws.amazon.com/codestar/latest/userguide/best-practices.html?icmpid=docs_acs_rm_sec
