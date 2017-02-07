# About This

This is a simple proof of concept for uploading, manipulating and storing files on S3.

You need to do a few things to bootstrap this project

* copy over the .env-example file to .env
** be sure to fill in the AWS section for secret and key. the bucket is fine for testing
* 'touch' this file database/database.sqlite from project root
** you may need to install sqlite, homebrew has it.
* run php artisan migrate from project root. This creates the tables you need
* run composer install
* npm install, if you don't have node download it.
* npm run dev
* start a server with 'php artisan serve'

A think that's it. Except learn a bit about Laravel
--------------------------------------------------- 

Laravel is accessible, yet powerful, providing tools needed for large, robust applications. A superb combination of simplicity, elegance, and innovation give you tools you need to build any application with which you are tasked.

## Learning Laravel

Laravel has the most extensive and thorough documentation and video tutorial library of any modern web application framework. The [Laravel documentation](https://laravel.com/docs) is thorough, complete, and makes it a breeze to get started learning the framework.

If you're not in the mood to read, [Laracasts](https://laracasts.com) contains over 900 video tutorials on a range of topics including Laravel, modern PHP, unit testing, JavaScript, and more. Boost the skill level of yourself and your entire team by digging into our comprehensive video library.

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](http://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
