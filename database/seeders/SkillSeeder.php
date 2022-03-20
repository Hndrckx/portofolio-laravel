<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('skills')->insert([
            [
                "technoName" => "HTML",
                "technoValue" => 95,
            ],
            
            [
                "technoName" => "CSS",
                "technoValue" => 85, 
            ],

            [
                "technoName" => "Javascript",
                "technoValue" => 75,
            ],

            [
                "technoName" => "PHP",
                "technoValue" => 80,
            ],

            [
                "technoName" => "Wordpress",
                "technoValue" => 90,
            ],

            [
                "technoName" => "Photoshop",
                "technoValue" => 85,
            ],
        ]);
    }
}
