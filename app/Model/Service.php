<?php

namespace App\Model;

use Baum\Node;
use Illuminate\Support\Facades\Storage;

/**
 * App\Model\Service
 *
 * @property int $id
 * @property int|null $parent_id
 * @property int|null $lft
 * @property int|null $rgt
 * @property int|null $depth
 * @property int $order
 * @property string $title
 * @property string|null $heading Заголовок H1
 * @property string|null $meta_description Meta description
 * @property string|null $meta_title Meta title
 * @property string $slug
 * @property string $annotation
 * @property string $description
 * @property string $icon
 * @property string $cover
 * @property int $published
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Baum\Extensions\Eloquent\Collection|\App\Model\Service[] $children
 * @property-read \App\Model\Service|null $parent
 * @method static \Illuminate\Database\Eloquent\Builder|\Baum\Node limitDepth($limit)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Service whereAnnotation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Service whereCover($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Service whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Service whereDepth($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Service whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Service whereHeading($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Service whereIcon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Service whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Service whereLft($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Service whereMetaDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Service whereMetaTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Service whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Service whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Service wherePublished($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Service whereRgt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Service whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Service whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Service whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Baum\Node withoutNode($node)
 * @method static \Illuminate\Database\Eloquent\Builder|\Baum\Node withoutRoot()
 * @method static \Illuminate\Database\Eloquent\Builder|\Baum\Node withoutSelf()
 * @mixin \Eloquent
 * @property string $name
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Model\Gallery[] $galleries
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Service whereName($value)
 */
class Service extends Node
{
    protected $fillable = [
        'title',
        'heading',
        'meta_title',
        'meta_description',
        'title',
        'slug',
        'annotation',
        'description',
        'cover',
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = str_slug($value) ?? $this->title;
    }

    public function setCoverAttribute($value)
    {
        if ($value !== $this->cover) {
            Storage::disk('public')->delete(str_replace('storage/', '', $this->cover));
        }
        $this->attributes['cover'] = $value;
    }

    public function setIconAttribute($value)
    {
        if ($value !== $this->icon) {
            Storage::disk('public')->delete(str_replace('storage/', '', $this->icon));
        }
        $this->attributes['icon'] = $value;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function galleries(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Gallery::class);
    }
}
