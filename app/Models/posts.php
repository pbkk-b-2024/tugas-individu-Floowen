<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class posts extends Model
{
    protected $table = 'posts';
    protected $primaryKey = 'id';
    use HasFactory;
}
