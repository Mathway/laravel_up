<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    protected $table = "requests";
    protected $fillable = ['user_id','title_request',"text_request","subdivision_id","category_id","date_request"];

}
