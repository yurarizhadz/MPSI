<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

        DB::table('users')->insert([
            'name' => 'admin',
            'role_id' => 1,
            'email' => 'admin@tracer.com',
            'password' => bcrypt('lea52016'),
        ]);
        DB::table('role')->insert([
            'id' => 1,
            'nama' => 'Admin',
        ]);
        DB::table('role')->insert([
            'id' => 2,
            'nama' => 'Employer',
        ]);
        DB::table('role')->insert([
            'id' => 3,
            'nama' => 'Jobseeker',
        ]);
	}

}
