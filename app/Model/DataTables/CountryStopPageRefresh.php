<?php namespace App\Model\DataTables;

use App\Model\Country;
use SleepingOwl\Admin\Traits\OrderableModel;


/**
 * App\Model\DataTables\CountryStopPageRefresh
 *
 * @property int $id
 * @property string $title
 * @property int $order
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\DataTables\CountryStopPageRefresh findByPosition($position)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\DataTables\CountryStopPageRefresh orderModel()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\DataTables\CountryStopPageRefresh whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\DataTables\CountryStopPageRefresh whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\DataTables\CountryStopPageRefresh whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\DataTables\CountryStopPageRefresh whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\DataTables\CountryStopPageRefresh whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Model\Contact[] $contacts
 */
class CountryStopPageRefresh extends Country
{
    use OrderableModel;


}
