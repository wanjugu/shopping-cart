<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $product = new Product([
            'imagePath'=> 'https://hips.hearstapps.com/vader-prod.s3.amazonaws.com/1546016710-best-christian-movies-knowing-god-1546016696.jpg?crop=1xw:1xh;center,top&resize=480:*',
            'title'=>'Knowing God',
            'description'=>'The Bible isn\'t the only religious book to spend hours pouring over. From iconic novels to poetry about God and religion to coloring',
            'price'=> 50
        ]);

        $product->save();

        $product = new Product([
            'imagePath'=> 'https://s7d9.scene7.com/is/image/LifeWayChristianResources/9780718096144',
            'title'=>'Unshakable Hope',
            'description'=>'About this Item In Unshakable Hope, pastor and New York Times bestselling author Max Lucado offers encouraging, practical guidance for overcoming difficult circumstances and gaining inner peace, ',
            'price'=> 10
        ]);
        $product->save();


        $product = new Product([
            'imagePath'=> 'https://s7d9.scene7.com/is/image/LifeWayChristianResources/9780736979580?$FigureLarge$',
            'title'=>'It all began in a GARDEN',
            'description'=>'It All Began in a Garden features beautiful photography from Dawn Camp and introduces you to 52 essential oils and their vast array of uses',
            'price'=> 25
        ]);
        $product->save();

        $product = new Product([
            'imagePath'=> 'https://s7d9.scene7.com/is/image/LifeWayChristianResources/9780800736590?$XLarge$',
            'title'=>'Thanks for the Mammogram',
            'description'=>'When Laura Jensen Walker was diagnosed with breast cancer on her first wedding anniversary',
            'price'=> 60
        ]);
        $product->save();

        $product = new Product([
            'imagePath'=> 'https://hips.hearstapps.com/vader-prod.s3.amazonaws.com/1546017888-best-christian-books-the-shack-1546017873.jpg?crop=1xw:1xh;center,top&resize=480:*',
            'title'=>'The shack',
            'description'=>'The Bible isn\'t the only religious book to spend hours pouring over. From iconic novels to poetry about God and religion to coloring',
            'price'=> 20
        ]);

        $product->save();


    }
}
