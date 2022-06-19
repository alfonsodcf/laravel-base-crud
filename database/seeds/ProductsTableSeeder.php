<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $prodotti = config('comics');
        foreach($prodotti as $prodotto){
            $newProduct = new Product();
            $newProduct->title = $prodotto['title'];
            $newProduct->description = $prodotto['description'];
            $newProduct->image = $prodotto['thumb'];
            $newProduct->price = $prodotto['price'];
            $newProduct->series = $prodotto['series'];
            $newProduct->sale_date = $prodotto['sale_date'];
            $newProduct->type = $prodotto['type'];
            $newProduct->save();
        }
                
    }
}
