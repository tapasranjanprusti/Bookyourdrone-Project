<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DroneModel extends Model
{
    use HasFactory;
    protected $table = 'drones';
    public $timestamps = true;
}
