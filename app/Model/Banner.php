<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;
use SleepingOwl\Admin\Traits\OrderableModel;


/**
 * App\Model\Banner
 *
 * @property int $id
 * @property string $title
 * @property string $link
 * @property string $color
 * @property string $image
 * @property int $published
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Banner published()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Banner whereColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Banner whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Banner whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Banner whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Banner whereLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Banner wherePublished($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Banner whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Banner whereUpdatedAt($value)
 * @mixin \Eloquent
 */
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
