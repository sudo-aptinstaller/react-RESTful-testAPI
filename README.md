## This is a test RESTful API for educational purpose made with PHP 

## _How to setup_
 -  Install xampp
 - Clone the application into your htdocs folder in [default : C:\xampp\htdocs]
 - Editing the .env (if none edit the make a copy using .env.example) [ in .env the DB_DATABASE should be noted down and go into phpmyadmin and create a database under that exact name]
 - Migrations [ in your console (cmd/powershell/git literally anything works can even use the vscode termial using the shortcut ctrl + tilde key )change path to the application folder (where the .env is) and type in 'php artisan migrate' ]
 - On successful migration its time to seed the table like earlier [ in your console under the same path as above enter 'php artisan db:seed --class=AppreciationSeeder']
 - That's it ! you have a working API now, enter 'php artisan serve' and in your console you'll get the host ip which you can use to send CRUD requests.


 ## _API functionalities_
 ### There are mainly 5 request paths for your requests
  - POST -> http://*/api/add-appreciation?username={text}&appreciation={text}&rating={value}
  - PUT -> http://*/api/update-appreciation/{id}?username={text}&appreciation={text}&rating={value}
  - DELETE -> http://*/api/delete-appreciation/{id}
  - GET -> http://*/api/get-all-appreciation
  - GET -> http://*/api/get-appreciation/{id}
