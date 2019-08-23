<?php

use Illuminate\Database\Seeder;
use App\Models\Clients as Clients;
use App\Models\Contacts as Contacts;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ClientsSeeder::class);

        // create contacts
        $clientsIds = [];
        foreach (Clients::all() as $client) {
            $clientsIds[$client->name] = $client->id;
        }

        $list_contact = [
            [
                'name' =>'John',
                'title' => '',
                'first_name'=>'John',
                'middle' => '',
                'last_name' => 'Corpbay',
                'gender' => 'M',
                'occupation' => 'Founder',
                'phone' => '443.744.5402',
                'birth_day' => '1965-10-09',
                'email' => 'john@corpbay.com',
                'notes' => 'Great guy!',
                'client_id' => $clientsIds['Mango'],
            ]
        ];
        foreach ($list_contact as $val_c)
        {
            Contacts::create($val_c);
        }

        $this->call(TaskStatusSeeder::class);
        $this->call(MilstoneStatusSeeder::class);
        $this->call(ProjectStatusSeeder::class);
        $this->call(ProjectSeeder::class);
        $this->call(MilstoneSeeder::class);


    }
}
