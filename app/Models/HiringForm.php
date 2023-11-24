<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HiringForm extends Model
{
    use HasFactory;

    protected $table = 'hiring_forms';

    protected $fillable = [
        'employer_id', 'worker_id', 'address', 'date', 'time', 'subject', 'description', 'status'
    ];
    
}