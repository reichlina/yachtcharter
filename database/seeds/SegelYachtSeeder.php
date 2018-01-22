<?php

use Illuminate\Database\Seeder;

class SegelYachtSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $SegelYacht = new \App\SegelYacht([
            'imagePath'=>'{{ asset(images/sailingYachts/Customs_163.jpg) }}"',
            'title'=>'Customs 163\'',
            'description'=>'Mega Segelyacht',
            'length'=>49.70,
            'width'=>9.95 ,
            'manufacturer'=>'Fitzroy Yachts',
            'crew'=>10,
            'region'=>'Mittelmeer',
            'country'=>'Italien, Französisch-Polynesien, Frankreich, Kroatien',
            'harbour'=>'La Spezia, Cannes, Split',
            'price'=>165000
        ]);
        $SegelYacht->save();

        $SegelYacht = new \App\SegelYacht([
            'imagePath'=>'{{ asset(images/sailingYachts/Perini_Navi.jpg) }}',
            'title'=>'Perini Navi',
            'description'=>'Mega Segelyacht',
            'length'=>56,
            'width'=>11.50,
            'manufacturer'=>'Perini Navi',
            'crew'=>12,
            'region'=>'Mittelmeer, Karibik, Süd-Pazifik und Südsee',
            'country'=>'Italien, Jungfern-Inseln (Britisch), Französisch-Polynesien',
            'harbour'=>'Genua, Road Town (Tortola), Bora Bora',
            'price'=>225000
        ]);
        $SegelYacht->save();

        $SegelYacht = new \App\SegelYacht([
            'imagePath'=>'{{ asset(images/sailingYachts/Holland_Jachtbouw.jpg) }}',
            'title'=>'Holland Jachtbouw',
            'description'=>'Mega Segelyacht',
            'length'=>62,
            'width'=>10.88,
            'manufacturer'=>'Holland Boat Company',
            'crew'=>12,
            'region'=>'Mittelmeer, Indischer Ozean',
            'country'=>'Italien, Frankreich, Thailand',
            'harbour'=>'Porto Cervo, Cannes, Phuket',
            'price'=>1
        ]);
        $SegelYacht->save();

        $SegelYacht = new \App\SegelYacht([
            'imagePath'=>'{{ asset(images/sailingYachts/HJ_141.jpg) }}',
            'title'=>'Holland 141',
            'description'=>'Mega Segelyacht',
            'length'=>42.98,
            'width'=>7.45,
            'manufacturer'=>'Holland Jachtbouw',
            'crew'=>12,
            'region'=>'Mittelmeer',
            'country'=>'Spanien, Griechenland, Italien',
            'harbour'=>'Palma de Mallorca, Athen, Neapel',
            'price'=>77500
        ]);
        $SegelYacht->save();

        $SegelYacht = new \App\SegelYacht([
            'imagePath'=>'{{ asset(images/sailingYachts/Bali_4.0.jpg) }}',
            'title'=>'Bali 4.0',
            'description'=>'Segel Katamaran',
            'length'=>12.19,
            'width'=>6.70,
            'manufacturer'=>'Bali Catamarans',
            'crew'=>6,
            'region'=>'Mittelmeer',
            'country'=>'Kroatien',
            'harbour'=>'Kaštela',
            'price'=>2420
        ]);
        $SegelYacht->save();

        $SegelYacht = new \App\SegelYacht([
            'imagePath'=>'{{ asset(images/sailingYachts/Pajot_Athena_38.jpg) }}',
            'title'=>'Pajot Athena 38',
            'description'=>'Segel Katamaran',
            'length'=>12.19 ,
            'width'=>5.70,
            'manufacturer'=>'Fountaine Pajot',
            'crew'=>10,
            'region'=>'Mittelmeer',
            'country'=>'Griechenland',
            'harbour'=>'Lefkas, Korfu, Athen',
            'price'=>3150
        ]);
        $SegelYacht->save();

        $SegelYacht = new \App\SegelYacht([
            'imagePath'=>'{{ asset(images/sailingYachts/Lagoon_42.jpg) }}',
            'title'=>'Lagoon 42',
            'description'=>'Segel Katamaran',
            'length'=>12.80,
            'width'=>7.70,
            'manufacturer'=>'Lagoon',
            'crew'=>12,
            'region'=>'Mittelmeer',
            'country'=>'Kroatien',
            'harbour'=>'Trogir',
            'price'=>2200
        ]);
        $SegelYacht->save();

        $SegelYacht = new \App\SegelYacht([
            'imagePath'=>'{{ asset(images/sailingYachts/Neel_45.jpg) }}',
            'title'=>'Neel 45',
            'description'=>'Segel Trimaran',
            'length'=>13.41,
            'width'=>8.53,
            'manufacturer'=>'Neel Trimarans',
            'crew'=>10,
            'region'=>'Karibik',
            'country'=>'Guadeloupe',
            'harbour'=>'Pointe-à-Pitre',
            'price'=>5100
        ]);
        $SegelYacht->save();

    }
}
