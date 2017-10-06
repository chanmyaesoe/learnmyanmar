<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Slides extends Model
{
    protected $table = "slides";
    protected $fillable = [
        'img','description','title'
    ];
}
