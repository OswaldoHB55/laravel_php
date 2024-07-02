<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grup0 extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'grupo';

    protected $fillable =[
        'nombre',
        'descripcion',
    ];
}
