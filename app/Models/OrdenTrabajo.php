<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrdenTrabajo extends Model
{
    use HasFactory;

    protected $table = "ORDEN_TRABAJO";
    protected $primaryKey = "OR_CODIGO";
    protected $keyType = "string";

    protected $fillable = [
        "OR_CODIGO" /* PK */,
        "USU_CODIGO" /* FK Usuario */,
        "OR_FECHA",
        "PROV_CODIGO" /* FK Proveedor */,
        "OR_ESTADO",
        "OR_OBSERVACION",
    ];
}
