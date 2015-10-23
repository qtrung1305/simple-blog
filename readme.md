## Simple blog with Laravel 5.1 and Bootstrap 3

## System Requirements

We built this to run on a  machine with PHP 5.5 and MySQL 5.5.

## Installation

Please check the system requirements before installing.

1. You may install by cloning from github
  * Github:
    * `git clone https://github.com/qtrung1305/simple-blog`
2. Enter your database details in `.env` file on root folder
3. Run `php artisan migrate` to setup your database.
4. Execute below commands to seed your tables, before executing this commands run `composer dump-autoload` to load published table seeders to the class map.
   - `php artisan db:seed --class=ArticlesTableSeeder`
5. Finally, you can simply run `php artisan serve`

### Support
If you wish to support this project, send email to me: `qtrung1305@gmail.com`
