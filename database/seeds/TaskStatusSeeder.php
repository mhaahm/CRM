<?php

use Illuminate\Database\Seeder;
use App\Models\TaskStatus as TaskStatusModel;

class TaskStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $taskstatus = [
            ['status_name'=>'Pending Start'],
            ['status_name'=>'Active'],
            ['status_name'=>'Pending Feedback'],
            ['status_name'=>'Completed']
        ];

        foreach ($taskstatus as $taskstatus)
        {
            TaskStatusModel::create($taskstatus);
        }
    }
}
