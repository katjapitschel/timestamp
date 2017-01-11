@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <h1>Alle Aufgaben</h1>
        <ul class="list-group">
            @foreach($tasks as $task)
                <div class="list-group-item">
                    <a href="{{ $task->path() }}">{{ $task->company }}</a>
                </div>
            @endforeach
        </ul>

    </div>
</div>
@stop