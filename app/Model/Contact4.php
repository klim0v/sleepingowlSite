<?php namespace App\Model;

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
 */
class Contact4 extends Contact
{

}
