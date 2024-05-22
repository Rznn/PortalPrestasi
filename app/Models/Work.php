<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Work extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'job_name',
        'company',
        'description',
        'requirement',
        'image',
        'contact',
        'email',
        'salary',
        'end_competition',
        'status',
    ];
}
