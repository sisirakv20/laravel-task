<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



use App\Models\Designation;
class DesignationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('designations')->insert([
            ['name' => 'Manager', 'created_at' => now()],
            ['name' => 'Developer', 'created_at' => now()],
            ['name' => 'Designer', 'created_at' => now()],
        ]);
    }
}
