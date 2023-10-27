<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoInstitucion extends Model
{
    use HasFactory;

    protected $table = "TIPO_INSTITUCION";
    protected $primaryKey = "TIP_INS_CODIGO";
    public $timestamps = false;

    protected $fillable = [
        "TIP_INS_CODIGO" /* PK */,
        "TIP_INS_NOMBRE",
    ];
}
