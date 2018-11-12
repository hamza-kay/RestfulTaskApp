# Getting Started
Clone the project repository by running the command below if you use SSH

git clone git@github.com:hamza-kay/RestfulTaskApp.git

If you use https, use this instead

git clone https://github.com/hamza-kay/RestfulTaskApp.git

cd into the project directory and run:

composer install

Be sure to fill in your database details in your .env file before running the migrations:

php artisan migrate

Once the database is settup and migrations are up, run

php artisan serve


# Functionality

Visit Laravel development server <http://127.0.0.1:8000> to see the application in action.

Register on the laravel landing page, then you'll be able to perform crud fucntions on projects and tasks.

For e.g  <http://127.0.0.1:8000/projects uri route will hit projects controller which will return the index blade page displaying projects.

http://127.0.0.1:8000/projects/create uri route will open the create project form.

http://127.0.0.1:8000/projects/1 uri route will show the projects with the id of 1.

The other routes can be found using php artisan route:list

