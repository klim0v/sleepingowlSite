<?php
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App{
/**
 * App\Role
 *
 * @property int $id
 * @property string $name
 * @property string|null $label
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Permission[] $permissions
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\User[] $users
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Role whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Role whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Role whereLabel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Role whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Role whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Role extends \Eloquent {}
}

namespace App{
/**
 * App\Permission
 *
 * @property int $id
 * @property string $name
 * @property string|null $label
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Role[] $roles
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Permission whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Permission whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Permission whereLabel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Permission whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Permission whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Permission extends \Eloquent {}
}

namespace App\Model{
/**
 * App\Model\News5
 *
 * @property int $id
 * @property string $title
 * @property string $date
 * @property int $published
 * @property string $text
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\News last()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\News5 whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\News5 whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\News5 whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\News5 wherePublished($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\News5 whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\News5 whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\News5 whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class News5 extends \Eloquent {}
}

namespace App\Model{
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
	class NewsTabsBadges extends \Eloquent {}
}

namespace App\Model{
/**
 * App\Model\News3
 *
 * @property int $id
 * @property string $title
 * @property string $date
 * @property int $published
 * @property string $text
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\News last()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\News3 whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\News3 whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\News3 whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\News3 wherePublished($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\News3 whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\News3 whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\News3 whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class News3 extends \Eloquent {}
}

namespace App\Model{
/**
 * App\Model\Company
 *
 * @property int $id
 * @property string $title
 * @property string $address
 * @property string $phone
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Model\Contact[] $contacts
 * @property-write mixed $contact_id
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Company whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Company whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Company whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Company wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Company whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Company whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Company withContact($contactId)
 * @mixin \Eloquent
 */
	class Company extends \Eloquent {}
}

namespace App\Model{
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
	class Page extends \Eloquent {}
}

namespace App\Model{
/**
 * App\Model\Contact2
 *
 * @property int $id
 * @property string $firstName
 * @property string $lastName
 * @property string|null $photo
 * @property string $birthday
 * @property string $phone
 * @property string $address
 * @property int|null $country_id
 * @property string $comment
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property int|null $height
 * @property int|null $user_id
 * @property-read \App\User|null $author
 * @property \Illuminate\Database\Eloquent\Collection|\App\Model\Company[] $companies
 * @property-read \App\Model\Country|null $country
 * @property-read string $full_name
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Contact2 whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Contact2 whereBirthday($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Contact2 whereComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Contact2 whereCountryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Contact2 whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Contact2 whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Contact2 whereHeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Contact2 whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Contact2 whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Contact2 wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Contact2 wherePhoto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Contact2 whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Contact2 whereUserId($value)
 * @mixin \Eloquent
 */
	class Contact2 extends \Eloquent {}
}

namespace App\Model{
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
	class Country extends \Eloquent {}
}

namespace App\Model{
/**
 * App\Model\Post
 *
 * @property int $id
 * @property string $title
 * @property string $text
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property string $text_html
 * @property int|null $contact_id
 * @property int|null $country_id
 * @property-read \App\Model\Contact|null $contact
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Post onlyTrashed()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Post whereContactId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Post whereCountryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Post whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Post whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Post whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Post whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Post whereTextHtml($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Post whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Post whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Post withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Post withoutTrashed()
 * @mixin \Eloquent
 */
	class Post extends \Eloquent {}
}

namespace App\Model{
/**
 * App\Model\FundamentalSetting
 *
 * @property int $id
 * @property string $name Человеческое название настройки/параметра. Например "Email-ы для оповещений"
 * @property string $key параметр, на который завязаться в коде. Изменять его уже нельзя ибо потом искать все вхождения в код.
 * @property string $value Значение параметра (список почт, цифровое значение и тп.)
 * @property string $description Описание параметра для вывода в админке в качестве подказки
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\FundamentalSetting whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\FundamentalSetting whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\FundamentalSetting whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\FundamentalSetting whereKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\FundamentalSetting whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\FundamentalSetting whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\FundamentalSetting whereValue($value)
 */
	class FundamentalSetting extends \Eloquent {}
}

namespace App\Model{
/**
 * App\Model\News7
 *
 * @property int $id
 * @property string $title
 * @property string $date
 * @property int $published
 * @property string $text
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\News last()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\News7 whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\News7 whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\News7 whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\News7 wherePublished($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\News7 whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\News7 whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\News7 whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class News7 extends \Eloquent {}
}

namespace App\Model{
/**
 * App\Model\Contact
 *
 * @property int $id
 * @property string $firstName
 * @property string $lastName
 * @property string|null $photo
 * @property string $birthday
 * @property string $phone
 * @property string $address
 * @property int|null $country_id
 * @property string $comment
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property int|null $height
 * @property int|null $user_id
 * @property-read \App\User|null $author
 * @property \Illuminate\Database\Eloquent\Collection|\App\Model\Company[] $companies
 * @property-read \App\Model\Country|null $country
 * @property-read string $full_name
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Contact whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Contact whereBirthday($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Contact whereComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Contact whereCountryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Contact whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Contact whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Contact whereHeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Contact whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Contact whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Contact wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Contact wherePhoto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Contact whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Contact whereUserId($value)
 * @mixin \Eloquent
 */
	class Contact extends \Eloquent {}
}

namespace App\Model{
/**
 * App\Model\Contact3
 *
 * @property int $id
 * @property string $firstName
 * @property string $lastName
 * @property string|null $photo
 * @property string $birthday
 * @property string $phone
 * @property string $address
 * @property int|null $country_id
 * @property string $comment
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property int|null $height
 * @property int|null $user_id
 * @property-read string $full_name
 * @property-write mixed $companies
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Contact3 whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Contact3 whereBirthday($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Contact3 whereComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Contact3 whereCountryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Contact3 whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Contact3 whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Contact3 whereHeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Contact3 whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Contact3 whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Contact3 wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Contact3 wherePhoto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Contact3 whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Contact3 whereUserId($value)
 * @mixin \Eloquent
 * @property-read \App\User|null $author
 * @property-read \App\Model\Country|null $country
 */
	class Contact3 extends \Eloquent {}
}

namespace App\Model{
/**
 * App\Model\Banner
 *
 * @property int $id
 * @property string $title
 * @property string $link
 * @property string $color
 * @property string|null $image
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Banner whereColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Banner whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Banner whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Banner whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Banner whereLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Banner whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Banner whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Banner extends \Eloquent {}
}

namespace App\Model{
/**
 * App\Model\News2
 *
 * @property int $id
 * @property string $title
 * @property string $date
 * @property int $published
 * @property string $text
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\News last()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\News2 whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\News2 whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\News2 whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\News2 wherePublished($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\News2 whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\News2 whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\News2 whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class News2 extends \Eloquent {}
}

namespace App\Model\Forms{
/**
 * App\Model\Forms\Form
 *
 * @property int $id
 * @property string $title
 * @property string|null $textaddon
 * @property int $checkbox
 * @property string|null $date
 * @property string|null $time
 * @property string|null $timestamp
 * @property string|null $image
 * @property string|null $images
 * @property int|null $select
 * @property string|null $custom
 * @property string|null $textarea
 * @property string|null $ckeditor
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Forms\Form whereCheckbox($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Forms\Form whereCkeditor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Forms\Form whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Forms\Form whereCustom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Forms\Form whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Forms\Form whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Forms\Form whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Forms\Form whereImages($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Forms\Form whereSelect($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Forms\Form whereTextaddon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Forms\Form whereTextarea($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Forms\Form whereTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Forms\Form whereTimestamp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Forms\Form whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Forms\Form whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Form extends \Eloquent {}
}

namespace App\Model\Forms{
/**
 * App\Model\Forms\FormButton
 *
 * @property int $id
 * @property string $title
 * @property string|null $textaddon
 * @property int $checkbox
 * @property string|null $date
 * @property string|null $time
 * @property string|null $timestamp
 * @property string|null $image
 * @property string|null $images
 * @property int|null $select
 * @property string|null $custom
 * @property string|null $textarea
 * @property string|null $ckeditor
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Forms\FormButton whereCheckbox($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Forms\FormButton whereCkeditor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Forms\FormButton whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Forms\FormButton whereCustom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Forms\FormButton whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Forms\FormButton whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Forms\FormButton whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Forms\FormButton whereImages($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Forms\FormButton whereSelect($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Forms\FormButton whereTextaddon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Forms\FormButton whereTextarea($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Forms\FormButton whereTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Forms\FormButton whereTimestamp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Forms\FormButton whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Forms\FormButton whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class FormButton extends \Eloquent {}
}

namespace App\Model{
/**
 * App\Model\News6
 *
 * @property int $id
 * @property string $title
 * @property string $date
 * @property int $published
 * @property string $text
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\News last()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\News6 whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\News6 whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\News6 whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\News6 wherePublished($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\News6 whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\News6 whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\News6 whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class News6 extends \Eloquent {}
}

namespace App\Model{
/**
 * App\Model\News9
 *
 * @property int $id
 * @property string $title
 * @property string $date
 * @property int $published
 * @property string $text
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\News last()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\News9 whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\News9 whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\News9 whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\News9 wherePublished($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\News9 whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\News9 whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\News9 whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class News9 extends \Eloquent {}
}

namespace App\Model\DataTables{
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
	class NewsEditableColumns extends \Eloquent {}
}

namespace App\Model\DataTables{
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
	class NewsActions extends \Eloquent {}
}

namespace App\Model\DataTables{
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
	class CountryStopPageRefresh extends \Eloquent {}
}

namespace App\Model\DataTables{
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
	class NewsRefreshAsync extends \Eloquent {}
}

namespace App\Model{
/**
 * App\Model\Contact5
 *
 * @property int $id
 * @property string $firstName
 * @property string $lastName
 * @property string|null $photo
 * @property string $birthday
 * @property string $phone
 * @property string $address
 * @property int|null $country_id
 * @property string $comment
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property int|null $height
 * @property int|null $user_id
 * @property-read string $full_name
 * @property-write mixed $companies
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Contact5 whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Contact5 whereBirthday($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Contact5 whereComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Contact5 whereCountryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Contact5 whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Contact5 whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Contact5 whereHeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Contact5 whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Contact5 whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Contact5 wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Contact5 wherePhoto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Contact5 whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Contact5 whereUserId($value)
 * @mixin \Eloquent
 * @property-read \App\User|null $author
 * @property-read \App\Model\Country|null $country
 */
	class Contact5 extends \Eloquent {}
}

namespace App\Model{
/**
 * App\Model\Contact4
 *
 * @property int $id
 * @property string $firstName
 * @property string $lastName
 * @property string|null $photo
 * @property string $birthday
 * @property string $phone
 * @property string $address
 * @property int|null $country_id
 * @property string $comment
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property int|null $height
 * @property int|null $user_id
 * @property-read string $full_name
 * @property-write mixed $companies
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Contact4 whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Contact4 whereBirthday($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Contact4 whereComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Contact4 whereCountryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Contact4 whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Contact4 whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Contact4 whereHeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Contact4 whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Contact4 whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Contact4 wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Contact4 wherePhoto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Contact4 whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Contact4 whereUserId($value)
 * @mixin \Eloquent
 * @property-read \App\User|null $author
 * @property-read \App\Model\Country|null $country
 */
	class Contact4 extends \Eloquent {}
}

namespace App\Model{
/**
 * App\Model\Contact6
 *
 * @property int $id
 * @property string $firstName
 * @property string $lastName
 * @property string|null $photo
 * @property string $birthday
 * @property string $phone
 * @property string $address
 * @property int|null $country_id
 * @property string $comment
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property int|null $height
 * @property int|null $user_id
 * @property-read string $full_name
 * @property-write mixed $companies
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Contact6 whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Contact6 whereBirthday($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Contact6 whereComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Contact6 whereCountryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Contact6 whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Contact6 whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Contact6 whereHeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Contact6 whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Contact6 whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Contact6 wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Contact6 wherePhoto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Contact6 whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Contact6 whereUserId($value)
 * @mixin \Eloquent
 * @property-read \App\User|null $author
 * @property-read \App\Model\Country|null $country
 */
	class Contact6 extends \Eloquent {}
}

namespace App\Model{
/**
 * App\Model\News8
 *
 * @property int $id
 * @property string $title
 * @property string $date
 * @property int $published
 * @property string $text
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\News last()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\News8 whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\News8 whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\News8 whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\News8 wherePublished($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\News8 whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\News8 whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\News8 whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class News8 extends \Eloquent {}
}

namespace App\Model{
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
	class PageOrder extends \Eloquent {}
}

namespace App\Model{
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
	class News extends \Eloquent {}
}

namespace App\Model{
/**
 * App\Model\News4
 *
 * @property int $id
 * @property string $title
 * @property string $date
 * @property int $published
 * @property string $text
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\News last()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\News4 whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\News4 whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\News4 whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\News4 wherePublished($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\News4 whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\News4 whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\News4 whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class News4 extends \Eloquent {}
}

namespace App{
/**
 * App\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string|null $remember_token
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property mixed $avatar
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Model\Contact[] $contacts
 * @property-read string $avatar_url_or_blank
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Role[] $roles
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereAvatar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class User extends \Eloquent {}
}

