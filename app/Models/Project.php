<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'description',
        'image_path',
        'status',
        'type',
        'year',
        'tech_stack',
        'access',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'tech_stack' => 'array',
    ];

    /**
     * Get the full URL to the project image with automatic fallbacks.
     */
    public function getImageUrlAttribute(): string
    {
        if (empty($this->image_path)) {
            return asset('img/presensi.png');
        }

        if (str_starts_with($this->image_path, 'http://') || str_starts_with($this->image_path, 'https://')) {
            return $this->image_path;
        }

        $cleanPath = ltrim($this->image_path, '/');
        if (str_starts_with($cleanPath, 'storage/')) {
            $cleanPath = substr($cleanPath, 8);
        }

        return url('media/'.$cleanPath);
    }
}
