<?php

// File: app/Http/Controllers/Api/NavbarController.php
namespace App\Http\Controllers\Api;


use App\Http\Controllers\Controller;
use App\Models\Navbar;

class NavbarController extends Controller
{
    public function index()
    {
        // Fetch all Navbar items ordered by the 'order' field
        return Navbar::orderBy('order', 'asc')->get(); // Return as JSON
    }
}
