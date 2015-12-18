<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Medicamento extends Model
{
    protected $table="medicamentos";
    public $timestamps=false;
    public $primaryKey="codProd";
}
