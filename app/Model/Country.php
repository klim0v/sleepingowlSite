<?php namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use SleepingOwl\Admin\Traits\OrderableModel;

/**
 * App\Model\Country
 *
 * @property int $id
 * @property string $title
 * @property int $order
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Model\Contact[] $contacts
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Country findByPosition($position)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Country orderModel()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Country whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Country whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Country whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Country whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Country whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Country extends Model
{
    use OrderableModel;

    protected $table = 'countries';

    protected $fillable = ['title', 'test'];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public function contacts()
    {
        return $this->hasMany(Contact::class);
    }

    public function getOrderField()
    {
        return 'order';
    }

}
