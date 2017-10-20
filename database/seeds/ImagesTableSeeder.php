<?php

use Illuminate\Database\Seeder;
use App\Image;
use Faker\Factory as Faker; 

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $imageLinks = array(
        	"https://jenniferjara.github.io/miportafolio/assets/img/iconos/css.png",
        	"https://jenniferjara.github.io/miportafolio/assets/img/iconos/html.png",
        	"https://jenniferjara.github.io/miportafolio/assets/img/iconos/jquery.png",
        	"https://jenniferjara.github.io/miportafolio/assets/img/iconos/bootstrap.png",
        );

        foreach ($imageLinks as $imageLink) 
        {
        	Image::create([
        		'title' => $faker->text(80),
        		'description' => $content = $faker->paragraph(5),
        		'thumbnail' => $imageLink,
        		'imageLink' => $imageLink,
        		'user_id' => $faker->numberBetween($min = 1, $max = 5),
           	]);
        }
    }
}
