<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Reservation extends Model
{
    use HasFactory;
    use HasSlug;
    use HasFactory;

    protected $fillable = ['title', 'description', 'expire_date', 'image', 'user_id', 'status', 'created_at', 'updated_at'];


    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }
}
