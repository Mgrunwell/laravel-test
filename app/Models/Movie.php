<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    public function genres()
    {
        return $this->belongsToMany(Genre::class);
    }

    public function people()
    {
        return $this->belongsToMany(People::class);
    }

    public function languages()
    {
        return $this->belongsToMany(Language::class);
    }

    public function certifications()
    {
        return $this->belongsToMany(Certifications::class);
    }

    public function origin_countries()
    {
        return $this->belongsToMany(Origin_Countries::class);
    }

    public function statuses()
    {
        return $this->belongsToMany(Statuses::class);
    }
}

