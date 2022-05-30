## Programs that are required to run the proyect

<a href="https://getcomposer.org/">Get composer</a><br>
<a href="https://www.apachefriends.org/download.html">Download XAMPP</a>


## Commands to run the proyect


<h4>1.- composer install</h4>

<h4>2.- copy .env.example .env</h4>

<h4>3.- php artisan key:generate</h4>

<h1>Database</h1>

<h4>The database is already in the proyect, but you need to import this to your localhost</h4>

<h4>Firstable you need to create the DB in blank in your DBMS/SGBD </h4>

<h4>Secondly run the comand: </h4>
    <ul>
        <li>php artisan migrate:fresh</li>
    </ul>
    
<h4>Thirdly you need to import the DB that is actually in the proyect, the name of the DB is preguntados new.sql </h4>

<h4>At the end modify the file .env that is actually in your proyect in the conection of mysql, modify "DB_DATABASE" value that's actually laravel change this for "preguntados"</h4>

🤝
