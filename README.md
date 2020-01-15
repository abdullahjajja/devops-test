# devops-test

Kurt Geiger DevOps test

KGDevOpsInterview.json is a CF template that will spin up an EC2 instance. Tasks:

1) fix the errors in the template
2) tag the EC2 instance with with the key 'Name' and the value your first and last name
3) modify the stack so that yum update is executed when the instances comes up
4) output the EC2 instance ID
5) put the instance behind an ALB (application load balancer)

Bonus points:

6) create an SQS queue in Cloudformation in a different stack
7) using Cloudformation, modify the EC2 instance template in order to allow the following command to be executed from the EC2 instance:

```sh
aws sqs get-queue-url name-of-the-created-queue
```

test.rb is a simple Chef recipe that installs Apache and writes 'Hello world' in /etc/motd. Tasks:

1) fix the syntax/errors in the recipe
2) set httpd to be enabled at boot time
3) create a *nix username called your firstname.lastname using the 'user' Chef resource

Bonus points:

4) using Chef, create a cronjob that executes a test command that runs every day at 5.45 AM
5) using Chef, set the timezone to Europe/London

Kurt Geiger DevOps scripting test

Prerequisites

You should have a suitable working environment, which includes a computer with Internet connection that you can write a script on. 

You may use the Internet to search for ideas etc., as you would with any normal task at work, but we want to see what you can do on your own so getting someone to help you out is forbidden.

Task

In the scripting language of your choice (i.e. Python, Ruby, Perl, bash), write some code to query the Brewdog API and return some information to the user.

As a starting point, connect to the API at https://api.punkapi.com/v2/beers, get the results and print them out. This API is also mirrored at https://s3-eu-west-1.amazonaws.com/kg-it/devopsTest/api-punkapi-com-v2-beers.json in case the above is not working.

You should then modify your script to just print out the beer name (the name field) and the ABV field for each beer, separated by a comma (CSV format). You may find using a JSON parser useful at this point.

The start of the output should look something like the below, yours may differ slightly, that's OK:

```sh
Buzz,4.5
Pilsen Lager,6.3
Electric India,5.2
```

Bonus section

Do one (or more!) of the following:

* Modify your script to only return beers with an ABV greater than a specified value. This value can be hardcoded in your script, or for even more bonus points it can be a parameter chosen by the user of the script, i.e. ./getBeersGreaterThan 6
* Modify your script to sort the beers by the ABV field. The decision to sort in ascending or descending order is up to you
