<?php

namespace App\Model;

use Baum\Node;
use Illuminate\Support\Facades\Storage;


class Service extends Node
{

    protected $fillable = [
        'title',
        'heading',
        'meta_title',
        'meta_discription',
        'title',
        'slug',
        'text',
        'cover',
        'published',
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = str_slug($value) ?? $this->title;
    }

    public function setCoverAttribute($value)
    {
        if ($value !== $this->cover) {
            Storage::disk('public')->delete(str_replace('storage/', '', $this->cover));
        }
        $this->attributes['cover'] = $value;
    }

    public function scopePublished($query){
        return $query->where('published', 1);
    }

}
