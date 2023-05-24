<?php

namespace Database\Seeders;

use App\Models\book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as faker;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        $faker = faker::create('id_ID');

        for ($i=0; $i <10 ; $i++){ 
            book::create([
                'book_title' => $faker->word(3),
                'book_author' => $faker->name(),
                'book_image' => 'https://kbimages1-a.akamaihd.net/53cdd44d-8a04-42ef-a711-bbe6a7aaca5e/1200/1200/False/the-unfair-advantage-4.jpg',
                'book_synopsis' => $faker->sentence(200),
                'book_year' => $faker->numberBetween(1990, 2020),
                'publisher_id' => rand(1,10),
            ]);
        }
    }
}
