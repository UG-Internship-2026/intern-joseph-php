# PHP Student Management System

A simple web-based Student Management System built with **PHP** and MySQL. The project demonstrates how to build a database-driven **PHP** application using **PDO**, prepared statements, **CRUD** operations, server-side validation, and basic search functionality.

## Project Overview

The **PHP** Student Management System allows users to manage student records through a simple web interface.

The system supports creating, viewing, updating, deleting, and searching student records. It was developed as part of a **PHP** web development internship to practice working with MySQL databases, **SQL**, **PDO**, prepared statements, validation, and organized **PHP** project structures.

## Features

- Add new students
- View all students
- View individual student details
- Edit student information
- Delete student records
- Search students
- Search by first name
- Search by last name
- Search by email
- Search by programme
- Server-side form validation
- Duplicate email detection
- **PDO** database connection
- Prepared **SQL** statements
- Separate **CSS** files for different pages
- Simple and responsive user interface

## Technologies Used

- **PHP**
- MySQL
- **PDO**
- **HTML5**
- **CSS3**
- **XAMPP**
- Apache
- Git

## Requirements

Before running the project, make sure you have:

- **PHP** 8 or higher
- MySQL
- Apache server
- **XAMPP** or another **PHP** development environment
- A web browser
- Git (optional)

## Installation

## Clone or download the project.

## Place the project inside your XAMPP `htdocs` directory.

## Start Apache and MySQL from the XAMPP Control Panel.

## Open phpMyAdmin through your browser.

## Create the required database and table using the SQL provided in the project's `sql` folder.

## Configure the database connection.

## Open the application through the local Apache server.

## Database Setup

The application uses a MySQL database named:

```sql student_management ```

The main table is:

```sql students ```

The table contains the following columns:

- `id`
- `first_name`
- `last_name`
- `email`
- `programme`
- `created_at`
- `updated_at`

The `id` column is the primary key and is automatically generated.

The `email` column is unique to prevent duplicate student email addresses.

## Configuration

The database connection is stored in:

```text config/database.php ```

The application uses **PDO** to establish a connection to MySQL.

The default local development configuration uses:

```text Host: localhost Database: student_management Username: root Password: empty ```

These settings may need to be changed depending on the local MySQL configuration.

## How to Run

## Start Apache and MySQL in XAMPP.

## Make sure the `student_management` database exists. ## Make sure the `students` table has been created. ## Open a browser. ## Navigate to:

```text [http://localhost/intern-joseph-php/day-04/mini-project/public/](http://localhost/intern-joseph-php/day-04/mini-project/public/) ```

The Student Management System homepage should then be displayed.

## Application Structure

```text mini-project/
 ├── config/ │   
 └── database.php 
 │ 
 ├── database/ 
 │ 
 ├── public/ 
 │   
 ├── index.php 
 │   
 ├── create-student.php 
 │   
 ├── view-student.php 
 │   
 ├── edit-student.php 
 │   └── delete-student.php │ 
 ├── src/ 
 │   
 ├── validation.php 
 │   
 └── css/ 
         │       
         ├── styles.css 
         │       
         ├── create-student.css 
         │       
         ├── edit-student.css 
         │       
         └── view-student.css 
│ 
└── views/ ```

## Database Structure

The `students` table contains:

| Column     | Type            | Description            |
| ---------- | --------------- | ---------------------- |
| id         | BIGINT UNSIGNED | Primary key            |
| first_name | VARCHAR(100)    | Student's first name   |
| last_name  | VARCHAR(100)    | Student's last name    |
| email      | VARCHAR(150)    | Student's unique email |
| programme  | VARCHAR(150)    | Student's programme    |
| created_at | TIMESTAMP       | Record creation time   |
| updated_at | TIMESTAMP       | Record update time     |

## Security Measures

The project uses several basic security practices:

- **PDO** is used for database communication.
- Prepared statements are used for queries containing user input.
- User input is not directly inserted into **SQL** queries.
- Server-side validation is performed before inserting student data.
- Duplicate email addresses are handled.
- Database exceptions are handled using `try/catch`.

Prepared statements help prevent **SQL** injection by separating **SQL** instructions from user-supplied values.

## Validation Rules

The student form validates:

- First name must not be empty.
- Last name must not be empty.
- Email must not be empty.
- Email must be a valid email address.
- Programme must not be empty.
- Email addresses must be unique.

Validation is handled through:

```text src/validation.php ```

## Testing

The application was manually tested during development.

The following functionality was tested:

- Database connection
- Adding a student
- Displaying students
- Viewing individual students
- Editing student information
- Deleting students
- Searching students
- Invalid email validation
- Empty field validation
- Duplicate email handling

**CRUD** operations were tested individually to confirm that changes were correctly reflected in the MySQL database.

## Known Limitations

The project is intended as a learning project and therefore has some limitations:

- There is no authentication system.
- There are no user roles or permissions.
- Error messages are basic.
- The application does not use a **PHP** framework.
- The interface is intentionally simple.
- There is no pagination for large numbers of students.
- Database credentials are stored in a local configuration file.

## Bonus Features

The project includes additional improvements beyond the basic **CRUD** implementation:

- Student search functionality
- Separate **CSS** files for different pages
- Duplicate email handling
- Reusable validation function
- Prepared statements for database operations
- Organized project structure
- User-friendly navigation between pages

## Screenshots

Screenshots of the application can be added to this section.

Recommended screenshots include:

## Student Management System homepage

## Create Student page ## View Student page ## Edit Student page ## Search results ## Delete functionality

Example:

```markdown ![Student Management System](screenshots/student-list.png) ```

## What I Learned

Through this project, I learned how to:

- Connect **PHP** applications to MySQL.
- Work with relational databases.
- Create and use database tables.
- Write basic **SQL** queries.
- Perform **CRUD** operations.
- Use **PDO** in **PHP**.
- Use prepared statements.
- Retrieve data using `fetch()` and `fetchAll()`.
- Process **HTML** form submissions.
- Work with `**GET**` and `**POST**` requests.
- Validate user input on the server.
- Handle database exceptions.
- Work with unique database constraints.
- Build reusable **PHP** functions.
- Organize a **PHP** project into different directories.
- Separate page structure from **CSS** styling.
- Build a complete database-driven **PHP** application.

## Challenges Encountered

Some challenges encountered during development included:

- Understanding how **PDO** connects **PHP** to MySQL.
- Understanding prepared statements and placeholders.
- Passing IDs between different pages.
- Updating the correct database record.
- Handling duplicate email addresses.
- Implementing search with `**LIKE**`.
- Understanding the difference between `query()` and `prepare()`.
- Organizing the project files.
- Designing separate styles for different pages.

## How I Solved Them

The challenges were solved by breaking the application into smaller features and testing each feature individually.

For database operations, **PDO** and prepared statements were used to safely interact with MySQL.

For **CRUD** operations, each operation was implemented separately before connecting the pages together.

For validation, a reusable `validateStudent()` function was created in `validation.php`.

For duplicate emails, the database's unique constraint was combined with **PDO** exception handling.

For searching, a prepared statement with `**LIKE**` was used and the search value was passed as a parameter.

The interface was then improved by creating separate **CSS** files for the main page, create page, edit page, and view page.

## Future Improvements

Possible improvements for future versions include:

- Add user authentication.
- Add user roles and permissions.
- Improve error message styling.
- Add pagination.
- Add sorting functionality.
- Add confirmation before deleting students.
- Add better responsive design for mobile devices.
- Add student profile pages.
- Add more advanced filtering.
- Add dashboard statistics.
- Add automated tests.
- Improve security for production deployment.
- Move sensitive configuration values into environment variables.
- Introduce a **PHP** framework such as Laravel.

## Conclusion

The **PHP** Student Management System successfully demonstrates the fundamentals of building a database-driven **PHP** application.

The project combines **PHP**, MySQL, **PDO**, **SQL**, **HTML**, and **CSS** to provide a functional student management system with **CRUD** operations, search, validation, and basic security practices.

This project also provides a foundation for progressing from plain **PHP** development to more advanced **PHP** frameworks and application architectures.