<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssignOrderModel extends Model
{
    use HasFactory;
    protected $table = 'assign_order';
    public $timestamps = true;
}
