<?php

namespace Database\Seeders;

use App\Models\publisher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as faker;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        $faker = faker::create('id_ID');
        $pubname = range('A', 'Z');

        for ($i=0; $i <10 ; $i++){ 
            publisher::create([
                'publisher_name' => 'pub'.$pubname[$i],
                'publisher_address' => $faker->address(),
                'publisher_phonenumber' => $faker->phoneNumber(),
                'publisher_email' => $faker->email(),
            ]);
        }
    }
}
