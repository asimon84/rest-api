REST API

This is a code sample of an API built using RESTful standards. You can register as a user through the API, and the generated user account will be able to access the API as well as a web application with more information and ability to review reports of data.

REGISTER USER

/api/register

name - Your User Name
email - Your User Email
password - Your password

After posting values for name, email, and password, you will receive a token. Use this token as an Authentication Bearer Token in your API requests. You may also user your new user email and password combination to login to the web portal for more information.

CREATE TOKEN

/api/token/create

email - Your User Email
password - Your password

If your token expires, you can make a post request with your email and password to create a new token.

GET RECORDS

CREATE RECORDS

EDIT RECORDS

DELETE RECORDS

FEATURE TESTS

UNIT TESTS

USER PERMISSIONS

SCHEDULED TASKS

MIGRATIONS AND SEEDERS
