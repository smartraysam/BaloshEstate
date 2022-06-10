<?php

namespace Database\Seeders;
use App\Models\EmergencyContacts;
use Illuminate\Database\Seeder;

class DefaultContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        EmergencyContacts::create([
            'contact_name' => 'VGC',
            'contact_phone' => '07065384842',
            'type'=>1
        ]);
        EmergencyContacts::create([
            'contact_name' => 'Fire Unit',
            'contact_phone' => '07065384842',
            'type'=>1
        ]);

        EmergencyContacts::create([
            'contact_name' => 'Hospital ',
            'contact_phone' => '07065384842',
            'type'=>1
        ]);

        EmergencyContacts::create([
            'contact_name' => 'Police Station',
            'contact_phone' => '07065384842',
            'type'=>1
        ]);

        EmergencyContacts::create([
            'contact_name' => '24/7 Security Unit',
            'contact_phone' => '07065384842',
            'type'=>1
        ]);

   
    }
}