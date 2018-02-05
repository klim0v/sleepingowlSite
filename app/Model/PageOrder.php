<?php namespace App\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Model\PageOrder
 *
 * @property int $id
 * @property int|null $parent_id
 * @property int|null $lft
 * @property int|null $rgt
 * @property int|null $depth
 * @property int $order
 * @property string $title
 * @property string $text
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\PageOrder whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\PageOrder whereDepth($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\PageOrder whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\PageOrder whereLft($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\PageOrder whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\PageOrder whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\PageOrder whereRgt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\PageOrder whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\PageOrder whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\PageOrder whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class PageOrder extends Model
{
    protected $table = "pages";
}
