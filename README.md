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

FEATURE TESTS

UNIT TESTS

POINTS OF INTEREST
==================

USER PERMISSIONS

SCHEDULED TASKS

MIGRATIONS AND SEEDERS
