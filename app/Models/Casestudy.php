<?php

namespace App\Models;

use App\Models\Admin\AddSession;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Casestudy extends Model
{
    protected $table = "case_studies";

    use HasFactory;

    public function sessions()
    {
        return $this->belongsTo(AddSession::class, 'session_id');
    }
}
