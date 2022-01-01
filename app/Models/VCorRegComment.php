<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VCorRegComment extends Model
{
    use HasFactory;

    protected $fillable = [
        'v_cor_reg_comment',
        'status_id',
    ];
}
