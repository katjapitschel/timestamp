@extends('layouts.app')
@section('content')
@foreach ($data as $user)
    <p>{{ $user->id }}<br />
        {{ $user->email }}<br />
        {{ $user->name }}<br />
    </p>
@endforeach
@endsection
