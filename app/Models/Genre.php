<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    /**
     * Get the genre books.
     */
    public function books()
    {
        return $this->belongsToMany('App\Models\Book');
    }

}
