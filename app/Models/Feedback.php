<?php

namespace App\Models;

use App\Models\Admin\ManageStudent;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Feedback extends Model
{
    use HasFactory;

    protected $fillable = [

        'gender',
        'age',
        'experience',
        'education_year',
        'sector_experiance',
        'geo_location',
        'use_experience_before',
        'useful',
        'understanding_strategic_managment',
        'own_back_exp_understanding_strat_mang',
        'explain_your_learn',
        'back_experience_in_class',
        'learn_from_other',
        'improved_in_future',
        'any_other_comment',
        'permission'

    ];
    public function student()
    {
        return $this->belongsTo(ManageStudent::class);
    }
}
