<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

/**
 * App\Model\Order
 *
 * @property int $id
 * @property string $author
 * @property string $type
 * @property string $phone
 * @property string $email
 * @property string $text
 * @property int $is_new
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Order isNew()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Order whereAuthor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Order whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Order whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Order whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Order whereIsNew($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Order wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Order whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Order whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Order whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Order extends Model
{
    protected $attributes = [
        'is_new' => 1,
        'author' => 'Не указанно',
    ];

    protected $fillable = [
        'author',
        'phone',
        'email',
        'text',
        'type',
        'is_new',
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public function scopeIsNew($query){
        return $query->where('is_new', 1);
    }
}
