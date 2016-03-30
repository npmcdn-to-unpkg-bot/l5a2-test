<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User(['name'=>'Administrator', 'email'=>'info@naturedev.com', 'password'=>bcrypt('Adm!nD@v')]);
        $user->save();

        $user = new User(['name'=>'Stojan Kukrika', 'email'=>'stojank@naturedev.com', 'password'=>bcrypt('kuki85')]);
        $user->save();

        $user = new User(['name'=>'Dalibor Uzelac', 'email'=>'daliboru@naturedev.com', 'password'=>bcrypt('dado85')]);
        $user->save();

    }
}