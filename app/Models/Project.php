<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $table = 'projects';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
        'image',
        'ar_title',
        'en_title',
        'ar_desc',
        'en_desc',
        'type',
    ];
}
