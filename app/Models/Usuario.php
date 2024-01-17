<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $primaryKey = "usuario_id";
    protected $table = "usuario";
    protected $fillable = [
        "nome",
        "cpf",
        "dt_inclusao",
        "dt_alteracao",

    ];

    // protected $attributes = [
    //     "dt_inclusao",
    //     "dt_alteracao",
    // ];

    public $timestamps = false;
}
