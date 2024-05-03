# Learning Path Creator

## Description:
The Learning Path Creator is a web-based application designed to facilitate user registration, login, and navigation through learning paths. It provides a simple interface for users to interact with the system.

## Features:
- **User Registration**: Allows new users to register their details.
- **User Login**: Existing users can log in to access their personalized learning paths.
- **Navigation**: Users can navigate between different learning options and paths.

## Technologies Used:
- `PHP` for server-side logic.
- `MySQL` for database management.
- `HTML` and `CSS` for the web interface.
- `JavaScript` (jQuery) for enhanced interactivity.

## Project Structure:
- **`db_connect.php`**: Establishes the connection to the database.
- **`landing.php`**: The main landing page that links to registration and login.
- **`login.php`**: Handles user authentication.
- **`register.php`**: Handles the registration of new users.
- **`stylesheet.css`**: Contains CSS styles for the application.
- **`.idea`**: IDE-specific settings for project management (not typically modified manually).

## Installation and Setup:
1. **Clone the repository**: Clone the project files from the repository to your local machine or server.
2. **Database Setup**:
   - Create a database named learningpath.
   - Import the provided SQL file to set up the necessary tables.
3. **Configure `db_connect.php`**:
   - Set your database connection details (`servername`, `username`, `password`, and `dbname`) according to your server configuration.
4. **Run the application**: Host the files on a PHP-enabled server and access the `landing.php` through your web browser.

## Usage:
Navigate to the landing page and choose either to register as a new user or log in if already registered. Follow the prompts to fill in the required fields and proceed accordingly.  
