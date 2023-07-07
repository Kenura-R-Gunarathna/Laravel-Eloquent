<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use App\Models\Profile;

class Student extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function profile(): HasOne
    {
        return $this->hasOne(Profile::class);
    }
}
