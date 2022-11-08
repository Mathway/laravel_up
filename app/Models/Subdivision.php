<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subdivision extends Model
{
    use HasFactory;
    protected $table = "subdivisions";
    protected $fillable = ['name', 'address',"contact"];
}
