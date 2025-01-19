<?php

// In app/Models/MenuItem.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'url', 'icon', 'is_active', 'order'];

    // Optional: Get only active menu items
    public static function activeMenuItems()
    {
        return self::where('is_active', true)->orderBy('order')->get();
    }
}
