<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class MediaItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'type', 'title', 'artist', 'album', 'year',
        'description', 'file_path', 'thumbnail_path', 'is_published',
    ];

    protected $casts = [
        'is_published' => 'boolean',
        'year' => 'integer',
    ];

    public function reviews(): HasMany { return $this->hasMany(Review::class); }

    public function ratings(): HasMany { return $this->hasMany(Rating::class); }

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class, 'category_media_item');
    }

    public function getFileUrlAttribute(): string
    {
        return asset('storage/' . $this->file_path);
    }

    public function getThumbnailUrlAttribute(): ?string
    {
        return $this->thumbnail_path ? asset('storage/' . $this->thumbnail_path) : null;
    }
}
