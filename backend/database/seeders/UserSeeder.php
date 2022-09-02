<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use File;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //1. LEER ARCHIVO USER.JSON 
        $json=File::get("database/_data/users.json");
        //2. CONVERTIR EL CONTENIDO A UNA ARREGLO A PHP
        $arreglo=json_decode($json);
        var_dump($arreglo);
        //3. RECORRER EL REGALO EN PHP
        foreach($arreglo as $usuario){
        //4. POR CADA UNO DE LOS ELEMENTOS DEL ARREGLO CREAR USER
        $u = new User();
        $u->name = $usuario->name;
        $u->email = $usuario->email;
        $u->password = Hash::make($usuario->password);
        $u->save();
        }
        
    }
}
