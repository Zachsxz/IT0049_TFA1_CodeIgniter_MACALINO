# IT0049 TFA1 - From Zero to Four Pages

A basic four-page Point-of-Sale website built with CodeIgniter 4.

## Pages

- `/` Home
- `/about` About
- `/customers` Customer Accounts
- `/users` User Accounts

## Requirements covered

- CodeIgniter 4 project structure
- Base URL configured in `env`
- Routes for all four pages
- `Pages` controller for Home and About
- `Customers` controller with 5 static customer records
- `Users` controller with 5 static user/staff records
- `foreach` loops in the Customer Accounts and User Accounts views
- Navigation links between all four pages
- No database used for the activity

## Run in VS Code

1. Install PHP 8.1+ and Composer.
2. Open this project folder in VS Code.
3. Run `composer install` if the `vendor` folder is not present.
4. Copy `env` to `.env` if needed.
5. Confirm `app.baseURL = 'http://localhost:8080/'` in `.env`.
6. Run `php spark serve`.
7. Open `http://localhost:8080/` in your browser.

## Database export

The activity uses no database. `database_export.sql` is included as a placeholder for the submission checklist.
