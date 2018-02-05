<?php namespace App\Model\DataTables;

use App\Model\News;

/**
 * App\Model\DataTables\NewsEditableColumns
 *
 * @property int $id
 * @property string $title
 * @property string $date
 * @property int $published
 * @property string $text
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\News last()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\DataTables\NewsEditableColumns whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\DataTables\NewsEditableColumns whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\DataTables\NewsEditableColumns whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\DataTables\NewsEditableColumns wherePublished($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\DataTables\NewsEditableColumns whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\DataTables\NewsEditableColumns whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\DataTables\NewsEditableColumns whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class NewsEditableColumns extends News
{

}
