<?php

use Illuminate\Database\Seeder;

class FundamentalSettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datetime = date('Y-m-d H:i:s');

        $settings = [
            [
                'title' => 'Основной номер телефона',
                'key' => 'tel1',
                'value' => '8(4922) 222-808',
                'created_at' => $datetime,
                'updated_at' => $datetime
            ],
            [
                'title' => 'Дополнительный номер телефона',
                'key' => 'tel2',
                'value' => '8-920-620-7620',
                'created_at' => $datetime,
                'updated_at' => $datetime
            ],
            [
                'title' => 'Основной Email',
                'key' => 'email1',
                'value' => 'lift_33@mail.ru',
                'created_at' => $datetime,
                'updated_at' => $datetime
            ],
            [
                'title' => 'Дополнительный Email',
                'key' => 'email2',
                'value' => 'info@ad33.ru',
                'created_at' => $datetime,
                'updated_at' => $datetime
            ],
            [
                'title' => 'Координаты на карте',
                'key' => 'geometry',
                'value' => '56.121291, 40.380491',
                'created_at' => $datetime,
                'updated_at' => $datetime
            ],
            [
                'title' => 'Адрес',
                'key' => 'address',
                'value' => 'г. Владимир, ул. Проспект Ленина 7',
                'created_at' => $datetime,
                'updated_at' => $datetime
            ],
        ];

        \Illuminate\Support\Facades\DB::table('fundamental_settings')
            ->insert($settings);
    }
}
