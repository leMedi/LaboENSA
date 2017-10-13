<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
			'first_name' => 'mehdi',
			'last_name' => 'elhaij',
			'email' => 'mehdi@ensa.com',
			'bio' => 'hello, i am Mehdi',
			'password' => bcrypt('root'),
			'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
