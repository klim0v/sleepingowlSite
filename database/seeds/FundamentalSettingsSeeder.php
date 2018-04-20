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
        $settings = [
            [
                'title' => 'Название компании',
                'key' => 'app_name',
                'value' => 'Ближе к дому',
            ],
            [
                'title' => 'Номер телефона',
                'key' => 'tel',
                'value' => '8(4922) 222-808',
            ],
            [
                'title' => 'Номер телефона 2',
                'key' => 'tel2',
                'value' => '8-920-620-7620',
            ],
            [
                'title' => 'Email',
                'key' => 'email',
                'value' => 'lift_33@mail.ru',
            ],
            [
                'title' => 'Email',
                'key' => 'email2',
                'value' => 'info@ad33.ru',
            ],
            [
                'title' => 'Адрес',
                'key' => 'address',
                'value' => 'г. Владимир, ул. Проспект Ленина 7',
            ],
            [
                'title' => 'О нас (в футере)',
                'key' => 'about',
                'value' => 'Наша компания один из лидеров на рынке рекламных услуг г. Владимира. Над каждым проектом работает команда настоящих профессионалов, которые подходят к каждой своей задаче с необходимой долей перфекционизма и креативности.',
            ],
        ];

        \Illuminate\Support\Facades\DB::table('fundamental_settings')
            ->insert($settings);
    }
}
