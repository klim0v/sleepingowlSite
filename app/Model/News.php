<?php namespace App\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Model\News
 *
 * @property int $id
 * @property string $title
 * @property string $date
 * @property int $published
 * @property string $text
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\News last()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\News whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\News whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\News whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\News wherePublished($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\News whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\News whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\News whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class News extends Model
{

    protected $table = 'news';

    protected $fillable = [
        'title',
        'date',
        'published',
        'text',
    ];

    public function scopeLast($query)
    {
        $query->orderBy('date', 'desc')->limit(4);
    }

}
