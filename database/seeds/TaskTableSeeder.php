<?php

use App\Task;
use Illuminate\Database\Seeder;

class TaskTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tasks = $this->createTestTask();
        foreach ($tasks as $index => $task) {
            $pc = new Task();
            $pc->user_id = $task['user_id'];
            $pc->company = $task['company'];
            $pc->task = $task['task'];
            $pc->save();
        }
    }

    public function createTestTask():array
    {
        $data = array();

        for ($x = 0; $x <= 20; $x++) {
            $task = str_random(10);
            $data[] = ['company' => $task, 'task' => $task, 'user_id' => $x+1];
        }
        return $data;
    }
}
