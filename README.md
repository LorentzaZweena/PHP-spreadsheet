---

# PHP Spreadsheet

PHP Spreadsheet is a web-based application that allows users to create, read, update, and delete spreadsheet data using PHP. This repository provides a simple and intuitive interface for managing spreadsheet data, with database integration and AJAX functionality for real-time updates.

## Features

- **Create**: Add new rows of data to the spreadsheet.
- **Read**: View and filter spreadsheet data.
- **Update**: Modify existing rows with real-time updates.
- **Delete**: Remove rows from the spreadsheet.
- **AJAX Integration**: Seamless data updates without page reloads.
- **Bootstrap Design**: Responsive and user-friendly interface.

## Getting Started

### Prerequisites

- PHP 7.4 or higher
- MySQL or MariaDB
- Apache or Nginx web server

### Installation

1. **Clone the repository:**
   ```bash
   git clone https://github.com/LorentzaZweena/php-spreadsheet.git
   ```
2. **Navigate to the project directory:**
   ```bash
   cd php-spreadsheet
   ```
3. **Set up the database:**
   - Create a new database and import the provided SQL dump (`database.sql`) into your MySQL or MariaDB server.
   - Update the database configuration in `config.php` with your database credentials.

4. **Start the web server:**
   - For Apache, place the project in the `htdocs` directory.
   - For Nginx, configure the server block to point to the project directory.

### Usage

1. **Access the application:**
   Open your web browser and navigate to `http://localhost/php-spreadsheet`.

2. **Creating Data:**
   - Use the form provided to add new rows to the spreadsheet.
   - Ensure all required fields are filled out before submitting.

3. **Viewing Data:**
   - The main page displays the spreadsheet data in a tabular format.
   - Use the search functionality to filter data as needed.

4. **Updating Data:**
   - Click on any cell to edit its content.
   - Changes are saved automatically using AJAX.

5. **Deleting Data:**
   - Use the delete button next to each row to remove it from the spreadsheet.

### File Structure

- `index.php`: Main file displaying the spreadsheet data.
- `create.php`: Handles the creation of new rows.
- `update.php`: Processes updates to existing rows.
- `delete.php`: Manages the deletion of rows.
- `config.php`: Database configuration file.
- `assets/`: Contains CSS, JavaScript, and other static files.
- `database.sql`: SQL dump for setting up the initial database.

### Contributing
Contributions are welcome! Please fork the repository and create a pull request with your changes.

#License
This project is licensed under the MIT License - see the LICENSE file for details.


Contributions are welcome! Please fork the repository and create a pull request with your changes.

### License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.
