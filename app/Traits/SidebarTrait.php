<?php
 namespace App\Traits;

 use App\Models\Address;
 use App\Models\Market;
 use App\Models\MarqueePrice;
 use App\Models\MetalPrice;

 trait SidebarTrait
 {
     public function getSideBar(): array
     {
         $markets = Market::query()
             ->orderBy( \DB::raw('FIELD(id, 4, 1, 2, 3, 5, 6, 7)'))
             ->with('slug', 'categories.products','products.metalPrice')
             ->with('products', function ($query) {
                 return $query->doesntHave('category');
             })
             ->get();

         $addresses = Address::all()->sortBy('sort');

         $marquee = MarqueePrice::all();

         return ['markets' => $markets, 'addresses' => $addresses, 'marquee' => $marquee];
     }
 }
