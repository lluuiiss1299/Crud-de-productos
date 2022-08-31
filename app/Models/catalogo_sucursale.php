<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class catalogo_sucursale extends Model
{
    use HasFactory;
    protected $fillable = [
        'sucId',
        'name'
    ];
    
}
