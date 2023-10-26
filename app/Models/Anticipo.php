<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anticipo extends Model
{
    use HasFactory;

    protected $table = "ANTICIPO";
    protected $primaryKey = "ANT_CODIGO";
    protected $timestamps = false;

    protected $fillable = [
        "ANT_CODIGO" /* PK */,
        "ANT_VALOR",
        "ANT_FECHA",
        "CLI_INS_CODIGO",
        "ANT_ESTADO" /* 1 / 0 */,
    ];
}
