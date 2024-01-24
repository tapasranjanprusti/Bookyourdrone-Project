<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class FarmerRegistrationModel extends Authenticatable
{
    use  HasFactory, Notifiable;
    protected $gard='farmer';
    protected $table = 'farmers';
    public $timestamps = true;

}
