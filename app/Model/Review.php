<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;
use SleepingOwl\Admin\Traits\OrderableModel;

/**
 * App\Model\Review
 *
 * @property int $id
 * @property string $author
 * @property string $text
 * @property string|null $logo
 * @property string|null $background
 * @property int $published
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Review published()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Review whereAuthor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Review whereBackground($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Review whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Review whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Review whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Review whereLogo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Review wherePublished($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Review whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property int $is_new
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Review isNew()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Review whereIsNew($value)
 * @property int $on_main
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Review onMain()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Review whereOnMain($value)
 */
class Review extends Model
{
    protected $attributes = [
        'is_new' => 1 ,
    ];

    protected $fillable = [
        'author',
        'text',
        'logo',
        'background',
        'is_new',
        'on_main',
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

    public function scopePublished($query)
    {
        return $query->where('published', 1);
    }

    public function scopeIsNew($query)
    {
        return $query->where('is_new', 1);
    }

    public function scopeOnMain($query)
    {
        return $query->where('on_main', 1);
    }
}
