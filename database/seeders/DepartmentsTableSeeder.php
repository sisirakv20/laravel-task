<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use App\Models\Department;

class DepartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('departments')->insert([
            ['name' => 'IT', 'created_at' => now()],
            ['name' => 'HR', 'created_at' => now()],
            ['name' => 'Finance', 'created_at' => now()],
        ]);
    }
}
