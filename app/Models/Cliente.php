<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $table = "CLIENTE";
    protected $primaryKey = "CLI_CI";
    protected $keyType = "string";

    protected $fillable = [
        "CLI_CI" /* PK */,
        "CLI_APELLIDOS",
        "CLI_APELLIDOS",
        "CLI_DIRECCION",
        "CLI_TELEFONO",
        "CLI_EMAIL",
        "CLI_CREDITO",
        "CLI_PLAZO",
        "CLI_ALIAS",
        "CLI_CELULAR",
        "CLI_FECHA_NACIMIENTO",
        "VEN_D_CODIGO" /* FK vendedor */,
        "CLI_TITULO",
    ];
}
