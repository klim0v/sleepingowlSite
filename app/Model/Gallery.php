<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;
use SleepingOwl\Admin\Traits\OrderableModel;


/**
 * App\Model\Gallery
 *
 * @property int $id
 * @property string $title
 * @property string $slug
 * @property string $description
 * @property string $image
 * @property string $images
 * @property int $published
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Gallery published()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Gallery whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Gallery whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Gallery whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Gallery whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Gallery whereImages($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Gallery wherePublished($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Gallery whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Gallery whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Gallery whereUpdatedAt($value)
 * @mixin \Eloquent
 */
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
