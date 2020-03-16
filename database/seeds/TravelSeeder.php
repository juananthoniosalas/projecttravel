<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class TravelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker::create('id_ID');

    	for($i = 1; $i <= 10; $i++){

    	      // insert data ke table pegawai menggunakan Faker
    		DB::table('travel')->insert([
    			'nama' => $faker->name,
    			'alamat' => $faker->address,
    			'email' => $faker->email,
    			'nomorhp' => $faker->phoneNumber,
          'tanggal' => $faker->date,
          'gunung' => $faker->city
    		]);

    	}
    }
}
