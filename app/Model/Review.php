<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class Review extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title',
        'description',
        'image',
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
}
