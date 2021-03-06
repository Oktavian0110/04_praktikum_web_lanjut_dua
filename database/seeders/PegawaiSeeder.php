<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //data faker indonesia
        $faker = Faker::create('id_ID');

        //membuat data dummy sebanyak 10 record
        for($x = 1; $x <= 10; $x++){

            //insert data dummy pegawai dengan faker
            DB::table('pegawaai')->insert([
                'nama'=> $faker->name,
                'alamat' => $faker->address,
            ]);
        }
    }
}
