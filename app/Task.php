<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public function notes()
    {
        return $this->hasMany(Note::class);
    }

    public function path()
    {
        return '/tasks/' . $this->id;
    }

    public function addNote(Note $note)
    {
        return $this->notes()->save($note);
    }
}
