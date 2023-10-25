<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $table = "USUARIO";

    protected $primaryKey = "USU_CODIGO";
    protected $keyType = "string";

    protected $fillable = [
        "USU_CI",
        "USU_APELLIDOS",
        "USU_NOMBRES",
        "USU_DIRECCION",
        "USU_TELEFONO",
        "USU_EMAIL",
        "USU_CODIGO" /* PK */,
        "DEP_CODIGO" /* FK Departamento */,
        "CIU_CODIGO" /* FK Ciudad */,
        "USU_LOGIN",
        "USU_CLAVE",
        "USU_FAC_INI",
        "USU_FAC_FIN",
        "USU_CHE_INI",
        "USU_CHE_FIN",
        "USU_FIRMA",
        "USU_TITULO",
    ];
}
