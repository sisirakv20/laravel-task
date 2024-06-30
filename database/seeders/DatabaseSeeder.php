<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Department;
use App\Models\Designation;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);



        // $this->call([
        //     DesignationsTableSeeder::class,
        //     DepartmentsTableSeeder::class,
        //     UsersTableSeeder::class,
        // ]);

         User::factory()->count(50)->create();
         Department::factory()->count(50)->create();
         Designation::factory()->count(50)->create();
    }
}
