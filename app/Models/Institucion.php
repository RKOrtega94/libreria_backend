<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Institucion extends Model
{
    use HasFactory;

    protected $table = "INSTITUCION";
    protected $primaryKey = "INS_CODIGO";
    public $timestamps = false;

    protected $fillable = [
        "INS_CODIGO" /* PK */,
        "CIU_CODIGO" /* FK Ciudad */,
        "TIP_INS_CODIGO" /* FK Tipo Institucion */,
        "CIC_CODIGO" /* FK Ciclo */,
        "INS_NOMBRE",
        "INS_DIRECCION",
        "INS_TELEFONO",
        "INS_ALIAS",
        "INS_MAIL",
        "INS_SITIO_WEB",
        "INS_NOMBRE_JURIDICO",
        "INS_NOMBRE_COMERCIAL",
        "INS_REPRESENTANTE_LEGAL",
        "INS_RUC",
        "INS_SECTOR",
    ];
}
