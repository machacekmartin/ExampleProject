# Example Project

- Example web app, that allows publishing of posts and images (separate)
- ONLY FOR DEMONSTRATION PURPOSES - thus only meant to be used on a localhost setup
- Basic routing is very similiar to what Laravel offers, but ofc way more stripped down
- Uses [scssphp](https://scssphp.github.io/scssphp/) for compiling sass into css

### Setup
0. Put contents of this project inside your htdocs folder of xampp
1. Start local Apache and MySQL
3. Credentials of your database have to be same as in [this file](https://github.com/machacekmartin/ExampleProject/blob/master/config/database.php) 
4. Import [preparelocaldb.sql](https://github.com/machacekmartin/ExampleProject/blob/master/preparelocaldb.sql) into your database (f.e using phpmyadmin)
5. Open localhost in your browser

#### Todo
1. Authentication + users
2. Cross-site scripting and js/html injection
3. UI
4. Final refactor
