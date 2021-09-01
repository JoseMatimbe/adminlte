<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Estudante extends Model
{
    use HasFactory;

    protected $fillable = [

        'id',
        'name',
        'email',
        'celular',
        'balance',
        'created_by',
       

    ];
}
