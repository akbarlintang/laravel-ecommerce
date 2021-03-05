<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Laptops
        for ($i = 1; $i < 20; $i++) {
            Product::create([
                'name' => 'Laptop ' . $i,
                'slug' => 'laptop-' . $i,
                'details' => [13, 14, 15][array_rand([13, 14, 15])] . ' inch, ' . [1, 2, 3][array_rand([1, 2, 3])] .' TB SSD, ' . [16, 32][array_rand([16, 32])] . 'GB RAM',
                'price' => [149999, 199999, 249999][array_rand([149999, 199999, 249999])],
                'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reiciendis possimus quas nostrum vitae corrupti placeat amet incidunt porro tenetur odio, earum excepturi, officia iusto repellendus dignissimos delectus voluptatibus consequuntur cupiditate.',
            ])->categories()->attach(1);
        }

        // Smartphones
        for ($i = 1; $i < 10; $i++) {
            Product::create([
                'name' => 'Smartphone ' . $i,
                'slug' => 'smartphone-' . $i,
                'details' => [6, 8, 12][array_rand([6, 8, 12])] . ' GB RAM, ' . [128, 256][array_rand([128, 258])] .' GB ROM, ',
                'price' => [59999, 69999, 79999][array_rand([59999, 69999, 79999])],
                'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reiciendis possimus quas nostrum vitae corrupti placeat amet incidunt porro tenetur odio, earum excepturi, officia iusto repellendus dignissimos delectus voluptatibus consequuntur cupiditate.',
            ])->categories()->attach(2);
        }

        // Tablets
        for ($i = 1; $i < 5; $i++) {
            Product::create([
                'name' => 'Tablet ' . $i,
                'slug' => 'tablet-' . $i,
                'details' => [6, 8][array_rand([6, 8])] . ' GB RAM, ' . [64, 128][array_rand([64, 128])] .' GB ROM, ',
                'price' => rand(34999, 44999),
                'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reiciendis possimus quas nostrum vitae corrupti placeat amet incidunt porro tenetur odio, earum excepturi, officia iusto repellendus dignissimos delectus voluptatibus consequuntur cupiditate.',
            ])->categories()->attach(3);
        }

        // TVs
        for ($i = 1; $i < 5; $i++) {
            Product::create([
                'name' => 'TV ' . $i,
                'slug' => 'tv-' . $i,
                'details' => [50, 55][array_rand([50, 55])] . ' inch, ' . [60, 120][array_rand([60, 120])] .' Hz Refresh Rate, ',
                'price' => rand(79999, 89999),
                'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reiciendis possimus quas nostrum vitae corrupti placeat amet incidunt porro tenetur odio, earum excepturi, officia iusto repellendus dignissimos delectus voluptatibus consequuntur cupiditate.',
            ])->categories()->attach(4);
        }

        // PlayStations
        Product::create([
            'name' => 'PS4 Fat',
            'slug' => 'ps4-fat',
            'details' => '1 TB HDD, Fat Edition',
            'price' => 29999,
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reiciendis possimus quas nostrum vitae corrupti placeat amet incidunt porro tenetur odio, earum excepturi, officia iusto repellendus dignissimos delectus voluptatibus consequuntur cupiditate.',
        ])->categories()->attach(5);

        Product::create([
            'name' => 'PS4 Slim',
            'slug' => 'ps4-slim',
            'details' => '1 TB HDD, Slim Edition',
            'price' => 34999,
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reiciendis possimus quas nostrum vitae corrupti placeat amet incidunt porro tenetur odio, earum excepturi, officia iusto repellendus dignissimos delectus voluptatibus consequuntur cupiditate.',
        ])->categories()->attach(5);

        Product::create([
            'name' => 'PS4 Pro',
            'slug' => 'ps4-pro',
            'details' => '1 TB HDD, Pro Edition',
            'price' => 44999,
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reiciendis possimus quas nostrum vitae corrupti placeat amet incidunt porro tenetur odio, earum excepturi, officia iusto repellendus dignissimos delectus voluptatibus consequuntur cupiditate.',
        ])->categories()->attach(5);

        // Digital Cameras
        for ($i = 1; $i < 5; $i++) {
            Product::create([
                'name' => 'Camera ' . $i,
                'slug' => 'camera-' . $i,
                'details' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit.',
                'price' => rand(79999, 89999),
                'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reiciendis possimus quas nostrum vitae corrupti placeat amet incidunt porro tenetur odio, earum excepturi, officia iusto repellendus dignissimos delectus voluptatibus consequuntur cupiditate.',
            ])->categories()->attach(6);
        }
    }
}