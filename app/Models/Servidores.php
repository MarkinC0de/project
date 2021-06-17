<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servidores extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_servidor';

    protected $table = "registration_severs" ;

    protected $fillable = [
        'nome', 'link_servidor', 'tags', 'descricao','created_at', 'resumo_servidor'
    ];
}
