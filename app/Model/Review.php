<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;
use SleepingOwl\Admin\Traits\OrderableModel;

class Review extends Model
{
    protected $fillable = [
        'author',
        'description',
        'logo',
        'background',
        'published',
    ];

    public function setLogoAttribute($value)
    {
        if ($value !== $this->logo) {
            Storage::disk('public')->delete(str_replace('storage/', '', $this->logo));
        }
        $this->attributes['logo'] = $value;
    }

    public function setBackgroundAttribute($value)
    {
        if ($value !== $this->background) {
            Storage::disk('public')->delete(str_replace('storage/', '', $this->background));
        }
        $this->attributes['background'] = $value;
    }

    public function scopePublished($query){
        return $query->where('published', 1);
    }
}
