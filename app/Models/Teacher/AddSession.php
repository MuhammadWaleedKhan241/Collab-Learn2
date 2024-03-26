<?php

namespace App\Models\Teacher;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddSession extends Model
{
    use HasFactory;

    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }

    public function resources()
    {
        return $this->hasMany(Resource::class);
    }

    public function caseStudies()
    {
        return $this->hasMany(CaseStudy::class);
    }
}
