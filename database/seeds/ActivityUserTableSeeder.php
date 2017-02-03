<?php

use App\Activity;
use App\User;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActivityUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        $user = User::all()->pluck('id')->toArray();
        $activity = Activity::all()->pluck('id')->toArray();
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
