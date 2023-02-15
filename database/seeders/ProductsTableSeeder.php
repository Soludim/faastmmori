<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            (object)[
                'name' => 'Faastmmori Banku',
                'price' => 6.00,
                'image' => 'products/shop-product-1-1.jpg'
            ],
            (object)[
                'name' => 'Faastmmori Koko',
                'price' => 2.00,
                'image' => 'products/shop-product-1-2.jpg'
            ],
            (object)[
                'name' => 'Faastmmori 10kg Bucket',
                'price' => 20.00,
                'image' => 'products/shop-product-1-3.jpg'
            ]
        ];

        foreach ($products as $product) {
            $new_product = new Product();
            $new_product->name = $product->name;
            $new_product->price = $product->price;
            $new_product->image = $product->image;
            $new_product->save();
        }
    }
}
