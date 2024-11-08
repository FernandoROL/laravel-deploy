<?php

namespace Database\Seeders;

use App\Models\Vehicle;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VehicleSeeder extends Seeder
{
    public function run(): void
    {
        Vehicle::create([
            'uniqueCode'=>'code123',
            'brandID'=>1,
            'modelID'=>1,
            'versionID'=>1,
            'typeID'=>1,
            'fipeCode'=>'123123',
            'color'=>'orange',
            'engine'=>'engine1',
            'trunkSize'=> 'L',
            'userID'=>2,
        ]);
        Vehicle::create([
            'uniqueCode'=>'code222',
            'brandID'=>3,
            'modelID'=>3,
            'versionID'=>2,
            'typeID'=>1,
            'fipeCode'=>'010101',
            'color'=>'white',
            'engine'=>'engine4',
            'trunkSize'=> 'SM',
            'userID'=>1,
        ]);
        Vehicle::create([
            'uniqueCode'=>'code333',
            'brandID'=>1,
            'modelID'=>1,
            'versionID'=>1,
            'typeID'=>1,
            'fipeCode'=>'224455',
            'color'=>'black',
            'engine'=>'engine1',
            'trunkSize'=> 'L',
            'userID'=>3,
        ]);
    }
}
