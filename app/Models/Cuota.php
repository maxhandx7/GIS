<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuota extends Model
{
    use HasFactory;

    protected $fillable = [
        'contract_id',
        'numero',
        'valor',
        'fecha'
    ];

    public function contract()
    {
        return $this->belongsTo(Contract::class);
    }

    public function reports()
    {
        return $this->hasMany(Report::class);
    }

    public function documents()
    {
        return $this->hasMany(Document::class);
    }
}
