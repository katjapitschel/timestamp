@extends('layouts.app')
@section('content')
    <h1>Aufgabe bearbeiten</h1>

    <form method="POST" action="/notes/{{ $note->id }}">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}
        <div class="form-group">
            <textarea class="form-control" name="body">{{ $note->body }}</textarea>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Aufgabe aktualisieren</button>
        </div>
    </form>
@stop