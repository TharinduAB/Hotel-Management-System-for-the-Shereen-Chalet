<p align="center" > <img src="https://image.freepik.com/free-vector/hostel-employee-chef-maid-bell-boy-education_335657-3154.jpg" width="400"></p>
<h1 align="center"> Shereen Chalet, Kalpitiya</h1>

<h4 align="center"> Online Hotel management web application</h4>
<p align="center">The users of this web application will be the Administration panel of the Hotel system</p>
<hr/>

## To run the application

### --Prerequisities--

 ###### Following servers and packages should be installed prior to the the application installation

- xammp server with php version 8
- latest version of composer
- mySQL server

### --Installation--
  
######  Following commands can be followed to run the application successfully

1. Create a new folder, go inside the folder and open git bash from it
2. Clone the project
    ```
    git clone https://github.com/TharinduAB/Hotel-Management-System-for-the-Shereen-Chalet.git
    ```
3. Go inside the cloned project folder using CD command**
4. Install composer packages** 
    ```
    composer install
    ```
5. Open the cloned project from VS code IDE
6. Change the database name in the .env.example with the relevant DB name and Rename the .env.example file as .env
7. Create a new Database inside MySQL DBMS with the DB name given in the .env file
8. Generate keys 
    ```
    php artisan key:generate
    ```
9. Do the table migrations 
    ```
    php artisan migrate
    ```
10. Run the server 
    ```
    php artisan serve
    ```
11. Run the application by using the suggested URL in a prefered web browser

## Acknowledgment

## Contributors
