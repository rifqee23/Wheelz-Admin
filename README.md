# Car Rental Admin Website

Welcome to the Car Rental Admin Website repository! This project is designed to manage a car rental service with functionalities including managing car inventory, customer data, reservations, payments, and customer chat support.

## Table of Contents

- [Features](#features)
- [Installation](#installation)
- [Usage](#usage)
- [Database Schema](#database-schema)
- [Contributing](#contributing)
- [License](#license)

## Features

- **Car Inventory Management:** Add, update, and delete car data.
- **Customer Management:** Manage customer information and history.
- **Reservations:** Handle car rental reservations.
- **Payments:** Process and track payments for reservations.
- **Chat Support:** Communicate with customers via chat.

## Installation

1. Clone the repository:
    ```sh
    git clone https://github.com/yourusername/car-rental-admin.git
    ```
2. Navigate to the project directory:
    ```sh
    cd Wheelz-Admin
    ```
3. Install the required dependencies:
    ```sh
    npm install
    ```
4. Set up Tailwindcs:
    
        ```sh
        npm install -D tailwindcss
        ```
       ```sh
        npx tailwindcss init
        ```
   
6. Start tailwind:
    ```sh
    npx tailwindcss -i ./src/input.css -o ./src/output.css --watch
    ```

## Usage

1. Open your browser and go to `http://localhost:3000` to access the admin dashboard.
2. Use the provided login credentials to access the admin functionalities.
3. Manage cars, customers, reservations, payments, and chat from the admin dashboard.

## Database Schema

The database schema includes the following tables:

- **Cars:** Stores information about the cars available for rent.
  - `id`: Primary key
  - `make`: Car make (e.g., Toyota)
  - `model`: Car model (e.g., Corolla)
  - `year`: Year of manufacture
  - `price_per_day`: Rental price per day
  - `status`: Availability status

- **Customers:** Stores customer information.
  - `id`: Primary key
  - `name`: Customer name
  - `email`: Customer email
  - `phone`: Customer phone number
  - `address`: Customer address

- **Reservations:** Stores reservation details.
  - `id`: Primary key
  - `customer_id`: Foreign key referencing the `Customers` table
  - `car_id`: Foreign key referencing the `Cars` table
  - `start_date`: Reservation start date
  - `end_date`: Reservation end date
  - `total_price`: Total price for the reservation
  - `status`: Reservation status (e.g., confirmed, completed, cancelled)

- **Payments:** Stores payment information for reservations.
  - `id`: Primary key
  - `reservation_id`: Foreign key referencing the `Reservations` table
  - `amount`: Payment amount
  - `payment_date`: Date of payment
  - `payment_method`: Method of payment (e.g., credit card, PayPal)

- **Chats:** Stores chat messages between admin and customers.
  - `id`: Primary key
  - `customer_id`: Foreign key referencing the `Customers` table
  - `message`: Chat message
  - `timestamp`: Time of the message

## Contributing

We welcome contributions! Please read our [CONTRIBUTING.md](CONTRIBUTING.md) for details on the code of conduct, and the process for submitting pull requests.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.
