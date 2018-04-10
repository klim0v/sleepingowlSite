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
 * @property string|null $heading Заголовок H1
 * @property string|null $meta_description Meta description
 * @property string|null $meta_title Meta title
 * @property string $slug
 * @property string $description
 * @property string $cover
 * @property string $images
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Gallery whereCover($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Gallery whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Gallery whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Gallery whereHeading($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Gallery whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Gallery whereImages($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Gallery whereMetaDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Gallery whereMetaTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Gallery whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Gallery whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Gallery whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Gallery extends Model
{

    protected $fillable = [
        'title',
        'heading',
        'meta_title',
        'meta_description',
        'title',
        'slug',
        'description',
        'cover',
        'images',
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = str_slug($value);
    }

    public function setCoverAttribute($value)
    {
        if ($value !== $this->cover) {
            Storage::disk('public')->delete(str_replace('storage/', '', $this->cover));
        }
        $this->attributes['cover'] = $value;
    }

    public function getImagesAttribute($value)
    {
        return preg_split('/,/', $value, -1, PREG_SPLIT_NO_EMPTY);
    }

    public function setImagesAttribute($images)
    {
        Storage::disk('public')
            ->delete(str_replace('storage/', '', array_diff($this->images, $images)));
        $this->attributes['images'] = implode(',', $images);
    }
}
