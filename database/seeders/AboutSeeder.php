<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('abouts')->insert([
            [
                "title" => "UI/UX Designer & Web Developer",
                "introduction" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
                "birthday" => "24 January 1995",
                "website" => "www.hndrckx.be",
                "phone" => "0479/98.01.36",
                "city" => "Brussels",
                "age" => "27",
                "degree" => "Bachelor",
                "email" => "hndrckx@mail.com",
                "freelance" => "None",
                "conclusion" => "Officiis eligendi itaque labore et dolorum mollitia officiis optio vero. Quisquam sunt adipisci omnis et ut. Nulla accusantium dolor incidunt officia tempore. Et eius omnis. Cupiditate ut dicta maxime officiis quidem quia. Sed et consectetur qui quia repellendus itaque neque. Aliquid amet quidem ut quaerat cupiditate. Ab et eum qui repellendus omnis culpa magni laudantium dolores.",
            ]
        ]);
    }
}
