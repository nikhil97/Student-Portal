<?php

use App\Activity;
use Illuminate\Database\Seeder;

class ActivityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $type = ['project', 'competition', 'seminar', 'workshop', 'guest_lecture', 'co_curricular'];
        for ($i = 0; $i <= 100; $i++) {

            Activity::create(
                [
                    'title' => $faker->title,
                    'desc' => $faker->realText(200),
                    'start' => $faker->date,
                    'end' => $faker->date,
                    'type' => $faker->randomElement($type)

                ]
            );
        }
    }
}
