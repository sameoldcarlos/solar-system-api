<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Planet extends Model
{
    protected $table = 'planets';

    protected $fillable = ['name', 'number', 'surface_area', 'gravity', 'mass', 'radius', 'orbital_period',
        'rotation_period', 'image', 'distance_from_sun', 'temperature', 'density', 'atm_pressure'];
}
