<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Venta extends Model
{
    use HasFactory;

    protected $table = "VENTA";
    protected $primaryKey = "VEN_CODIGO";
    protected $keyType = "string";

    public $timestamps = false;

    protected $fillable = [
        "VEN_CODIGO" /* PK */,
        "USU_CODIGO" /* FK Usuario */,
        "VEN_D_CODIGO",
        "CLI_INS_CODIGO",
        "TIP_VEN_CODIGO",
        "VEN_OBSERVACION",
        "VEN_CHEQ",
        "VEN_COMISION",
        "VEN_VALOR",
        "VEN_PAGADO",
        "VEN_ANTICIPO",
        "VEN_CON_OBSEQUIOS",
        "VEN_CON_OBS_FINAL",
        "VEN_COM_PORCENTAJE",
        "VEN_IVA",
        "VEN_DESCUENTO",
        "VEN_FECHA",
        "VEN_CONVERTIDO",
        "VEN_TRANSPORTE",
        "VEN_ESTADO_TRANSPORTE",
        "VEN_FIRMADO",
        "VEN_TEMPORADA",
        "CUEN_NUMERO",
        "VEN_DEVOLUCION",
        "VEN_REMISION",
        "VEN_FECH_REMISION",
        "SUCURSAL",
    ];

    public function tipoVenta(): BelongsTo
    {
        return $this->belongsTo(TipoVenta::class, "TIP_VEN_CODIGO", "TIP_VEN_CODIGO");
    }
}
