<?php

namespace Database\Seeders;

use App\Models\Teacher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i=1; $i <= 5; $i++) { 

            Teacher::updateOrCreate([
                'name' => $faker->firstNameMale,
            ],[
                'description' => $faker->text(50),
                'work_hour' => $faker->randomNumber(),                    
            ]);
        }
    }
}
