<?php

namespace Database\Seeders;

use App\Models\MobilePhoneNumber;
use Illuminate\Database\Seeder;

class MobilePhoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mobile = new MobilePhoneNumber();
        $mobile->status = 'up';
        $mobile->save();
    }
}
