<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tasks')->insert([
            'id' => 1,
            'topic_id' => 1,
            'name' => 'Functional Energy Stores',
            'active' => 1,
            'deleted' => 0
        ]);
    }
}
