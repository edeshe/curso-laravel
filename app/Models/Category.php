<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    // protected $primaryKey = 'idCategories'; // cambia la columna del id

    public $timestamps = false; // no inserta los campos de fecha

    protected $fillable = [
        'name',
    ];
}
