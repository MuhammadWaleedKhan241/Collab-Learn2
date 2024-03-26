<?php

namespace App\Models\Admin;

use App\Models\Teacher\CaseStudy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddSession extends Model
{
    protected $table = "add_sessions";
    use HasFactory;


    public function casestudies()
    {
        return $this->hasMany(CaseStudy::class, 'session_id');
    }
}
