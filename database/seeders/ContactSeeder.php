<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            [
                "contactLocation" => "Chaussée de Waterloo 923, 1180 Uccle",
                "contactEmail" => "hndrckx@mail.com",
                "contactPhone" => "0479/79.79.79",
            ]
        ]);
    }
}
