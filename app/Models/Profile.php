<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\belongsTo;
use App\Models\Student;

class Profile extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function student(): belongsTo
    {
        return $this->belongsTo(Student::class)->orderBy('id', 'desc');
    }
}
