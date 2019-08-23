<?php

use Illuminate\Database\Seeder;
use App\Models\UserModel as UserModel;
use App\Models\Clients as Clients;
use App\Models\ProjectStatus as ProjectStatus;
use App\Models\Project as Project;

class ProjectSeeder extends Seeder
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
        // get all user
        $users = $this->__getExternalEntity(new UserModel(),'user_name');
        $p_status = $this->__getExternalEntity(new ProjectStatus(),'name');
        var_dump($p_status);
        $clients = $this->__getExternalEntity(new Clients(),'name');
        $projects = [
            [
                'project_manager' => $users['mha'],
                'project_status'=>$p_status['in production'],
                'project_name' => 'Application Build',
                'start_date' => new \DateTime(),
                'client' =>$clients['macroserve'],
                'hourly_rate' => 100,
                'budget' => 6000,
                'active' => true,
                'total_hours'=> 8.25,
                'labor_cost' => 825,
                'material_cost' => 95,
                'total_cost' => 920
            ],
            [
                'project_manager' => $users['mha1'],
                'project_status'=>$p_status['in production'],
                'project_name' => 'New Intranet Website',
                'start_date' => new \DateTime('2019-07-10'),
                'client' =>$clients['corpbay'],
                'hourly_rate' => 130,
                'budget' => 2000,
                'active' => true,
                'total_hours'=> 0,
                'labor_cost' => 8250,
                'material_cost' => 950,
                'total_cost' => 9200
            ],
            [
                'project_manager' => $users['mha1'],
                'project_status'=>$p_status['in production'],
                'project_name' => 'Ad Campaign',
                'start_date' => new \DateTime('2019-07-10'),
                'client' =>$clients['corpbay'],
                'hourly_rate' => 130,
                'budget' => 12000,
                'active' => true,
                'total_hours'=> 0,
                'labor_cost' => 8250,
                'material_cost' => 950,
                'total_cost' => 9200
            ]
        ];

        foreach ($projects as $project)
        {
            Project::create($project);
        }
    }
}
