<?php

namespace App\Models;

use App\Models\Admin\Admin;
use App\Models\Teacher\Teacher;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommentReply extends Model
{
    use HasFactory;


    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function teacher()
    {
        return $this->belongsTo(Teacher::class, 'user_id');
    }
    public function admin()
    {
        return $this->belongsTo(Admin::class, 'user_id');
    }
}
