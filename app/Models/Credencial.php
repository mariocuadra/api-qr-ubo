<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Credencial extends Model
{
    use HasFactory;


    protected $table ='credencial_persona';
    protected $primaryKey = 'idcredencialpersona';

}
