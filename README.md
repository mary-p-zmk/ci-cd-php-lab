# PHP CI/CD Lab

![PHP CI Application](https://github.com/mary-p-zmk/ci-cd-php-lab/actions/workflows/php-ci.yml/badge.svg?branch=main)

## Project Description

This project demonstrates a basic PHP application with an automated CI/CD pipeline using GitHub Actions.

The application contains a simple calculator that performs addition and subtraction operations.

## Features

- PHP Calculator with addition and subtraction operations.
- Unit testing using PHPUnit.
- Code style checking using Laravel Pint.
- Automated testing with GitHub Actions.
- Secure use of GitHub repository secrets.

## Technologies

- PHP 8.2
- Composer
- PHPUnit 10.5
- Laravel Pint
- GitHub Actions

## Installation

1. Clone the repository.
2. Install dependencies:

   `composer install`

## Running Tests

Run unit tests:

`./vendor/bin/phpunit tests/Unit`

Check code style:

`./vendor/bin/pint --test`

## CI Pipeline

The GitHub Actions workflow runs automatically when code is pushed to the `main` branch or when a Pull Request targets `main`.

The pipeline performs the following steps:

1. Checks out the repository.
2. Sets up PHP 8.2.
3. Installs Composer dependencies.
4. Checks GitHub Secret configuration.
5. Runs Laravel Pint to check code formatting.
6. Runs PHPUnit unit tests.
