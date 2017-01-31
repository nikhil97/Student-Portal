<?php

use Illuminate\Database\Seeder;

class ActivityUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        $user = \App\User::all()->pluck('id')->toArray();
        $activity = \App\Activity::all()->pluck('id')->toArray();
        for ($i = 0; $i <= 100; $i++) {
            DB::table('activity_user')->insert(
                [
                    'user_id' => $faker->randomElement($user),
                    'activity_id' => $faker->randomElement($activity)
                ]
            );

        }

    }
}
