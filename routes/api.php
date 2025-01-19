<?php

// routes/api.php

use App\Models\MenuItem;
use Illuminate\Support\Facades\Route;

// Define the route to fetch the menu items
Route::get('/menu-items', function () {
    return MenuItem::activeMenuItems();  // This will return the active menu items in JSON format
});
