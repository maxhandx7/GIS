<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    protected $fillable = [
        'report_id',
        'numero',
        'descripcion_obligacion',
        'actividades_realizadas',
        'medio_verificacion'
    ];

    public function report()
    {
        return $this->belongsTo(Report::class);
    }
}
