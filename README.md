<p align="center"><a href="https://github.com/mxsgx/undisputed-department-store" target="_blank"><img src="https://raw.githubusercontent.com/mxsgx/undisputed-department-store/main/storage/app/images/logo-full.png" width="400" alt="Undisputed Department Logo"></a></p>

<p align="center">
<a href="https://github.com/mxsgx/undisputed-department-store/blob/main/LICENSE"><img src="https://img.shields.io/github/license/mxsgx/undisputed-department-store" alt="License"></a>
</p>

## About Project

Undisputed Department is a clothing brand from Yogyakarta, founded by Muhammad Khafid Azzam. The purpose of this project
is to complete an assignment for the Digital Business course and as a form of community service activity to apply
science and technology.

## Getting Started

### System Requirements

- PHP with version `8.3` or higher
    - Composer installed
- MySQL / MariaDB
- Node.js with version `20.x` or higher

### Installation

This installation guide is intended for **DEVELOPMENT** purpose only.

1. Clone this repository
    ```shell
    git clone https://github.com/mxsgx/undisputed-department-store.git
    cd undisputed-department-store
    ```

2. Install dependencies
    ```shell
    composer install
    composer update
    ```

3. Setup configuration
    ```shell
    cp .env.example .env
   php artisan key:generate
    ```
   Then edit `.env` file with your favorite editor.

4. Run database migrations and seeder
    ```shell
    php artisan migrate --seed
    ```

5. Run app server
    ```shell
    php artisan serve
    ```

6. Run Vite for assets compilation
    ```shell
    npm run dev
    ```
7. Now you can access application at [http://localhost:8000](http://localhost:8000)

## License

The project _currently_ is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
