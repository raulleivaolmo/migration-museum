# All Our Stories - Migration Museum Interactive Kiosk

Welcome to the All Our Stories interactive kiosk project, part of the Migration Museum's exhibition exploring migration through over 7,000 collected oral stories. This project enables museum visitors to search for stories, vote for their favorites, and even contribute their own stories. The kiosk is designed with accessibility in mind, allowing visitors to connect via their own mobile devices using QR codes.

## Table of Contents

- [Installation](#installation)
- [Database Setup](#database-setup)
- [How to Run](#how-to-run)
- [Usage](#usage)
- [Technologies](#technologies)
- [Contributing](#contributing)
- [License](#license)

## Installation

To install the project, follow these steps:

1. Clone the Repository

   Clone the repository from GitHub or download it as a ZIP file and extract it on your local machine.

   ```sh
   git clone https://github.com/raulleivaolmo/migration-museum
   ```

2. Setup PHP Environment

   This project is built with PHP, so you'll need to set up a PHP environment. Install an Apache server that supports PHP, such as [XAMPP](https://www.apachefriends.org/index.html), especially if you're a beginner. XAMPP comes with everything you need, including Apache, MySQL, and PHPMyAdmin.

3. Install Database

   The project requires a MySQL database. Inside the repository, there's a folder called `db` which contains the necessary SQL files to create the required tables and populate them with sample data.

   - Import the SQL files in the `db` folder into your MySQL server using a tool like PHPMyAdmin (which comes with XAMPP).

     1. Start XAMPP and launch Apache and MySQL services.
     2. Open [PHPMyAdmin](http://localhost/phpmyadmin/).
     3. Create a new database (e.g., `migration_stories`).
     4. Import the SQL files from the `db` folder.

## How to Run

1. Start Apache and MySQL

   Make sure that your server is running Apache and MySQL. If you're using XAMPP, simply start both services using the XAMPP Control Panel.

2. Access the Application

   Place the project folder inside the `htdocs` directory of your XAMPP installation (usually found at `C:\xampp\htdocs`). You can then access the application by navigating to:

   ```
   http://localhost/all-our-stories/
   ```


## Usage

Once the server is running, visitors can interact with the kiosk using the following features:

- Search Stories: Browse through thousands of oral stories about migration.
- Vote: Vote for their favorite stories.
- Contribute: Write and share their own migration stories.

The kiosk is accessible and integrates with users' devices via QR codes, making it easy for users to interact with the content using their own accessibility settings.

## Technologies

- PHP: Backend server-side logic.
- MySQL: Database for storing stories and user interactions.
- HTML/CSS/JavaScript: Frontend interface for the kiosk.

## Contributing

We welcome contributions to the project. Feel free to submit a pull request or open an issue for any bugs or improvements.

## License

This project is licensed under the MIT License.
