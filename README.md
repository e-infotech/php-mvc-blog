# PHP MVC Blog

This is a simple blog application built using PHP and following the Model-View-Controller (MVC) architecture. It uses SQLite as the database for easy setup and portability.

## Features

- View all blog posts
- View individual blog posts
- User registration and authentication
- Create new posts (for authenticated users)

## Setup

1. Clone this repository to your local machine or web server.
2. Ensure PHP 7.4+ is installed and the SQLite extension is enabled.
3. Create the SQLite database by running:
   ```
   cat database/schema.sql | sqlite3 database/blog.sqlite
   ```
4. Configure your web server to use `public/index.php` as the entry point.
5. Visit the site in your web browser.

## Project Structure

- `app/`: Contains the MVC components (Models, Views, Controllers)
- `config/`: Configuration files
- `database/`: SQLite database and schema
- `public/`: Publicly accessible files (CSS, JS, front controller)

## Usage

- Register a new account or log in with the default admin account:
  - Username: admin
  - Password: password
- Once logged in, you can create new blog posts.
- All users (including non-authenticated users) can view blog posts.

## Contributing

Contributions are welcome! Please feel free to submit a Pull Request.

## License

This project is open source and available under the [MIT License](LICENSE).
