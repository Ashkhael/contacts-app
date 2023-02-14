docker-compose.yml file defines three services: 
 - backend for the Laravel backend
 - frontend for the Vue.js frontend
 - db for the postgres database

The backend service builds the Laravel app using a Dockerfile located in the backend directory, sets environment variables for the database connection and application settings, and depends on the db service. 
The frontend service builds the Vue.js app using a Dockerfile located in the frontend directory, sets the API URL environment variable, and maps port 8080 on the host machine to the container's port 8080. 
The db service uses the official postgres image and sets environment variables for the user and the contacts database, and maps port 5432 on the host machine to the container's port 5432.
All three services are connected to a network named contacts_network which is defined at the bottom of the file.

Additional comments can be found in the respective Dockerfiles

on clone, in root folder run docker-compose up