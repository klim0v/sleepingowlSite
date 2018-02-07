<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;
use SleepingOwl\Admin\Traits\OrderableModel;


class Banner extends Model
{

    protected $fillable = [
        'title',
        'link',
        'color',
        'image',
        'published',
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public function setLinkAttribute($value)
    {
        if ( 0 !== stripos($value, 'http://')) {
            $this->attributes['link'] = 'http://' . $value;
        }
    }

    public function setImageAttribute($value)
    {
        if ($value !== $this->image) {
            Storage::disk('public')->delete(str_replace('storage/', '', $this->image));
        }
        $this->attributes['image'] = $value;
    }

    public function scopePublished($query){
        return $query->where('published', 1);
    }
}
