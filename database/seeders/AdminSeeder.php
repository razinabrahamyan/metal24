<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new Admin();
        $admin->email = 'smnned@gmail.com';
        $admin->name = 'Eduard Simonyan';
        $admin->password = bcrypt('*+2q%hgU$!EPFC&K');
        $admin->save();
    }
}
