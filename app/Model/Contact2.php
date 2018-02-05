<?php namespace App\Model;

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
class Contact2 extends Contact
{

}
