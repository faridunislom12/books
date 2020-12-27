<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    /**
     * Get the book genres.
     */
    public function genres()
    {
        return $this->belongsToMany('App\Models\Genre');
    }



}
