# Jewelry Store Admin Dashboard
![github](https://github.com/serkalemdelelegn)



## Overview
The Jewelry Store Admin Dashboard is a web application designed for administrators to monitor and manage various aspects of the jewelry store's operations. It provides insights into user data, product inventory, customer comments, and orders, allowing administrators to make informed decisions to optimize business processes.

## Features
- Display total number of users, including admins and regular users.
- View total number of products available in the inventory.
- Monitor customer comments and orders.
- Ability to view detailed information about users, products, comments, and orders.

## Implementation Details
### Technologies Used
- HTML, CSS, JavaScript for frontend development
- PHP for backend development
- MySQL for database management

### File Structure
- `admin.php`: Main dashboard page for administrators.
- `database.php`: PHP file containing database connection and query functions.
- `process_combined_submission.php`: PHP file handling form submissions for email and jewelry prescriptions.
- `README.txt`: This file, containing information about the project.

### Database Schema
Ensure your database has the following tables:
1. `users`: Stores user data, including admins and regular users.
2. `products`: Stores information about the available products.
3. `submmision`: Stores customer comments.
4. `jewelry_submission`: Stores information about customer orders.

## Usage
1. Clone the repository to your local machine.
2. Set up a local server environment (e.g., XAMPP, WAMP).
3. Import the provided database schema into your MySQL database.
4. Configure the database connection in `database.php`.
5. Run the application on your local server and access the admin dashboard.

## Contributing
Contributions to the Jewelry Store Admin Dashboard are welcome. You can fork the repository, make your changes, and submit a pull request.

