<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoVenta extends Model
{
    use HasFactory;

    protected $table = 'TIPO_VENTA';
    protected $primaryKey = 'TIP_VEN_CODIGO';

    // Disable timestamps
    public $timestamps = false;

    protected $fillable = [
        'TIP_VEN_CODIGO',
        'TIP_VEN_NOMBRE',
        'TIP_VEN_DESCRIPCION',
    ];
}
