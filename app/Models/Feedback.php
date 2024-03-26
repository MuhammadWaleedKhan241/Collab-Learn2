<?php

namespace App\Models;

use App\Models\Admin\ManageStudent;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Feedback extends Model
{

    public $timestamps = false;

    // Your other model code


    protected $table = "feedback";

    use HasFactory;

    protected $fillable = [

        'gender',
        'age',
        'experience',
        'educationYear',
        'sectorexperiance',
        'geolocation',
        'useexperiencebefore',
        'useful',
        'understandingstrategicmanagment',
        'ownbackexpunderstandingstratmang',
        'explainyourlearn',
        'backexperienceinclass',
        'learnfromother',
        'improvedinfuture',
        'anyothercomment',
        'permission'

    ];
    public function student()
    {
        return $this->belongsTo(ManageStudent::class);
    }
}
