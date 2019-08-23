<?php

use Illuminate\Database\Seeder;
use App\Models\ProjectStatus as ProjectStatus;

class ProjectStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $status = [
            ['name'=>'Sales'],
            ['name'=>'R & D'],
            ['name'=>'In Production'],
            ['name'=>'Pending Approval'],
            ['name'=>'Completed'],
        ];

        foreach ($status as $taskstatus)
        {
            ProjectStatus::create($taskstatus);
        }
    }
}
