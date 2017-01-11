<?php

use App\Note;
use Illuminate\Database\Seeder;

class NoteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $notes = $this->createTestNote();
        foreach ($notes as $index => $note) {
            $pc = new Note();
            $pc->user_id = $note['user_id'];
            $pc->task_id = $note['task_id'];
            $pc->body = $note['body'];
            $pc->save();
        }
    }

    public function createTestNote():array
    {
        $data = array();

        for ($x = 0; $x <= 20; $x++) {
            $note = str_random(10);
            $data[] = ['task_id' => $x+1, 'body' => $note, 'user_id' => $x+1];
        }
        return $data;
    }
}
