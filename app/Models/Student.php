<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Profile;
use App\Models\Comment;

class Student extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function profile(): HasOne
    {
        return $this->hasOne(Profile::class)->orderBy('id', 'desc');
    }

    public function comments(): HasMany
    {
        return $this->HasMany(Comment::class)->orderBy('id', 'desc');
    }
}
