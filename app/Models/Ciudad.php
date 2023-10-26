<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    use HasFactory;

    protected $table = "CIUDAD";
    protected $primaryKey = "CIU_CODIGO";
    public $timestamps = false;

    protected $fillable = [
        "CIU_CODIGO" /* PK */,
        "PROVI_CODIGO" /* FK Provincia */,
        "CIU_NOMBRE",
        "CIU_COD_TELEFONO",
        "CIU_ZONA_C",
        "CIU_ZONA_S",
    ];
}
