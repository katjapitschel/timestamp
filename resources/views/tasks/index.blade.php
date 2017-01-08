@extends('layouts.app')
@section('content')
<h1>Alle Aufgaben</h1>

    @foreach($tasks as $task)
        <div>
            {{ $task->company }}
        </div>
    @endforeach
@stop