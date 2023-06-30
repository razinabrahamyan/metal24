<?php

namespace Database\Seeders;

use App\Models\Address;
use Illuminate\Database\Seeder;

class AddressesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Address::insert([
            [
                'lat'        => '55.586801',
                'lng'        => '37.739918',
                'address'    => '23-й километр Каширского шоссе, вл. 1, стр. 1',
                'sort'       => 1000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'lat'        => '55.583024',
                'lng'        => '37.616923',
                'address'    => 'Район Бирюлёво Западное',
                'sort'       => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'lat'        => '55.725346',
                'lng'        => '37.704837',
                'address'    => 'Автомобильный проезд, 10с23',
                'sort'       => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'lat'        => '55.706049',
                'lng'        => '37.820038',
                'address'    => 'Район Выхино-Жулебино',
                'sort'       => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'lat'        => '55.659745',
                'lng'        => '37.535900',
                'address'    => 'Обручевский район',
                'sort'       => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'lat'        => '55.702122',
                'lng'        => '37.588775',
                'address'    => 'Улица Вавилова, 9Ас20',
                'sort'       => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'lat'        => '55.774185',
                'lng'        => '37.576132',
                'address'    => 'Улица Пресненский Вал, 27с26',
                'sort'       => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'lat'        => '55.839041',
                'lng'        => '37.446032',
                'address'    => 'Район Южное Тушино',
                'sort'       => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'lat'        => '55.861619',
                'lng'        => '37.628677',
                'address'    => 'Район Отрадное',
                'sort'       => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'lat'        => '55.893993',
                'lng'        => '37.552735',
                'address'    => 'Район Восточное Дегунино',
                'sort'       => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'lat'        => '55.711003',
                'lng'        => '37.430573',
                'address'    => 'Верейская улица, 41с100',
                'sort'       => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'lat'        => '55.741645',
                'lng'        => '37.787473',
                'address'    => '2-я Владимирская улица, 62Ас10',
                'sort'       => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'lat'        => '55.790215',
                'lng'        => '37.698035',
                'address'    => 'Улица Матросская Тишина, 18с18',
                'sort'       => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'lat'        => '55.826389',
                'lng'        => '37.836517',
                'address'    => 'Городской округ Балашиха',
                'sort'       => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
