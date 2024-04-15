<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resources extends Model
{
    use HasFactory;
    protected $table = "resources";

    public function session()
    {
        return $this->belongsTo(AddSession::class);
    }
}
