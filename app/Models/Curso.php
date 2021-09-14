<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/* 
Trabajando con tinker 
php artisan tinker
*/

class Curso extends Model
{
    use HasFactory;

    /*
     En caso de querer asingnar una clase
     a una tabla distinta a la predeterminada 
     usar lo siguiente
     */
    // protected $table ="users";
}