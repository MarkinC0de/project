<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servidores extends Model
{
    use HasFactory;

    protected $table = "registration_severs" ;

    protected $fillable = [
        'nome', 'link-servidor', 'tags'
    ];
}
