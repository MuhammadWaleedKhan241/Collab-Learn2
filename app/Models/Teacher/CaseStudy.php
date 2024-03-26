<?php

namespace App\Models\Teacher;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CaseStudy extends Model
{
    use HasFactory;

    public function session()
    {
        return $this->belongsTo(AddSession::class);
    }
    public function user()
    {

        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
