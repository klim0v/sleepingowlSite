<?php namespace App\Model\Forms;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Model\Forms\Form
 *
 * @property int $id
 * @property string $title
 * @property string|null $textaddon
 * @property int $checkbox
 * @property string|null $date
 * @property string|null $time
 * @property string|null $timestamp
 * @property string|null $image
 * @property string|null $images
 * @property int|null $select
 * @property string|null $custom
 * @property string|null $textarea
 * @property string|null $ckeditor
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Forms\Form whereCheckbox($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Forms\Form whereCkeditor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Forms\Form whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Forms\Form whereCustom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Forms\Form whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Forms\Form whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Forms\Form whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Forms\Form whereImages($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Forms\Form whereSelect($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Forms\Form whereTextaddon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Forms\Form whereTextarea($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Forms\Form whereTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Forms\Form whereTimestamp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Forms\Form whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Forms\Form whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Form extends Model
{
    protected $table ='forms';

    protected $fillable = [
        'title',
        'textaddon',
        'checkbox',
        'date',
        'time',
        'timestamp',
        'image',
        'images',
        'select',
        'textarea',
        'ckeditor',
    ];

    public function getImagesAttribute($value)
    {
        return preg_split('/,/', $value, -1, PREG_SPLIT_NO_EMPTY);
    }

    public function setImagesAttribute($images)
    {
        $this->attributes['images'] = implode(',', $images);
    }

}
