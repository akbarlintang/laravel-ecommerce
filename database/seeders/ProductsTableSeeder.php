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
        Product::create([
            'name' => 'MacBook Pro',
            'slug' => 'macbook-pro',
            'details' => '15 inch, 1TB SSD, 32GB RAM',
            'price' => 249999,
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reiciendis possimus quas nostrum vitae corrupti placeat amet incidunt porro tenetur odio, earum excepturi, officia iusto repellendus dignissimos delectus voluptatibus consequuntur cupiditate.',
        ]);

        Product::create([
            'name' => 'MacBook Pro 2017',
            'slug' => 'macbook-pro-2017',
            'details' => '15 inch, 1TB SSD, 16GB RAM',
            'price' => 199999,
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reiciendis possimus quas nostrum vitae corrupti placeat amet incidunt porro tenetur odio, earum excepturi, officia iusto repellendus dignissimos delectus voluptatibus consequuntur cupiditate.',
        ]);

        Product::create([
            'name' => 'Laptop 3',
            'slug' => 'laptop-3',
            'details' => '13 inch, 1TB SSD, 16GB RAM',
            'price' => 149999,
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reiciendis possimus quas nostrum vitae corrupti placeat amet incidunt porro tenetur odio, earum excepturi, officia iusto repellendus dignissimos delectus voluptatibus consequuntur cupiditate.',
        ]);

        Product::create([
            'name' => 'Laptop 4',
            'slug' => 'laptop-4',
            'details' => '13 inch, 1TB SSD, 32GB RAM',
            'price' => 199999,
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reiciendis possimus quas nostrum vitae corrupti placeat amet incidunt porro tenetur odio, earum excepturi, officia iusto repellendus dignissimos delectus voluptatibus consequuntur cupiditate.',
        ]);

        Product::create([
            'name' => 'Laptop 5',
            'slug' => 'laptop-5',
            'details' => '14 inch, 2TB SSD, 16GB RAM',
            'price' => 199999,
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reiciendis possimus quas nostrum vitae corrupti placeat amet incidunt porro tenetur odio, earum excepturi, officia iusto repellendus dignissimos delectus voluptatibus consequuntur cupiditate.',
        ]);

        Product::create([
            'name' => 'Laptop 6',
            'slug' => 'laptop-6',
            'details' => '14 inch, 1TB SSD, 32GB RAM',
            'price' => 199999,
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reiciendis possimus quas nostrum vitae corrupti placeat amet incidunt porro tenetur odio, earum excepturi, officia iusto repellendus dignissimos delectus voluptatibus consequuntur cupiditate.',
        ]);

        Product::create([
            'name' => 'Laptop 7',
            'slug' => 'laptop-7',
            'details' => '15 inch, 2TB SSD, 16GB RAM',
            'price' => 229999,
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reiciendis possimus quas nostrum vitae corrupti placeat amet incidunt porro tenetur odio, earum excepturi, officia iusto repellendus dignissimos delectus voluptatibus consequuntur cupiditate.',
        ]);

        Product::create([
            'name' => 'Laptop 8',
            'slug' => 'laptop-8',
            'details' => '15 inch, 2TB SSD, 32GB RAM',
            'price' => 299999,
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reiciendis possimus quas nostrum vitae corrupti placeat amet incidunt porro tenetur odio, earum excepturi, officia iusto repellendus dignissimos delectus voluptatibus consequuntur cupiditate.',
        ]);

        Product::create([
            'name' => 'Laptop 9',
            'slug' => 'laptop-9',
            'details' => '14 inch, 2TB SSD, 32GB RAM',
            'price' => 239999,
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reiciendis possimus quas nostrum vitae corrupti placeat amet incidunt porro tenetur odio, earum excepturi, officia iusto repellendus dignissimos delectus voluptatibus consequuntur cupiditate.',
        ]);
    }
}
