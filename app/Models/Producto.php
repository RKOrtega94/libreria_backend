<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $table = 'PRODUCTO';
    protected $primaryKey = 'PRO_CODIGO';
    protected $keyType = 'string';

    // Disable timestamps
    public $timestamps = false;

    protected $fillable = [
        "PRO_CODIGO" /* PK */,
        "GRU_PRO_CODIGO" /* FK Grupo */,
        "PRO_NOMBRE",
        "PRO_DESCRIPCION",
        "PRO_IVA",
        "PRO_VALOR",
        "PRO_DESCUENTO",
        "PRO_STOCK",
        "PRO_COSTO",
        "PRO_PESO",
    ];
}
