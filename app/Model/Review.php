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
 * @property int $published
 * @property int $is_new
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Review isNew()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Review published()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Review whereAuthor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Review whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Review whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Review whereIsNew($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Review wherePublished($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Review whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Review whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Review extends Model
{
    protected $attributes = [
        'is_new' => 1 ,
    ];

    protected $fillable = [
        'author',
        'text',
        'is_new',
        'published',
    ];

    public function scopePublished($query)
    {
        return $query->where('published', 1);
    }

    public function scopeIsNew($query)
    {
        return $query->where('is_new', 1);
    }

}
