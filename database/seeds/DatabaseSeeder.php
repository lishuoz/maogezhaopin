<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// $users = factory(App\User::class, 9)->create();
    	$jobs = factory(App\Job::class, 100)->create();

    }
}
