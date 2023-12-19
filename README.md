# Laravel Project

This project aims to make it easier for thrifting enthusiasts to do thrifting from home.

## Getting Started

Follow these instructions to get a copy of the project up and running on your local machine for development and testing purposes.

### Prerequisites

Before you begin, ensure you have the following installed on your machine:

- [Composer](https://getcomposer.org/)
- [PHP](https://www.php.net/)

### Clone the Repository

1. Open your terminal and navigate to the directory where you want to clone the project.

2. Run the following command to clone the repository:

    ```bash
    git clone https://github.com/Carylen/NiThrift.git
    ```

3. Change into the project directory:

    ```bash
    cd NiThrift
    ```

### Install Dependencies

1. Run the following command to install project dependencies using Composer:

    ```bash
    composer install
    ```

### Configure Environment

1. Duplicate the `.env.example` file and rename it to `.env`:

    ```bash
    cp .env.example .env
    ```

2. Open the `.env` file and configure the database and other settings according to your environment.

### Generate Application Key

1. Run the following command to generate the application key:

    ```bash
    php artisan key:generate
    ```

### Migrate Database

1. Run the database migrations to create tables:

    ```bash
    php artisan migrate
    ```

### Serve the Application

1. Start the development server:

    ```bash
    php artisan serve
    ```

   The application should now be accessible at `http://localhost:8000`.

## Built With

- [Laravel](https://laravel.com/) - The PHP framework used
- [Composer](https://getcomposer.org/) - Dependency Manager for PHP


## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details.

