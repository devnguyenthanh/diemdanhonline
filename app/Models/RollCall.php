<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RollCall extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'class_id',
        'is_checked',
        'date',
        'note',
    ];
    protected $table = 'roll_call';
}
