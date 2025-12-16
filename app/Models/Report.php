<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $fillable = [
        'contract_id',
        'template_id',
        'cuota_id',
        'estado',
        'version',
        'fecha'
    ];

    public function contract()
    {
        return $this->belongsTo(Contract::class);
    }

    public function template()
    {
        return $this->belongsTo(Template::class);
    }

    public function cuota()
    {
        return $this->belongsTo(Cuota::class);
    }

    public function activities()
    {
        return $this->hasMany(Activity::class);
    }

    public function observations()
    {
        return $this->hasMany(Observation::class);
    }

    public function documents()
    {
        return $this->hasMany(Document::class);
    }


    
}
