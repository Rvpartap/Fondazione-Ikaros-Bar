<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     $userData = [
        [
        'name'=>'admin',
        'email'=>'gioxnet@gmail.com',
        'role_id'=>'1',
        'password'=> bcrypt('topoli_01'), 
        'classe'=>'admin', 
              
        ],
        [
        'name'=>'baradmin',
        'email'=>'gestione@artglobal.it',
        'role_id'=>'2',
        'password'=> bcrypt('topoli_01'),   
         'classe'=>'admin',     
        ],
        [
        'name'=>'studente1',
        'email'=>'giordano.bianchi@artglobal.it',
        'role_id'=>'0',
        'password'=> bcrypt('topoli_01'),   
         'classe'=>'admin',    
        ],
     ];
      foreach ($userData as $key => $val) {
            User::create($val);
        }  
    }
}
