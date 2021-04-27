<p align="center" > <img src="https://2.bp.blogspot.com/-duP2WIppnvM/Vcr5MXUgVaI/AAAAAAAADnY/KhrgLmqRCE0/s1600/hotel-management-online.gif" width="400"></p>
<h1 align="center"> Shereen Chalet, Kalpitiya</h1>

## To run the application

### --prerequisities--

  Following servers and packages should be installed prior to the the application installation

- **xammp server with php version 8**
- **latest version of composer**
- **mySQL server**

### --installation--
  
  Following commands can be followed to run the application successfully

1. **Create a new folder, go inside the folder and open git bash from it** 
2. **Clone the project** 
 ```
 git clone https://github.com/TharinduAB/Hotel-Management-System-for-the-Shereen-Chalet.git
 ```
3. **Install composer packages** 
```
composer install
```
4. **Open the cloned project from VS code IDE**
5. **Change the database name in the .env.example with the relevant DB name and Rename the .env.example as .env**
6. **Make sure to create a new Database inside MySQL DBMS with the DB name given in the .env file**
7. **Generate keys** 
```
php artisan key:generate
```
8. **Do the table migrations** 
```
php artisan migrate
```
9. **Run the server** 
```
php artisan serve
```
10. **Run the application by using the suggested URL in a prefered web browser**

