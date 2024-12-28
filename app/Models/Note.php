<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;  // Add this line

    protected $fillable = ['note', 'user_id'];  // Also add this to allow mass assignment
}