<?php namespace App\Model;

use Baum\Node;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Model\Page
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
 * @property-read \Baum\Extensions\Eloquent\Collection|\App\Model\Page[] $children
 * @property-read \App\Model\Page|null $parent
 * @method static \Illuminate\Database\Eloquent\Builder|\Baum\Node limitDepth($limit)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Page whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Page whereDepth($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Page whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Page whereLft($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Page whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Page whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Page whereRgt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Page whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Page whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Page whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Baum\Node withoutNode($node)
 * @method static \Illuminate\Database\Eloquent\Builder|\Baum\Node withoutRoot()
 * @method static \Illuminate\Database\Eloquent\Builder|\Baum\Node withoutSelf()
 * @mixin \Eloquent
 */
class Page extends Node
{

}
