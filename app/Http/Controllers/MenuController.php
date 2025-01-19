<?php

// In app/Http/Controllers/MenuController.php
namespace App\Http\Controllers;

use App\Models\MenuItem;

class MenuController extends Controller
{
    public function index()
    {
        // Fetch active menu items
        $menuItems = MenuItem::activeMenuItems(); // Ensure this returns an array or collection of items
        
       // Pass menuItems to the layout view (which includes main-menu)
       return view('welcome', compact('menuItems')); // Reference layouts.main-menu
    }
}
