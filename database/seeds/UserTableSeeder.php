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
        $users = $this->createTestUsers();
        foreach ($users as $index => $user) {
            $pc = new User();
            $pc->name = $user['name'];
            $pc->email = $user['email'];
            $pc->password = bcrypt('secret');
            $pc->save();
        }

    }

    public function createTestUsers():array
    {
        $data = array();

        for ($x = 0; $x <= 20; $x++) {
            $user = str_random(10);
            $data[] = ['name' => $user, 'email' => $user.'@example.net'];
        }
        return $data;
    }
}
