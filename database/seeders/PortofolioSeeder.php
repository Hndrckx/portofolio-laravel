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
        DB::table('portofolios')->insert([
            [
                "imgLink" => "img/portfolio/portfolio-1.jpg",
                "imgType" => "filter-app",
            ],

            [
                "imgLink" => "img/portfolio/portfolio-2.jpg",
                "imgType" => "filter-web",
            ],

            [
                "imgLink" => "img/portfolio/portfolio-3.jpg",
                "imgType" => "filter-app",
            ],

            [
                "imgLink" => "img/portfolio/portfolio-4.jpg",
                "imgType" => "filter-card",
            ],

            [
                "imgLink" => "img/portfolio/portfolio-5.jpg",
                "imgType" => "filter-web",
            ],

            [
                "imgLink" => "img/portfolio/portfolio-6.jpg",
                "imgType" => "filter-app",
            ],

            [
                "imgLink" => "img/portfolio/portfolio-7.jpg",
                "imgType" => "filter-card",
            ],

            [
                "imgLink" => "img/portfolio/portfolio-8.jpg",
                "imgType" => "filter-card",
            ],

            [
                "imgLink" => "img/portfolio/portfolio-9.jpg",
                "imgType" => "filter-web",
            ],
        ]);
    }
}
