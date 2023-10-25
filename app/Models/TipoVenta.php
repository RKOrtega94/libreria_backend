<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoVenta extends Model
{
    use HasFactory;

    protected $table = "TIPO_VENTA";
    protected $primaryKey = "TIP_VEN_CODIGO";

    protected $fillable = [
        "TIP_VEN_CODIGO" /* PK */,
        "TIP_VEN_DESCRIPCION",
        "TIP_VEN_ESTADO",
    ];
}
