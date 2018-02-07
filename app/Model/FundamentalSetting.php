<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

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
 * @mixin \Eloquent
 */
class FundamentalSetting extends Model
{
    //что разрешаем править
    protected $fillable = [
        'title',
        'key',
        'value',
        'description',
    ];


}
