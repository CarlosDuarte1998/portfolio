<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function workExperiences()
    {
        return $this->belongsToMany(WorkExperience::class);
    }

    public function projects()
    {
        return $this->belongsToMany(Project::class);
    }

    
}
