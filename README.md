<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# Venue Vista

Venue Vista is a web application built with PHP Laravel, MySQL, and front-end technologies like HTML, CSS, JavaScript, and Bootstrap. It serves as a platform for venue booking where users can browse available venues, make bookings, and administrators can manage venues, locations, customers, and booking details.

### Features

-   User Registration and Authentication: Users can sign up for an account and log in securely.

-   Venue Browsing: Users can browse through available venues, view details, and make bookings.
-   Admin Dashboard: Administrators have access to a dashboard where they can manage venues, locations, customers, and booking details.
-   Venue Creation: Admins can create new venues with details such as capacity, amenities, and pricing.
-   Location Management: Admins can manage different locations where venues are situated.
-   Booking Management: Admins have control over booking details, allowing them to view, edit, or delete bookings as necessary.

## Installation

To run Venue Vista locally, follow these steps:

1. In your root folder, clone the project file using the command

```bash
git clone https://github.com/mokammeltanvir/Venue-Vista.git
```

2. Open the terminal (bash/cmd). Then go to the project folder using the command

```bash
  cd Venue-Vista
```

3. Then install the required files and libraries using

```sh
composer install
```

4. Then create a .env file and generate a key for this project using the command

```sh
cp .env.example .env

php artisan key:generate
```

5. Then compile all CSS & JS files together using this command

```sh
npm install && npm run dev
```

or

```sh
yarn install && yarn run dev
```

6. Create a database in MYSQL and connect it with your project by updating .env file.

7. After connecting the db with the project, then run the command

```sh
php artisan migrate
```

```sh
php artisan db:seed
```

After completing the migration and seeding of db, you will have 1 System Admin ready for login in this project as 'admin'.

A. Admin -> Admin
Email -> admin@venuevista.com
Pass -> admin1234

Finally, we are ready to run our project using this command!

```sh
php artisan serve
```

The application should now be accessible at http://localhost:8000.

## Contributing

Contributions are welcome! If you find any bugs or have suggestions for improvements, please open an issue or create a pull request.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT)

## Acknowledgements

Special thanks to the Laravel community for their excellent documentation and resources.

##

Feel free to reach out to [mokammeltanvir](https://github.com/mokammeltanvir) for any questions or further assistance. We hope you enjoy using Venue Vista!
