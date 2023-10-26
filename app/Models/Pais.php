<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    use HasFactory;

    protected $table = "PAIS";
    protected $primaryKey = "PAI_CODIGO";
    public $timestamps = false;

    protected $fillable = [
        "PAI_CODIGO" /* PK */,
        "PAI_NOMBRE",
    ];
}
