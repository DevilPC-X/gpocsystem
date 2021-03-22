<?php

use Illuminate\Database\Seeder;
use App\Proveedor;

class ProviderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Proveedor::create([
            'nombre'=>'Sin Proveedor'
        ]);

        Proveedor::create([
            'nombre'=>'El Cerrito'
        ]);

        Proveedor::create([
            'nombre'=>'Mas Ferreterias'
        ]);
    }
}
