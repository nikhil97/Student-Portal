<?php

use App\Activity;
use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        User::truncate();
        Activity::truncate();
        DB::table('activity_user')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');

        Model::unguard();

        $this->call(UserTableSeeder::class);
        $this->call(ActivityTableSeeder::class);
        $this->call(ActivityUserTableSeeder::class);

        Model::reguard();
    }
}
