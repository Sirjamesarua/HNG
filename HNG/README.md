# Person API

This project is a simple REST API for performing CRUD operations on a "person" resource. It's built with Laravel.

## Table of Contents

- [Project Information](#project-information)
- [Getting Started](#getting-started)
- [Testing](#testing)
- [Sample usage](#Sample usage)
- [UML](#UML)

## Project Information

This is a simple RESTful API for managing person records. It allows you to create, read, update, and delete person records. The API is built using Laravel.

### Prerequisites

- PHP >= 8.0
- Composer
- Laravel CLI
- Database (MySQL)

### Installation

1. Clone the repository:

   ```bash
   git clone https://github.com/Sirjamesarua/HNG.git
   cd HNG

2. Install dependencies:

   ```bash
   composer install

3. Copy the .env.example file to .env and configure your database connection.

   ```bash
   cp .env.example .env

4. Generate the application key:

   ```bash
   php artisan key:generate

5. Migrate the database:

   ```bash
   php artisan migrate

1. Start the development server:

   ```bash
   php artisan serve

The API should now be accessible at http://localhost:8000.


# TESTING
## To run tests, use the following command:
```bash
   php artisan test
```

# SAMPLE USAGE
## Here's an example of how to interact with the API using cURL:

### Create a Person
```bash
   curl -X POST http://localhost:8000/api -d "name=James Arua"

```

### Read a Person
```bash
   curl http://localhost:8000/api/1

```

### Update a Person:
```bash
   curl -X PUT http://localhost:8000/api/1 -d "name=Updated Name"

```

### Delete a Person:
```bash
   curl -X DELETE http://localhost:8000/api/1

```

### Get all Persons
```bash
   curl -X GET http://localhost:8000/api

```


# UML Link
you can get the diagram of the uml here https://github.com/Sirjamesarua/HNG/blob/stage2/graph.png

![UML Diagram](https://github.com/Sirjamesarua/HNG/blob/stage2/graph.png)

For detailed information about the API and how to use it, check out the [documentation](./DOCUMENTATION.md).
