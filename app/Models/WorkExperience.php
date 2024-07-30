<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkExperience extends Model
{
    use HasFactory;
    
    protected $fillable = ['company', 'position', 'start_date', 'end_date', 'description', 'image'];

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
