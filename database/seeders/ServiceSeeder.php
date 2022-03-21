<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            [
                "serviceName" => "Lorem Ipsum",
                "serviceText" => "Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident",
                "serviceIcon" => "bi bi-briefcase"
            ],

            [
                "serviceName" => "Dolor Sitema",
                "serviceText" => "Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata",
                "serviceIcon" => "bi bi-card-checklist"
            ],

            [
                "serviceName" => "Sed ut perspiciatis",
                "serviceText" => "Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur",
                "serviceIcon" => "bi bi-bar-chart"
            ],

            [
                "serviceName" => "Magni Dolores",
                "serviceText" => "Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum",
                "serviceIcon" => "bi bi-binoculars"
            ],

            [
                "serviceName" => "Nemo Enim",
                "serviceText" => "At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque",
                "serviceIcon" => "bi bi-brightness-high"
            ],

            [
                "serviceName" => "Eiusmod Tempor",
                "serviceText" => "Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi",
                "serviceIcon" => "bi bi-calendar4-week"
            ],

        ]);
    }
}
