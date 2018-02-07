<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Model\Banner
 *
 * @property int $id
 * @property string $title
 * @property string $link
 * @property string $color
 * @property string|null $image
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Banner whereColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Banner whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Banner whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Banner whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Banner whereLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Banner whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Banner whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property string|null $deleted_at
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Banner onlyTrashed()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Banner whereDeletedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Banner withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Banner withoutTrashed()
 */
class Banner extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title',
        'link',
        'color',
        'image',
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}
