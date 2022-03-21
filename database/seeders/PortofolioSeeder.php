<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PortofolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::tables('portofolios')->insert([
            [
                "imgLink" => "img/portfolio/portfolio-1.jpg"
            ],

            [
                "imgLink" => "img/portfolio/portfolio-2.jpg"
            ],

            [
                "imgLink" => "img/portfolio/portfolio-3.jpg"
            ],

            [
                "imgLink" => "img/portfolio/portfolio-4.jpg"
            ],

            [
                "imgLink" => "img/portfolio/portfolio-5.jpg"
            ],

            [
                "imgLink" => "img/portfolio/portfolio-6.jpg"
            ],

            [
                "imgLink" => "img/portfolio/portfolio-7.jpg"
            ],

            [
                "imgLink" => "img/portfolio/portfolio-8.jpg"
            ],

            [
                "imgLink" => "img/portfolio/portfolio-9.jpg"
            ],
        ]);
    }
}
