<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->insert([
            'code' => 'cal',
            'project' => 'Calculator',
            'description' => 'lorem ipsum dolor sit amet',
            'semester' => 'ODD',
            'mata_kuliah' => 'Algorithm Programming',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('projects')->insert([
            'code' => 'acc',
            'project' => 'Accounting',
            'description' => 'lorem ipsum dolor sit amet',
            'semester' => 'EVEN',
            'mata_kuliah' => 'Web Programming',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('projects')->insert([
            'code' => 'math',
            'project' => 'Matematika',
            'description' => 'lorem ipsum dolor sit amet',
            'semester' => 'EVEN',
            'mata_kuliah' => 'Discrete Math',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
    }
}
