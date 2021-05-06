<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zhurnal extends Model
{
    use HasFactory;
    protected $fillable = [
        'daterow', 'courserow', 'grouprow','namerow','lectures'
        ];
}
