<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i<=9; $i++){
            Product::create(['name' => 'Produit ' . ($i+1),
                'description' => 'description (ex: Réduction de bruit ultra performante Bluetooth et NFC avec invites vocales, Assistant Google intégré, Son équilibré, quel que soit le volume)',
                'photo_url' => 'https://picsum.photos/200/300',
                'price' => '349€99',
                'sellPrice' => '299€99',
                'PromoPrice' => '14%',
                'stock' => true
            ]);
        }

//        Product::create(['name' => 'Casque sans fil Bose QuietComfort 35 II Noir + Google Assistant',
//            'description' => 'Réduction de bruit ultra performante Bluetooth et NFC avec invites vocales, Assistant Google intégré, Son équilibré, quel que soit le volume.',
//            'photo_url' => 'https://picsum.photos/200/300',
//            'price' => '349€99',
//            'sellPrice' => '299€99',
//            'PromoPrice' => '14%',
//            'stock' => true
//        ]);
    }
}
