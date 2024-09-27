<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobPosition extends Model
{
    use HasFactory;

    protected $fillable = [
        'position_name',
        'area_name',
        'id_employee',
        'id_boss',
        'id_role'
    ];
}
