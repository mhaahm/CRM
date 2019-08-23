<?php

use Illuminate\Database\Seeder;

class MilstoneSeeder extends Seeder
{

    /**
     * @param Model $entity
     * @return array
     */
    private function __getExternalEntity( $entity,$name_col):Array
    {
        $datas = [];
        foreach ($entity->all() as $user)
        {
            $datas[strtolower($user->{$name_col})] = $user->id;
        }
        return $datas;
    }
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $milstones_status = $this->__getExternalEntity(new App\Models\MilstoneStatus(),'ml_status_name');
        $projects = $this->__getExternalEntity(new App\Models\Project(),'project_name');
        $milstones = [
            [
                'name' => 'Design Complete',
                'duDate' => new DateTime('2013-10-27'),
                'delivrable' => 'Complete Design Mocks',
                'ms_staus' =>$milstones_status['active'],
                'project' => $projects['application build'],
                'totalHours' => 123

            ],
            [
                'name' => 'Design Converted to Code',
                'duDate' => new DateTime('2013-10-25'),
                'delivrable' => 'Design applied to working code base.<br />Core optimization.',
                'ms_staus' =>$milstones_status['active'],
                'project' => $projects['application build'],
                'totalHours' => 12

            ]
        ];
        foreach ($milstones as $milstone)
        {
            \App\Models\Milstones::create($milstone);
        }
    }
}
