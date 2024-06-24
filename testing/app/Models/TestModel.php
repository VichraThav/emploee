<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestModel extends Model
{
    use HasFactory;
    protected $table = 'employee';
    protected $fillable = [
        'first_name',
        'last_name',
        'gender',
        'phone_number',
        'address',
    ];
}
