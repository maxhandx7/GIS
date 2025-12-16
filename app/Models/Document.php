<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;

    protected $fillable = [
        'report_id',
        'cuota_id',
        'tipo',
        'ruta_archivo',
        'generado_por'
    ];

    public function report()
    {
        return $this->belongsTo(Report::class);
    }

    public function cuota()
    {
        return $this->belongsTo(Cuota::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'generado_por');
    }
}
