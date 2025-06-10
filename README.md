REST API
========

This is a code sample of an API built using RESTful standards. You can register as a user through the API, and the generated user account will be able to access the API as well as a web application with more information and ability to review reports of data.

USER ENDPOINTS
==============

REGISTER USER

Method = POST

URI = /api/register

name - Your User Name
email - Your User Email
password - Your password

After posting values for name, email, and password, you will receive a token. Use this token as an Authentication Bearer Token in your API requests. You may also user your new user email and password combination to login to the web portal for more information.

CREATE TOKEN

Method = POST

URI = /api/token/create

email - Your User Email
password - Your password

If your token expires, you can make a post request with your email and password to create a new token.

RECORD ENDPOINTS
================

GET RECORDS

Method = GET

URI = /api/record

Use this endpoint to return a "records" array containing all records.

CREATE RECORD

Method = POST

URI = /api/record

This endpoint creates a record.

GET RECORD

Method = GET

URI = /api/record/{id}

Retrieves a specific record tied to the corresponding record ID.

EDIT RECORD

Method = PUT/PATCH

URI = /api/record/{id}

Edits a specific record tied to the corresponding record ID.

DELETE RECORD

Method = DELETE

URI = /api/record/{id}

Deletes a specific record tied to the corresponding record ID.

TESTING
=======

Run this command to run all tests in the application:

php artisan test

To run just the feature tests use this command:

php artisan test --testsuite=Feature

To run just the unit tests use this command:

php artisan test --testsuite=Unit

FEATURE TESTS

/tests/Feature/

This folder contains all the Feature tests, these  are tests that ensure that user functionality is working correctly.

/tests/Feature/API/

This folder contains feature tests relating to the API endpoints and their functionality.

UNIT TESTS

/tests/Unit/

This section contains unit tests for testing units of code. These tests should not touch the database, test the front end, or call an API endpoint.

POINTS OF INTEREST
==================

USER PERMISSIONS

Permissions utilize the laravel ability system to manage access to API endpoints and their functionality.

SCHEDULED TASKS

/routes/console.php

This file contains scheduled tasks that run periodically.

MIGRATIONS AND SEEDERS

/database/migrations/
/database/seeders/

These folders contain the database migrations and data seeders used to build and fill the database.

Run this command to freshly migrate the database:

php artisan migrate

Run this command to seed the database with data:

php artisan db:seed

Run this command to undo the database and prepare for a fresh migration:

php artisan migrate:rollback
