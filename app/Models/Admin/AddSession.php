<?php

namespace App\Models\Admin;

use App\Models\Comment;
use App\Models\Teacher\CaseStudy;
use App\Models\User;
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
    public function comments()
    {
        return $this->hasMany(Comment::class, 'session_id');
    }
    public function student()
    {
        return $this->hasMany(User::class, 'session_code', 'sessioncode');
    }
    public function resources()
    {
        return $this->hasMany(Resources::class, 'session_id');
    }
}
