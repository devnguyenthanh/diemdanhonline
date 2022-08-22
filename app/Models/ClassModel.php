<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassModel extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'class_code',
        'note',
        'updated_at',
    ];

    protected $table = 'class';

    public function rollCall()
    {
        return $this->hasMany('App\Models\RollCall', 'class_id', 'id');
    }
}
