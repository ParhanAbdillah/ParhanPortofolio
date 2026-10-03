<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    protected $fillable = [
        'type',
        'code',
        'category',
        'name',
        'issuer',
        'image_path',
        'file_path',
    ];
}
