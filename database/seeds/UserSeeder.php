<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	User::create([
    		'name'=>'Santos',
            'appaterno'=>'Perez',
            'apmaterno'=>'Gonzalez',
        	'email'=>'d10smessirmxhck@gmail.com',
        	'type'=>'Administrador',
        	'password'=>bcrypt('gpocadmin')
    	]);

    	User::create([
    		'name'=>'Norma',
            'appaterno'=>'Cortes',
            'apmaterno'=>'Flores',
        	'email'=>'solecito2.0ghz@gmail.com',
        	'type'=>'Usuario',
        	'password'=>bcrypt('87654321')
    	]);        
    }
}
