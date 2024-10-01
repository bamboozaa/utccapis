<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Competency01 extends Model
{
    use HasFactory;
    protected $fillable = [
		'username',
		'department',
        'round',
	];
}
