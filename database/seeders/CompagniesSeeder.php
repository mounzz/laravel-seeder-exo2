<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CompagniesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('compagnies')->insert([
            [
                'compagnyName' => Faker::create()->company,
                'compagnyAddress' => Faker::create()->streetAddress,
                'PostalCode' => Faker::create()->postcode,
                'DoorNumber' => Faker::create()->buildingNumber,
                'phoneNumber' => Faker::create()->phoneNumber,
                'email' => Faker::create()->safeEmail,
                'contactName' => Faker::create()->lastName,
                'contactFirstName' => Faker::create()->firstNameMale,
                'image' => Faker::create()->imageUrl($width = 50, $height = 50),
            ]
        ]);
    }
}
