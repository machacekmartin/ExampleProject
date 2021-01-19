# Model View Whatever - Pure PHP OOP Web App

- Example MVW web app, that allows publishing of posts and images (separate)
- only meant to be used on a localhost setup
- Uses variation of MVC, where the View doesnt communicate directly with Model, but everything is provided via Controllers.

## Code flow
1. View wants something (e.g. get/post request)
2. Router translates it, calls associated controller & it's function. 
3. Controller now, if needed, calls according model's function (e.g. retrieve/insert data), and then gives view stuff it is supposed to get (e.g. .php page with some data) 
4. The request is now resolved and View is happy for recieving some data it can work with.

- Basic routing is very similiar to what Laravel offers, but ofc way more stripped down
- Uses [scssphp](https://scssphp.github.io/scssphp/) for compiling .scss into .css

### Setup
0. Put contents of this project inside your htdocs folder of xampp
1. Start local Apache and MySQL
3. Credentials of your database have to be same as in [this file](https://github.com/machacekmartin/ExampleProject/blob/master/config/database.php) 
4. Import [preparelocaldb.sql](https://github.com/machacekmartin/ExampleProject/blob/master/preparelocaldb.sql) into your database (e.g. using phpmyadmin)
5. Open localhost in your browser
