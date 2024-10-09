<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Competency01 extends Model
{
    use HasFactory;
    protected $fillable = [
		'username',
		'dep_id',
        'section_id',
        'round',
        'option1_1',
        'option1_2',
        'option1_3',
        'comment1',
        'option2_1',
        'option2_2',
        'option2_3',
        'comment2',
        'option3_1',
        'option3_2',
        'comment3',
        'option4_1',
        'option4_2',
        'option4_3',
        'comment4',
        'option5_1',
        'option5_2',
        'comment5',
        'option6_1',
        'option6_2',
        'comment6',
        'option7_1',
        'option7_2',
        'option7_3',
        'comment7',
        'option8_1',
        'option8_2',
        'option8_3',
        'comment8',
        'option9_1',
        'option9_2',
        'option9_3',
        'comment9',
        'option10_1',
        'option10_2',
        'option10_3',
        'comment10',
        'status',
	];
}
