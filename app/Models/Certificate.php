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

    /**
     * Get the full URL to the certificate image with automatic fallbacks.
     */
    public function getImageUrlAttribute(): string
    {
        if (empty($this->image_path)) {
            return 'data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22800%22%20height%3D%221100%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20800%201100%22%20preserveAspectRatio%3D%22none%22%3E%3Crect%20width%3D%22800%22%20height%3D%221100%22%20fill%3D%22%23eeeeee%22%20%2F%3E%3Ctext%20x%3D%22400%22%20y%3D%22550%22%20font-family%3D%22monospace%22%20font-size%3D%2260%22%20fill%3D%22%23aaaaaa%22%20text-anchor%3D%22middle%22%20alignment-baseline%3D%22middle%22%3EDOCUMENT%3C%2Ftext%3E%3C%2Fsvg%3E';
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

    /**
     * Get the full URL to the certificate PDF file.
     */
    public function getFileUrlAttribute(): ?string
    {
        if (empty($this->file_path)) {
            return null;
        }

        if (str_starts_with($this->file_path, 'http://') || str_starts_with($this->file_path, 'https://')) {
            return $this->file_path;
        }

        $cleanPath = ltrim($this->file_path, '/');
        if (str_starts_with($cleanPath, 'storage/')) {
            $cleanPath = substr($cleanPath, 8);
        }

        return url('media/'.$cleanPath);
    }
}
