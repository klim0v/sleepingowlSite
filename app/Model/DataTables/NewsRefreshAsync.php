<?php namespace App\Model\DataTables;

use App\Model\News;

/**
 * App\Model\DataTables\NewsRefreshAsync
 *
 * @property int $id
 * @property string $title
 * @property string $date
 * @property int $published
 * @property string $text
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\News last()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\DataTables\NewsRefreshAsync whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\DataTables\NewsRefreshAsync whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\DataTables\NewsRefreshAsync whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\DataTables\NewsRefreshAsync wherePublished($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\DataTables\NewsRefreshAsync whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\DataTables\NewsRefreshAsync whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\DataTables\NewsRefreshAsync whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class NewsRefreshAsync extends News
{

}
