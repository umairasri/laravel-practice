# TINKER (`php artisan tinker`)
- What it is:
    - An interactive playground to test PHP code and Eloquent queries in your live Laravel environment.
    - Exit by typing `exit` or pressing `Ctrl + C`.

- Important Namespace Rule:
    - Because models live in `App\Models`, Tinker needs either:
        - Fully qualified name: `App\Models\Product::all()`
        - Or import it first: `use App\Models\Product;` then `Product::all()`

- Common Examples:
    - **Create a record:** 
      `$p = App\Models\Product::create(['name' => 'Coffee', 'price' => 4.50, 'stock' => 10]);`
      *(Storing in `$p` gives you the newly created model instance to inspect or modify).*
    - **View all records:** 
      `App\Models\Product::all();`
    - **Find by ID:** 
      `App\Models\Product::find(1);`
    - **Filter records:** 
      `App\Models\Product::where('price', '>', 4)->get();`
    - **Update a record:** 
      `$p = App\Models\Product::find(1);`
      `$p->stock = 8;`
      `$p->save();`
    - **Delete a record:** 
      `App\Models\Product::find(3)->delete();`


# ELOQUENT ORM VS RAW SQL (`DB` FACADE)
- **Eloquent ORM (`Product::all()`):**
    - Returns **Model objects** (`App\Models\Product`).
    - Gives you access to model relationships, built-in methods, and easy saving (`$p->save()`).
    - Best for 90% of everyday app development.
- **Raw SQL / DB Facade (`DB::select('SELECT * FROM products')`):**
    - Returns plain PHP **arrays** or standard objects.
    - Bypasses models for maximum performance or complex custom SQL queries.
    - You cannot call Eloquent methods (like `save()`) on raw array results.


# ESSENTIAL ARTISAN COMMANDS
- php artisan serve
    - Starts a local development server for your app.
- php artisan make:model ModelName
    - Creates a new Eloquent model file (app/Models/ModelName.php).
    - Common flags:
        - `-m` : Also creates a database migration file.
        - `-c` : Also creates a controller.
        - `-a` : Creates model, migration, seeder, factory, and controller all at once.
- php artisan migrate
    - Runs all pending database migrations to create or update tables.
- php artisan migrate:rollback
    - Undoes the last database migration batch.
- php artisan migrate:fresh
    - Drops all tables and re-runs all migrations from scratch (clears database).
- php artisan route:list
    - Displays a list of all registered routes in your application, their URLs, and controllers.
- php artisan cache:clear / config:clear
    - Clears cached application data or configuration.

