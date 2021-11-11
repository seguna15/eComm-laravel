<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                "name" => "Samsung Galaxy A53 5G",
                "price" => "400",
                "description" => "A smartphone with 8gb ram and much more features",
                "category" => "mobile",
                "gallery" => 'https://i.gadgets360cdn.com/large/samsung_galaxy_a53_5g_onleaks_twitter_1636443908806.jpg?downsize=950:*'
            ],
            [
                "name" => "Hi Sense TV",
                "price" => "500",
                "description" => "A smart tv with much more features",
                "category" => "tv",
                "gallery" => 'https://i.gadgets360cdn.com/large/hisense_55u6g_image_1634819309064.jpg?downsize=950:*'
            ],
             [
                "name" => "Samsung 55 inches TV",
                "price" => "800",
                "description" => "A smart tv with much more features",
                "category" => "tv",
                "gallery" => 'https://i.gadgets360cdn.com/large/samsung_neo_qled_tv_55qn90a_review_our_planet_1634645857687.jpg?downsize=950:*'
            ],
            [
                "name" => "Whirlpool Refrigerator",
                "price" => "350",
                "description" => "A fridge with much more features",
                "category" => "fridge",
                "gallery" => 'https://i.gadgets360cdn.com/large/Facebook-Carousel-2-24082020Artboard_6_1601365669138.jpg?downsize=950:*'
            ],
        ]);
    }
}
