<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChurchDetails extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'church_role',
        'church_status',
        'baptism_date'
    ];
}
