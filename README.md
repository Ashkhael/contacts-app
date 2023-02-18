docker-compose.yml file defines three services: 
 - backend for the Laravel backend
 - frontend for the Vue.js frontend
 - db for the postgres database

The backend service builds the Laravel app using a Dockerfile located in the backend directory, sets environment variables for the database connection and application settings, and depends on the db service. 
The frontend service builds the Vue.js app using a Dockerfile located in the frontend directory, sets the API URL environment variable, and maps port 8080 on the host machine to the container's port 8080. 
The db service uses the official postgres image and sets environment variables for the user and the contacts database, and maps port 5432 on the host machine to the container's port 5432.
All three services are connected to a network named contacts_network which is defined at the bottom of the file.

Additional comments can be found in the respective Dockerfiles

Clone, in root folder run docker-compose up

BACKEND
A barebone laravel app using infyom for templating, with three database tables - contacts, phones and contacts_phones junction table.
API is for the simplicity sake not behind any auth currently, (can be quickly implemented with Sanctum)
For migrations and seeding run docker exec contacts_app_backend php artisan migrate --seed

FRONTEND
A simple Vuejs contact management app using bootstrap for design and axios for fetching data, as well as Vue Router 