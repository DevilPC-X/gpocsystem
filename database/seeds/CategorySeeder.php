<?php

use Illuminate\Database\Seeder;
use App\Categoria;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Categoria::create([
    		'nombre'=>'Sin Categoria'
        ]);
        
        Categoria::create([
    		'nombre'=>'Materiales Metalicos'
        ]);
        
        Categoria::create([
    		'nombre'=>'Materiales de Concreto'
        ]);
        
        Categoria::create([
    		'nombre'=>'Materiales de Arcilla'
        ]);
        
        Categoria::create([
            'nombre'=>'Materiales de Plastico'
        ]);

        Categoria::create([
            'nombre'=>'Otros'
        ]);
     
    }
}
