<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends Model
{
    use SoftDeletes, HasFactory;

    public $table = 'clients';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'phone',
        'email',
        'matricula',
        'gender',
        'edad',
        'sala',
        'religion',
        'ocupacion',
        'estadocivil',
        'medicotratante',
        'originariode',
        'radicaen',
        'escolaridad',
        'municipales',
        'habitacion',
        'tabaquismo',
        'etilismo',
        'higiene',
        'alimentacion',
        'dominio',
        'hijos',
        'pasatiempo',
        'otros',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function appointments()
    {
        return $this->hasMany(Appointment::class, 'client_id', 'id');
    }
}
