# When you clone the repository, you need to do this in the terminal:
    1. npm install
    2. composer install
    3. cp .env.example .env (MAC/Linux)
    4. php artisan key:gnerate

# Terminal Commands:
    - php artisan make:controller NameController (name singular PascalCase)
    - php artisan make:model NameModel (name singular PascalCase)
    - php artisan make:migration name_of_migration
    - php artisan make:migration create_NameOfTable_table
    - php artisan migrate (run all migrations that have not yet been executed)
    - php artisan migrate:rollback (Rollback migrations and return to the state prior to the last execution of the migrations)
    - php artisan migrate:reset (Delete all migrations and all data)
    - php artisan make:seeder UsersTableSeeder
    - php artisan db:seed --class=UsersTableSeeder
    -php artisan migrate:fresh
    


    

    




