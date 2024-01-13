<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetails extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id','name',
        'last_name',
        'gender',
        'birth_date',
        'marital_status',
        'document_type',
        'document_number',
        'address',
        'address_number',
        'address_complement',
        'district',
        'cep',
        'state',
        'country',
        'occupation',
        'education',
        'phone_number',
        'whatsapp_number',
        'cell_phone_number',
        'join_date',
    ];
}
