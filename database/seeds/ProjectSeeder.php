<?php

use Illuminate\Database\Seeder;
use App\Proyecto;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Proyecto::create([
    		'nombre'=>'Loza'
        ]);
        
        Proyecto::create([
    		'nombre'=>'Cimiento'
        ]);
        
        Proyecto::create([
    		'nombre'=>'Pared'
        ]);
        
        Proyecto::create([
    		'nombre'=>'Piso'
        ]);
    }
}
