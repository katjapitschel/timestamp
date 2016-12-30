<?php

use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pc = new User();
        $pc->name = 'Test User';
        $pc->email = 'tuser@example.net';
        $pc->password = bcrypt('secret');
        $pc->save();
    }
}
