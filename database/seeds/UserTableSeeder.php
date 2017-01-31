<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $branch = ['CSE', 'CE', 'ME', 'ECE', 'IT', 'EN'];
        $skill_set=['C','C++','Java','Python','ANgularJS','NodeJs','Ruby','Android','IOS','PHP','Laravel'];


        for ($i = 0; $i <= 100; $i++) {
            \App\User::create(
                [
                    'name' => $faker->name,
                    'email' => $faker->unique()->email,
                    'password' => 'poko',
                    'branch' => $faker->randomElement($branch),
                    'year_of_passing'=>$faker->year,
                    'skills'=>$faker->randomElement($skill_set),
                    'certification'=>$faker->randomElement($skill_set),
                    'training'=>$faker->randomElement($skill_set),
                    'interests'=>$faker->randomElement($skill_set)


                ]
            );
        }
    }
}
