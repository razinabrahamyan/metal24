<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(AddressesSeeder::class);
        $this->call(MarketSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(ScrapTypeSeeder::class);
        $this->call(PageSeeder::class);
        $this->call(RegionsSeeder::class);
        $this->call(DismantlingRegionsSeeder::class);
        $this->call(DismantlingSeeder::class);
        $this->call(ScrapExportSeeder::class);
        $this->call(SlugSeeder::class);
        $this->call(ContentSeeder::class);
        $this->call(PriceSeeder::class);
        $this->call(AdminSeeder::class);
        $this->call(MaqrueePricesSeeder::class);
        $this->call(NewsSeeder::class);
        $this->call(MetaKeyWordsSeeder::class);
        $this->call(MobilePhoneSeeder::class);
    }
}
