<?php namespace App\Model\DataTables;

use App\Model\News;

/**
 * App\Model\DataTables\NewsActions
 *
 * @property int $id
 * @property string $title
 * @property string $date
 * @property int $published
 * @property string $text
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\News last()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\DataTables\NewsActions whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\DataTables\NewsActions whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\DataTables\NewsActions whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\DataTables\NewsActions wherePublished($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\DataTables\NewsActions whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\DataTables\NewsActions whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\DataTables\NewsActions whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class NewsActions extends News
{

}
