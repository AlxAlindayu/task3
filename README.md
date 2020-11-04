Download this file,

Local Development Server

CodeIgniter 4 comes with a local development server, leveraging PHP’s built-in web server with CodeIgniter routing. You can use the serve script to launch it, with the following command line in the main directory:

php spark serve

This will launch the server and you can now view your application in your browser at http://localhost:8080.

## Server Requirements

PHP version 7.2 or higher is required, with the following extensions installed: 

- [intl](http://php.net/manual/en/intl.requirements.php)
- [libcurl](http://php.net/manual/en/curl.requirements.php) if you plan to use the HTTP\CURLRequest library

Additionally, make sure that the following extensions are enabled in your PHP:

- json (enabled by default - don't turn it off)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php)
- xml (enabled by default - don't turn it off)
