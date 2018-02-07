<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;
use SleepingOwl\Admin\Traits\OrderableModel;


class Gallery extends Model
{

    protected $fillable = [
        'title',
        'description',
        'image',
        'images',
        'published',
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public function setImageAttribute($value)
    {
        if ($value !== $this->image) {
            Storage::disk('public')->delete(str_replace('storage/', '', $this->image));
        }
        $this->attributes['image'] = $value;
    }

    public function getImagesAttribute($value)
    {
        return preg_split('/,/', $value, -1, PREG_SPLIT_NO_EMPTY);
    }

    public function setImagesAttribute($images)
    {
        $this->attributes['images'] = implode(',', $images);
    }

    public function scopePublished($query){
        return $query->where('published', 1);
    }
}
