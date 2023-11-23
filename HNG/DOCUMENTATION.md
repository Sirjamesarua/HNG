# Person API Documentation and Project Information

Welcome to the documentation for the Person API. This document provides information on how to use the API, including request/response formats, sample usage, and project-related details.

## Table of Contents

- [Project Information](#project-information)
- [Getting Started](#getting-started)
- [API Endpoints](#api-endpoints)
- [Testing](#testing)
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

# API Endpoints

## Create a new person record

### Endpoint
- URL: `/api`
- Method: POST

### Request Body (JSON)

```json
{
  "name": "John Doe"
}
 ```

 
### Response (201 Created)

```json
{
  "id": 1,
  "name": "John Doe",
  "created_at": "2023-09-10T12:00:00.000000Z",
  "updated_at": "2023-09-10T12:00:00.000000Z"
}

 ```

## Retrieve details of a person by id.

### Endpoint
- URL: `/api/{user_id}`
- Method: GET

### Response (200 OK)

```json
{
  "id": 1,
  "name": "John Doe",
  "created_at": "2023-09-10T12:00:00.000000Z",
  "updated_at": "2023-09-10T12:00:00.000000Z"
}

 ```

## Update the details of an existing person by id.

### Endpoint
- URL: `/api/{user_id}`
- Method: PUT

### Request Body (JSON)

```json
{
  "name": "Updated Name"
}
 ```

 
### Response (200 OK)

```json
{
  "id": 1,
  "name": "Updated Name",
  "created_at": "2023-09-10T12:00:00.000000Z",
  "updated_at": "2023-09-10T12:00:00.000000Z"
}

 ```

## Delete a person by id.

### Endpoint
- URL: `/api/{user_id}`
- Method: DELETE
 
### Response (200 OK)

```json
{
  "message": "Person deleted"
}

 ```

## Retrieve all persons.

### Endpoint
- URL: `/api`
- Method: GET

### Request Body (JSON)

### Response (200 OK)

```json
{
  "id": 1,
  "name": "John Doe",
  "created_at": "2023-09-10T12:00:00.000000Z",
  "updated_at": "2023-09-10T12:00:00.000000Z"
},
{
  "id": 2,
  "name": "James Arua",
  "created_at": "2023-09-10T12:00:00.000000Z",
  "updated_at": "2023-09-10T12:00:00.000000Z"
}

 ```

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
