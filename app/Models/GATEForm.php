<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GATEForm extends Model
{
    use HasFactory;

    protected $fillable = [
        'fullname',
        'dob',
        'gender',
        'contact',
        'email',
        'state',
        'pincode',
        'degree',
        'specialization',
        'university',
        'yearofpassing',
        'papercode',
        'address',
        'examcenter',
        'photo',
        'signature',
    ];
}
