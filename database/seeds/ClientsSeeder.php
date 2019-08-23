<?php

use Illuminate\Database\Seeder;
use App\Models\Clients as Clients;

class ClientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // create clients
        $clients[] = [
            'name' => 'Macroserve',
            'webSite' => 'http://www.macroserve.com',
            'industry' => 'Technology',
            'revenue' => 'Revenue',
            'description' => 'Client de test de l\'application',
            'phone' => '310-602-4009',
            'street1' => '3976 Sumner Street',
            'street2' => '',
            'city'=> 'Long Beash',
            'state' => 'CA',
            'zip' => '90802',
            'country' => '',
            'notes' => 'Note de client'
        ];
        $clients[] = [
            'name' => 'Patterson-Fletcher',
            'webSite' => 'http://www.pfllc.com',
            'industry' => 'Education',
            'revenue' => 'Revenue',
            'description' => 'Client de test de l\'application',
            'phone' => '402-269-1382',
            'street1' => '4435 Crummit Lane',
            'street2' => '',
            'city'=> 'Syracuse',
            'state' => 'NY',
            'zip' => '68446',
            'country' => '',
            'notes' => 'Note de client'
        ];
        $clients[] = [
            'name' => 'Corpbay',
            'webSite' => 'http://corpbay.com',
            'industry' => 'Heathcare',
            'revenue' => 'Revenue',
            'description' => 'A leader in HealthCare Management.',
            'phone' => '619-205-6584',
            'street1' => '4923 Holden Street',
            'street2' => '',
            'city'=> 'San Diego',
            'state' => 'CA',
            'zip' => '92121',
            'country' => '',
            'notes' => 'Strong potential for long-term partnership.'
        ];
        $clients[] = [
            'name' => 'Infosoft',
            'webSite' => 'http://www.infosoft.com',
            'industry' => 'Technology',
            'revenue' => 'Revenue',
            'description' => 'Client de test de l\'application',
            'phone' => '520-632-3440',
            'street1' => '1 Infosoft Way',
            'street2' => '',
            'city'=> 'Redmond',
            'state' => 'WA',
            'zip' => '34580',
            'country' => '',
            'notes' => ''
        ];
        $clients[] = [
            'name' => 'Mango',
            'webSite' => 'http://mango.com',
            'industry' => 'EDucation',
            'revenue' => 'Revenue',
            'description' => 'Mango is the premier educational software company in the world.',
            'phone' => '7173307734',
            'street1' => '4615 Center Blvd',
            'street2' => '',
            'city'=> 'New York',
            'state' => 'LIC',
            'zip' => '11109',
            'country' => '',
            'notes' => ''
        ];
        foreach ($clients  as $client)
        {
            $clientModel = new Clients();
            foreach ($client as $key => $val)
            {
                $clientModel->{$key} = $val;
            }
            try {
                $clientModel->save();

            } catch(\Illuminate\Database\QueryException $e) { }
        }
    }
}
