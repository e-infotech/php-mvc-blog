PHP MVC Blog
This is a simple blog application built using PHP and following the Model-View-Controller (MVC) architecture. It uses SQLite as the database for easy setup and portability.
Features

View all blog posts
View individual blog posts
(More features to be added)

Setup

Clone this repository to your local machine or web server.
Ensure PHP 7.4+ is installed and the SQLite extension is enabled.
Create the SQLite database by running:
Copycat database/schema.sql | sqlite3 database/blog.sqlite

Configure your web server to use public/index.php as the entry point.
Visit the site in your web browser.

Project Structure

app/: Contains the MVC components (Models, Views, Controllers)
config/: Configuration files
database/: SQLite database and schema
public/: Publicly accessible files (CSS, JS, front controller)

License
This project is open source and available under the MIT License.
