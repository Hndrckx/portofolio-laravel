<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('testimonials')->insert([
            [
                "testiText" => "Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.",
                "testiName" => "Saul Goodman",
                "testiWork" => "Ceo Founder",
                "testiImg" => "img/testimonials/testimonials-1.jpg",
            ],

            [
                "testiText" => "Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.",
                "testiName" => "Sara Wilsson",
                "testiWork" => "Designer",
                "testiImg" => "img/testimonials/testimonials-2.jpg",
            ],

            [
                "testiText" => "Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.",
                "testiName" => "Jena Karlis",
                "testiWork" => "Store Owner",
                "testiImg" => "img/testimonials/testimonials-3.jpg",
            ],

            [
                "testiText" => "Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.",
                "testiName" => "Matt Brandon",
                "testiWork" => "Freelancer",
                "testiImg" => "img/testimonials/testimonials-4.jpg",
            ],

            [
                "testiText" => "Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.",
                "testiName" => "John Larson",
                "testiWork" => "Entrepreneur",
                "testiImg" => "img/testimonials/testimonials-5.jpg",
            ],
        ]);
    }
}
