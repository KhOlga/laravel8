<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaskStatusesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'slug' => 'new',
                'name' => 'New'
            ],
            [
                'slug' => 'in_progress',
                'name' => 'In progress'
            ],
            [
                'slug' => 'postpone',
                'name' => 'Postpone'
            ],
            [
                'slug' => 'done',
                'name' => 'Done'
            ]
        ];

        foreach ($data as $item) {
            if (is_array($item)) {
                DB::table('task_statuses')->insert([
                    'slug' => $item['slug'],
                    'name' => $item['name']
                ]);
            }
        }

    }
}
