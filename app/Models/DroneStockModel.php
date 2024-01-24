<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DroneStockModel extends Model
{
    use HasFactory;
    protected $table="DroneStockDetails";
    public $timestamps = true;

}
