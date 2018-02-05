<?php namespace App\Model;

/**
 * App\Model\NewsTabsBadges
 *
 * @property int $id
 * @property string $title
 * @property string $date
 * @property int $published
 * @property string $text
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\News last()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\NewsTabsBadges published()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\NewsTabsBadges unpublished()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\NewsTabsBadges whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\NewsTabsBadges whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\NewsTabsBadges whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\NewsTabsBadges wherePublished($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\NewsTabsBadges whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\NewsTabsBadges whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\NewsTabsBadges whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class NewsTabsBadges extends News
{
    protected $table = 'news';
    
    public function scopePublished($query){
       return $query->where('published', 1);
    }

    public function scopeUnpublished($query){
       return $query->where('published', 0);
    }
}
