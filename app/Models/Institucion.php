<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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

    public function tipoInstitucion(): BelongsTo
    {
        return $this->belongsTo(TipoInstitucion::class, "TIP_INS_CODIGO", "TIP_INS_CODIGO");
    }

    public function ciudad(): BelongsTo
    {
        return $this->belongsTo(Ciudad::class, "CIU_CODIGO", "CIU_CODIGO");
    }

    public function ciclo(): BelongsTo
    {
        return $this->belongsTo(Ciclo::class, "CIC_CODIGO", "CIC_CODIGO");
    }
}
