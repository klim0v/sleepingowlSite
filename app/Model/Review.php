<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

/**
 * App\Model\Review
 *
 * @property int $id
 * @property string $author
 * @property string $description
 * @property string|null $logo
 * @property string|null $background
 * @property string|null $deleted_at
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Review onlyTrashed()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Review whereBackground($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Review whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Review whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Review whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Review whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Review whereLogo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Review whereAuthor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Review whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Review withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Review withoutTrashed()
 * @mixin \Eloquent
 */
class Review extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'author',
        'description',
        'logo',
        'background',
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
}
