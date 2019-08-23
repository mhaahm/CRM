<?php

use Illuminate\Database\Seeder;
use App\Models\MilstoneStatus as MilstoneStatus;

class MilstoneStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $status = [
            ['ml_status_name' => 'Active'],
            ['ml_status_name' => 'Completed'],
            ['ml_status_name' => 'Pending']
        ];
        foreach ($status as $stat)
        {
            MilstoneStatus::create($stat);
        }

    }
}
