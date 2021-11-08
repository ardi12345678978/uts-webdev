<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert([
            'code' => 'math',
            'name' => 'Discrete Math',
            'description' => 'lorem ipsum dolor sit amet',
            'lecturer' => 'Citra',
            'sks' => '3',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('courses')->insert([
            'code' => 'db',
            'name' => 'Database',
            'description' => 'lorem ipsum dolor sit amet',
            'lecturer' => 'Laura',
            'sks' => '4',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('courses')->insert([
            'code' => 'mad',
            'name' => 'Mobile Apps Development',
            'description' => 'lorem ipsum dolor sit amet',
            'lecturer' => 'Mychael',
            'sks' => '4',            
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
    }
}
