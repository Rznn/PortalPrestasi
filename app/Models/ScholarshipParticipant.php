<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ScholarshipParticipant extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'scholarship_id',
        'nim',
        'instance',
        'department',
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function scholarships()
    {
        return $this->belongsTo(Scholarship::class, 'scholarship_id');
    }
}
