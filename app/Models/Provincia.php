<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
    use HasFactory;

    protected $table = "PROVINCIA";
    protected $primaryKey = "PROVI_CODIGO";
    public $timestamps = false;

    protected $fillable = [
        "PROVI_CODIGO" /* PK */,
        "PAI_CODIGO" /* FK Pais */,
        "PROVI_NOMBRE",
        "PROVI_COD_TELEFONO"
    ];

    public function pais()
    {
        return $this->belongsTo(Pais::class, "PAI_CODIGO", "PAI_CODIGO");
    }
}
