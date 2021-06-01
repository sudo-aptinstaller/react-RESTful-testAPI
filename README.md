## This is a test RESTful API for educational purpose made with PHP 

## _How to setup_
 -  Install xampp
 - Clone the application into your htdocs folder in [default : C:\xampp\htdocs]
 - Editing the .env (if none edit the make a copy using .env.example) [ if you are using mysql then, in .env the DB_DATABASE value should be noted down and go into phpmyadmin and create a database under that exact name]
 - Migrations [you can comment out sqlite in .env to use mysql, incase you are using sqlite, make a file database.sqlite in the databases folder, where there is a file called .add_sqlite_db_here] [ in your console (cmd/powershell/git literally anything works can even use the vscode termial using the shortcut ctrl + tilde key )change path to the application folder (where the .env is) and type in 'php artisan migrate' ] 
 - On successful migration its time to seed the table like earlier [ in your console under the same path as above enter 'php artisan db:seed --class=itemSeeder']
 - That's it ! you have a working API now, enter 'php artisan serve' and in your console you'll get the host ip which you can use to send CRUD requests.


 ## _API functionalities_
 ### There are mainly 5 request paths for your requests
  - POST -> http://*/api/add-item?task_name={text}&task_description={text}&task_deadline={date-string}
  - PUT -> http://*/api/update-item/{id}?task_name={text}&task_description={text}&task_deadline={date-string}
  - DELETE -> http://*/api/delete-item/{id}
  - GET -> http://*/api/get-all-item
  - GET -> http://*/api/get-item/{id}


## _Example (php artisan serve -> PHP 7.4.10 Development Server (http://127.0.0.1:8000) started)
 - POST -> http://127.0.0.1:8000/api/add-item?task_name=Shopping&task_description=Need To Go Shopping Asap.&task_deadline=2021-02-25