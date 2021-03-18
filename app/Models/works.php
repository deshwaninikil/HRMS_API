<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class works extends Model
{
    protected $fillable = [
        'user_id', 'company_name', 'position','year',
    ];
}
