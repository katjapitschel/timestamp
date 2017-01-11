@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h1>{{ $task->company }}</h1>

            <ul class="list-group">
                @foreach($task->notes as $note)
                    <li class="list-group-item">
                        {{ $note->body }}
                        <a href="#" class="pull-right">{{ $note->user->name }}</a>
                    </li>
                @endforeach
            </ul>

            <hr>
            <h3>Eine neue Aufgabe eingeben</h3>

            <form method="POST" action="/tasks/{{ $task->id }}/notes">
                {{ csrf_field() }}
                <div class="form-group">
                    <textarea class="form-control" name="body">{{ old('body') }}</textarea>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Neue Aufgabe</button>
                </div>
            </form>

            @if(count($errors))
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
        </div>
    </div>
@stop