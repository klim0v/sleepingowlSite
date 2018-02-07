<?php namespace App\Model;
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
class Contact6 extends Contact
{
}
