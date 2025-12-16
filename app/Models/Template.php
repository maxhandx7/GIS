<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
    use HasFactory;

     protected $fillable = [
        'nombre',
        'tipo_salida',
        'activa'
    ];

    public function contracts()
    {
        return $this->belongsToMany(Contract::class, 'contract_templates');
    }

    public function reports()
    {
        return $this->hasMany(Report::class);
    }
}
