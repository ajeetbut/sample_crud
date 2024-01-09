<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Star; // Make sure the model namespace is correct
use Illuminate\Support\Facades\File;
class starseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $json = File::get(path:'database/json/stars.json');
       $stars = collect(json_decode($json));

        $stars->each(function ($star) {
           Star::create([
            'name' => $star-> name,
            'email' => $star->email,
            'age' => $star->age,
            'city' => $star->city,
        
        ]);
    
        });

         
    }
}
