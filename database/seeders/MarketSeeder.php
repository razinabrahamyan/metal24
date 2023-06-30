<?php

namespace Database\Seeders;

use App\Models\Market;
use Illuminate\Database\Seeder;

class MarketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            array('title'=>'Приём цветного металла'),
            array('title'=>'Приём кабеля'),
            array('title'=>'Приём аккумуляторов'),
            array('title'=>'Приём черного металла'),
            array('title'=>'Приём трансформаторов'),
            array('title'=>'Приём электродвигателей'),
            array('title'=>'Приём металлов РЗМ'),
        );
        Market::insert($data);
    }
}
