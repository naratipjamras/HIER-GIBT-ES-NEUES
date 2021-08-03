@extends('layouts.master')

@section('content')

    <h1>HIER + GIBT + ES = NEUES</h1>
    <p class="lead">All solutions. <a href="{{ route('tasks.create') }}">Add a new one?</a></p>
    <hr>

    @if(Session::has('flash_message'))
        <div class="alert alert-success">
            {{ Session::get('flash_message') }}
        </div>
    @endif

    @foreach($tasks as $task)
        <h3>{{ $task->solution }}</h3>
        <p>Iteration: {{ $task->iteration }}</p>
        <p>
            <a href="{{ route('tasks.show', $task->id) }}" class="btn btn-info">View Solution</a>
            <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-primary">Regenerate Solution</a>
        </p>
        <hr>
    @endforeach


@endsection
