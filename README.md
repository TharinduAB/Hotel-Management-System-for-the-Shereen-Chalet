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
3. Go inside the cloned project folder using CD command
4. Install composer packages
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

## Contributing
* cmd to create a new feature branch in the repo                                   
        ``git checkout -b newFeatureBranchName``                            
        ``git push origin newFeatureBranchName`` (now check whether it's created in github)
* cmd to checkout to a branch which is already created                              
        ``git checkout featureBranchName``                              
        
When working in your branch,                                                
* if any new file created:                                              
        ``git add newFileName``                         
* if multiple files created, add them all at once:                                      
        ``git add . ``                                                  
        
After doing any modification to the code in your branch,                                                  
* commit it:                                        
        ``git commit -m 'commitName'``                                  
* push it to the featureBranch in github                                        
        ``git push origin featureBranchName``                                   
        
When your featureBranch is ready to merged with the Master branch,                              
* pull the latest updates in github master to local master                              
        ``git checkout master``                                     
        ``git pull``                                            
* make sure to pull the updates in master to your featureBranch also                                
        ``git checkout featureBranchName``                                  
        ``git pull origin master``                                      
* If the pulling(merge) was successful, push the changes to github featureBranch:                               
        ``git push origin featureBranchName``                               
        
* Now this featureBranch can be merged to master                                                                                         
        ``git checkout master``                                             
        ``git merge featureBranchName``                                             
* If everything works(run) perfect, push the updates in local master to github master:                                      
        ``git push``                        
        

## Acknowledgment

## Contributors
