<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Download extends Model
{
    use HasFactory;

    protected $fillable = [
		'first_name',
		'last_name',
        'email',
        'phone_number',
        'postal_code',
        'is_consent',
        'course_code',
	];
}
