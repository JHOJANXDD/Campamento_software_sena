<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Bootcamp;
use File;
use Illuminate\Support\Facades\Hash;

class BootcampSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //1. LEER ARCHIVO USER.JSON 
        $json=File::get("database/_data/bootcamps.json");
        //2. CONVERTIR EL CONTENIDO A UNA ARREGLO A PHP
        $arreglo=json_decode($json);
        var_dump($arreglo);
        //3. RECORRER EL REGALO EN PHP
        foreach($arreglo as $b){
        //4. POR CADA UNO DE LOS ELEMENTOS DEL ARREGLO CREAR USER
        $newBootcamp = new Bootcamp();
        $newBootcamp->name = $b->name;
        $newBootcamp->webside = $b->webside;
        $newBootcamp->phone = $b->phone;
        $newBootcamp->description = $b->description;
        $newBootcamp->user_id = $b->user_id;
        $newBootcamp->average_cost = $b->average_cost;
        $newBootcamp->average_rating = $b->average_rating;
        $newBootcamp->save();
        }
        
    }
}
