<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;

    protected $fillable = [
        'batch',
        'faculty',
        'bursary_year',
        'bursary_month',
        'bursary_description',
        'status',
        'level',
    ];
}
