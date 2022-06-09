<?php

namespace Database\Seeders;
use App\Models\ReqCategory;
use Illuminate\Database\Seeder;

class RequestCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //1:Access,2:Payment;3:Profile,4:Clearance,5:Technician/contractors; 6:Work permit, 7:Others
        ReqCategory::create([
            'pointer' => 1,
            'name' => 'Access'
        ]);
        ReqCategory::create([
            'pointer' => 2,
            'name' => 'Payment'
        ]);
        ReqCategory::create([
            'pointer' => 3,
            'name' => 'Profile'
        ]);
        ReqCategory::create([
            'pointer' => 4,
            'name' => 'Clearance'
        ]);
        ReqCategory::create([
            'pointer' => 5,
            'name' => 'Technican/Contractors'
        ]);
        ReqCategory::create([
            'pointer' => 6,
            'name' => 'Work permit'
        ]);
        ReqCategory::create([
            'pointer' => 7,
            'name' => 'Neighourhood Issue'
        ]);
        ReqCategory::create([
            'pointer' => 8,
            'name' => 'Resident Issue'
        ]);
        ReqCategory::create([
            'pointer' => 7,
            'name' => 'Others'
        ]);

      
    }
}