<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Models\Role;

class Contract extends Model
{
    use HasFactory;

    protected $fillable = [
        'numero_contrato',
        'proceso_secop',
        'entidad',
        'objeto',
        'fecha_inicio',
        'fecha_fin',
        'valor_total',
        'estado'
    ];

    public function users()
    {
        return $this->belongsToMany(User::class)
            ->withPivot('role_id')
            ->withTimestamps();
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class, 'contract_user');
    }

    public function templates()
    {
        return $this->belongsToMany(Template::class, 'contract_templates');
    }

    public function cuotas()
    {
        return $this->hasMany(Cuota::class);
    }

    public function reports()
    {
        return $this->hasMany(Report::class);
    }
}
